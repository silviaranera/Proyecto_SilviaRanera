<?php	

	session_start();
	
	if(isset($_SESSION['email'])){
		unset($_SESSION['email']);
		session_destroy();
	}

	include_once "../db/db.php";
	
	require_once "../models/loginadmin_model.php";
	
	if ($_POST) {
		$conexion = conexion();
		$email = $_POST["email"];
		$contraseña = $_POST["contraseña"];
		$respuesta=comprobar($conexion,$email,$contraseña);
		if(isset($respuesta)){
			//Si la comprobación es correcta, la respuesta se envia iniciando sesion con los datos del administrador visualizando el menu
			if($respuesta!=null){ 
				foreach($respuesta as $consulta){	
					$_SESSION['email']=$consulta['email'];	
				}
				//Vemos que tipo de responsable es
				$responsable=responsable($conexion,$email);
				if($responsable!=true){ //Si es administrador
					header("Location: ../views/menuadmin.php");
				}
				else{ //Si es alumno responsable
					header("Location: ../views/menuresponsable.php");
				}
				
			}else { // si la comprobación es erronea, la respuesta producirá un mensaje de error
				echo '<div style="color:red;font-size:20px;"> Los datos introducidos incorrectos</div>';
			}
		
    	}elseif(isset($_POST["volver"])) {
            header ("Location:../index.php");
        }
	}
	
	require_once "../views/loginadmin.php";

	
	
?>