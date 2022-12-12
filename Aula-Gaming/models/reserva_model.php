<?php	
	//comprobamos si hay puestos disponibles el dia y turno de la persona
	function comprobarPuestosDisponibles($conexion,$fechareserva,$turno)
	{
		try{
			$consulta=$conexion->prepare("SELECT numpuesto FROM reserva WHERE fecha_reserva = '$fechareserva' and
			turno = '$turno' and reservaActiva ='1' order by numpuesto");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
		     echo "Error comprobarPuestosDisponibles"."<br>";
			echo $e->getMessage();
		}
	}

	//Comprobamos el siguiente puesto disponible para la fecha indicada
	function obtenerSiguientePuestoDisponible($conexion,$puesto)
	{
		$consulta=$conexion->prepare("SELECT num_puesto FROM ordenador WHERE disponibilidad='0' order by num_puesto");
		$consulta->execute();
		$respuesta = $consulta->fetchAll();
		if(isset($respuesta)){
			if($respuesta!=null){
				foreach($respuesta as $consulta){
					if($consulta['num_puesto'] != $puesto)
					{
						$puesto=$consulta['num_puesto'];	
						return $puesto;
					}
				}
			}
		}
		return 0;
	}
	
	//Con esta funcion solucionamos los puestos mal asignados:
	//Obtiene el numero del puesto siguiente segun la fecha de reserva y la disponibilidad
	function obtenerNumeroPuestoDisponible($conexion,$fec,$numpuesto,$turno){
		try {

			$consulta = $conexion->prepare("SELECT MAX(reserva.numpuesto) as maximo 
											FROM reserva, ordenador 
											WHERE reserva.numpuesto=ordenador.num_puesto
											AND reserva.fecha_reserva='$fec'
											AND ordenador.disponibilidad='0' 
											AND turno = '$turno' 
											ORDER BY ordenador.num_puesto");
			$consulta->execute();

			$datos = $consulta->fetch(PDO::FETCH_ASSOC);

			return $datos["maximo"]+1;

		} catch (PDOException $ex) {
			return null;
		}
	}

	//Buscamos todas las reservas de un usuario por email
	function obtenerReservasUsuario($conexion,$email)
	{
	     try{
		$consulta=$conexion->prepare("SELECT * FROM reserva WHERE email='$email' and reservaActiva ='1' order by fecha_reserva");
		$consulta->execute();
		$respuesta = $consulta->fetchAll();
		return $respuesta;
	     }
	     	catch (PDOException $e) {
		        echo "Error obtenerReservasUsuario"."<br>";
			echo $e->getMessage();
		}
	}

	//Comprueba que hay puestos disponibles 
	function totalPuestosDisponibles($conexion){
        try{
			$consulta=$conexion->prepare("SELECT * FROM ordenador WHERE disponibilidad='0'");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
		        echo "Error totalPuestosDisponibles"."<br>";
			echo $e->getMessage();
		}
    }

    //Saca el juego disponible
    function juegoDisponible($conexion){
        try{
			$consulta=$conexion->prepare("SELECT id_juego, nombre FROM juego WHERE disponibilidad='0'");
			$consulta->execute();
			$respuesta= $consulta->fetchAll();

			if(isset($respuesta)){
				if($respuesta!=null){
					foreach($respuesta as $consulta){
						$juego=$consulta['id_juego'];	
						$_SESSION['juegoId']=$consulta['id_juego'];	
						$_SESSION['juegoName']=$consulta['nombre'];	
						return $juego;
					}
				}
			}
			return 0;
		}
		catch (PDOException $e) {
		      echo "Error juegoDisponible"."<br>";
			echo $e->getMessage();
		}
    }

//////////////////////////////////////////////////////////////////////////////////////////////////
    
	//Selecciona del numero de puesto disponible para asignarle a la reserva
    function puestoSeleccionado($conexion){
		try{
			$consulta=$conexion->prepare("SELECT num_puesto FROM ordenador WHERE disponibilidad='0'");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
		         echo "Error puestoSeleccionado"."<br>";
			echo $e->getMessage();
		}	
    }
//////////////////////////////////////////////////////////////////////////////////////////////////


    //Reserva un puesto disponible      
    function reservarPuesto($conexion,$numpuesto,$idjuego,$email,$fechareserva,$turno,$esAdministrador) {
        try{

			$consulta=$conexion->prepare("INSERT INTO reserva (numpuesto,idjuego,email,fecha_reserva,
			turno,esAdministrador,reservaActiva) 
				VALUES ('$numpuesto','$idjuego','$email','$fechareserva','$turno','$esAdministrador',1)");
			$consulta->execute();
			/*$resultado= $consulta->fetchAll();
			return $resultado;*/
		}
		catch (PDOException $e) {
		     echo "Error reservarPuesto"."<br>";
			echo $e->getMessage();
		}
    }
    
    //Cambia la disponibilidad del puesto que se ha reservado          
    function cambiarDisponibilidad($conexion,$numpuesto){
        try{
			$consulta=$conexion->prepare("UPDATE ordenador SET disponibilidad='1' WHERE num_puesto='$numpuesto'");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
		      echo "Error cambiarDisponibilidad"."<br>";
			echo $e->getMessage();
		}
    }
    
    //Cambia la la reservaActiva del puesto que se ha reservado          
    function cambiarActivo($conexion,$email){
        try{
			$consulta=$conexion->prepare("UPDATE reserva SET reservaActiva='0' WHERE $email");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
		      echo "Error cambiarReservaActiva"."<br>";
			echo $e->getMessage();
		}
    }

    //Select para mostrar datos de la tabla
    function datosTabla($conexion){
    	 try{
			$consulta=$conexion->prepare("SELECT alumno.nombre, alumno.apellido, alumno.email, alumno.turno, reserva.fecha, reserva.puesto, juego.nombre 
						FROM alumno, reserva, juego
						WHERE alumno.email=reserva.email, reserva.id_juego=juego.id_juego ");
			$consulta->execute();
			$resultado= $consulta->fetchAll();
			return $resultado;
		}
		catch (PDOException $e) {
		    echo "Error datosTabla"."<br>";
			echo $e->getMessage();
		}
    }

?>
