<?php

    session_start();
    
	if(isset($_SESSION['email']) && isset($_SESSION['nombre']) && isset($_SESSION['turno'])){
		unset($_SESSION['email']);
		unset($_SESSION['nombre']);
        unset($_SESSION['turno']);
		session_destroy();
	}

	include_once "../db/db.php";
	$conexion=conexion();
	
	include_once '../models/cambiarcontrase_model.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email=$_POST["email"];
        $nueva=$_POST["nueva"];
		//var_dump($_POST);
		
		//Cuando pulsemos el boton enviar	
		if(isset($_POST["confirmar"])){
			//Si el campo no esta vacio modificaremos la contraseña
			if($_POST["nueva"] !=""){                            
					cambiarContrase($conexion, $nueva, $email);
					echo '<p style="color:green;font-size:20px;"> Se ha cambiado la contraseña </p>'."<br>";
			
				
			//Si los campos estan vacios aparecerá un mersaja de error
			}else{
				echo "<script>alert('No ha modificado la contraseña');</script>";
			}
			
		//Cuando pulsemos el boton volver
		}elseif(isset($_POST["volver"])) {
			header ("location:../index.php");
		}
	}
	include_once '../views/cambiarcontrase.php';
?>
