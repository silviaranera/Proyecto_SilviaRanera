<?php
	
	//Alta para el acceso
	function alta($nombre,$apellido,$email,$dni,$turno,$telefono,$contraseña,$conexion){
        	try{  
			$insert = $conexion->prepare("INSERT INTO alumno(email, contraseña, dni, telefono, nombre, apellido, turno) VALUES ('$email','$contraseña','$dni','$telefono','$nombre','$apellido','$turno')");
			$insert->execute();

		}catch(PDOException $e){
		    echo $e->getMessage();
	}
	}
    
	
	//Comprueba si ya esta registrado
	function comprobar($conexion,$email,$contraseña){
		try{
			$consulta=$conexion->prepare("SELECT email, contraseña FROM alumno WHERE email='$email' AND contraseña='$contraseña'");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	
?>
