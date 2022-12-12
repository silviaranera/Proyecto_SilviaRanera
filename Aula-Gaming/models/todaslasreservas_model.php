
<?php
	//Muestra todas las reservas
	function mostrarReservas($conexion){
		try {
			$conexion=conexion();
			$consulta = $conexion->prepare("SELECT email, CASE
			WHEN reserva.esAdministrador=1 THEN '<i>SI</i>'
			WHEN reserva.esAdministrador=0 THEN 'NO'
			END AS 'responsable', turno, fecha_reserva
                                			FROM reserva 
                                			WHERE reservaActiva=1
                                			ORDER BY fecha_reserva DESC");
                                			
			$consulta->execute();	
			return $consulta;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$conexion=null;
	}
    
	
?>
