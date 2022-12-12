<?php	

	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['nombre']) && isset($_SESSION['turno'])){
		unset($_SESSION['email']);
		unset($_SESSION['nombre']);
        unset($_SESSION['turno']);
		session_destroy();
	}

	include_once "../db/db.php";
	
	require_once "../models/login_model.php";
    //require_once "../views/login.php";
    if(isset($_POST["enviar"])){
    	if (isset($_POST) && !empty($_POST)) {
    		$conexion = conexion();
    		$email = ($_POST["email"]);
    		$contraseña = ($_POST["contraseña"]);
    		$respuesta=comprobar($conexion,$email,$contraseña);
    		if(isset($respuesta)){
    			if($respuesta!=null){
    				foreach($respuesta as $consulta){
    					$_SESSION['turno']=$consulta['turno'];	
    					$_SESSION['email']=$consulta['email'];
    					$_SESSION['nombre']=$consulta['nombre'];	
    				}
					//Buscamos tambien el juego que está activo para tenerlo en sesion
					$respuestaJuego = buscarJuegoActivo($conexion);
					if(isset($respuestaJuego))
					{
						if($respuestaJuego!=null)
						{
							foreach($respuestaJuego as $consulta2){
								$_SESSION['juegoId']=$consulta2['id_juego'];	
								$_SESSION['juegoName']=$consulta2['nombre'];	
							}
						}
					}
    				header("Location:../views/menu.php");
    			}else { 
    				echo '<div style="color:red;font-size:20px;"> Los datos introducidos incorrectos</div>';
    			}
    		}
    	}
	}elseif(isset($_POST["volver"])) {
        header ("location:../index.php");
    }
	require_once "../views/login.php";
	
?>
