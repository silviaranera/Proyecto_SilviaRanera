<?php	
	
	//Validacion de administrador, comprueba si existe. 
	function comprobar($conexion,$email,$contraseña){
		try{
			$consulta=$conexion->prepare("SELECT email,contraseña FROM administrador WHERE email='$email' AND contraseña='$contraseña'");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	//Validacion, comprueba si es profesor o alumno 
	function responsable($conexion,$email){
		try{
			$consulta=$conexion->prepare("SELECT tiporesponsable FROM administrador 
			WHERE email='$email'AND tiporesponsable='A' ");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	

?>