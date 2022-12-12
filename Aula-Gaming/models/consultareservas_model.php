<?php
	//Muestra las reservas
	function mostrarReserva($conexion,$email){
		try {
			$conexion=conexion();
			$consulta = $conexion->prepare("SELECT  juego.nombre juego, 
			CASE
			WHEN reserva.esAdministrador=1 THEN '<i>SI</i>'
			WHEN reserva.esAdministrador=0 THEN 'NO'
			END AS 'responsable',reserva.numpuesto , alumno.email email,alumno.nombre nombre, reserva.fecha_reserva fecha, alumno.turno turno 
                                			FROM reserva, alumno ,juego
                                			WHERE reserva.email=alumno.email 
                                			AND reserva.idjuego=juego.id_juego
                                			AND reserva.email='$email'  
                                			AND reservaActiva=1
                                			ORDER BY reserva.fecha_reserva DESC ");	 
			$consulta->execute();	
			return $consulta;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$conexion=null;
	}
    
	
?>
