<?php	
	
	//Validacion de usuario, comprueba si existe el cliente. 
	function comprobar($conexion,$email,$contraseña){
		try{
			$consulta=$conexion->prepare("SELECT email,nombre,turno,contraseña FROM alumno WHERE email='$email' AND contraseña='$contraseña'");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	function buscarJuegoActivo($conexion){
		try{
			$consulta=$conexion->prepare("SELECT id_juego,nombre FROM juego WHERE disponibilidad=1");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	

?>
