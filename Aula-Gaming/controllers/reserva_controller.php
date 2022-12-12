<?php
    session_start();
	
	if(isset($_SESSION['email']) && isset($_SESSION['nombre']) && isset($_SESSION['turno'])){
		unset($_SESSION['email']);
		unset($_SESSION['nombre']);
        unset($_SESSION['turno']);
		session_destroy();
		header("Location:../index.php");
	}
    
    require_once("../db/db.php");

    $conexion=conexion();
        
    require_once '../models/reserva_model.php';
    
    include_once '../views/reserva.php';
        
	if($_SERVER["REQUEST_METHOD"] == "POST") {	

		$fechareserva=$_POST["fechareverva"];
        //Necesitamos de sesion el usuario para saber el turno que tiene y la tenemos en sesion
        $_SESSION['turno'];
        $fecha = new DateTime($fechareserva);
        $fec = $fecha->format('Y-m-d');
        $fechaActual = date('Y-m-d');
		if(isset($_POST["enviar"])){
            
            //Consulta para comprobar si hay ordenadores libres
            $conexion = conexion();
            
            //Comprobamos puestos disponibles para el dia y el numero total de sitios disponibles
    		$respuesta=comprobarPuestosDisponibles($conexion,$fec,$_SESSION['turno']);
    		
            $puestosTotales=totalPuestosDisponibles($conexion);
            
            //inicializamos una variable para manejar si puede o no reservar
            $puedeReservar = true;
            
            //buscamos el juego disponible
            $juegoDisponible = juegoDisponible($conexion);
             
            //comprobamos si tiene alguna reserva el usuario solo obtenemos las activas (campo reservaActiva a 1)
            $reservas = obtenerReservasUsuario($conexion,$_SESSION['email']);
             
            //Desabilita la reservaActiva
            //$cambiarActivo= cambiarActivo($conexion, $_SESSION['email']);
            
            if(isset($reservas)){
                if($reservas !=null){
                    foreach($reservas as $reserva){
                        $reserva=$reserva['fecha_reserva'];	
                        $fechaReserva = new DateTime($reserva);
                        $fechaReserva = $fechaReserva->format('Y-m-d');
                        //comprobacion para poder reservar si una fecha de reserva activa ya es pasada, es decir
                        //tenia una reserva el dia 12-11-2022 y reservo el dia 15-11-2022 
                        if($fechaReserva > $fechaActual)
                        {
                            //$cambiarActivo= true;
                            $puedeReservar = false;
                        }
                    }
                }
            }
            if($puedeReservar){
                //si la respuesta es 0 quiere decir que tenemos sitios disponibles y siempre toca el ordenador 1 que es administrador
                if(sizeof($respuesta) == 0){
                    $numpuesto = 1;//como no hay nada reservado cogemos el puesto 1 
                    reservarPuesto($conexion,$numpuesto,$juegoDisponible,$_SESSION['email'],$fec,$_SESSION['turno'],1);
                    //Cuando se reserva, almacenamos en sesion los datos de la reserva
                    $_SESSION['puesto']=$numpuesto;
                    $_SESSION['fechaReserva']=$fec;
                    $_SESSION['esAdministrador']="Es responsable";
                    //Ya tenemos los datos en sesion
                    
                    echo '<p style="color:green;font-size:20px;"> Reserva efectuada correctamente.</p>'.
                        " Fecha de la reserva: ".$fec.
                        " Numero de puesto: ".$numpuesto.
                        " <br/> " .$_SESSION['esAdministrador']."<br/><br/><br/>";
                }
                //En caso de devolver algo, debemos comprobar todos los puestos a ver cual esta libre y seleccionamos el disponible
                else if(sizeof($respuesta) == sizeof($puestosTotales))
                {
                    echo '<p style="color:green;font-size:20px;"> Lo sentimos, todos los puestos en el día indicado y en el turno indicado están ocupados.</p>'."<br>";
                }
                else{
                    if(isset($respuesta)){
                        if($respuesta!=null){
                            foreach($respuesta as $consulta){
                                $puesto=$consulta['numpuesto'];	
                            }
                        }
                    }
                    //$numpuesto = obtenerSiguientePuestoDisponible($conexion,$puesto);
                    $numpuesto = obtenerNumeroPuestoDisponible($conexion,$fec,$puesto,$_SESSION['turno']);
                    
                    if($numpuesto > 9)
                    {
                        echo '<p style="color:green;font-size:20px;"> Lo sentimos, todos los puestos en el día indicado y en el turno indicado están ocupados.</p>'."<br>";
                    }
                    else
                    {
                        //comprobamos si es administrador la persona si el ordenador que le toca es el 6
                        $EsAdministrador = 0;
                        if($numpuesto == 6)
                        {
                            $EsAdministrador = 1;
                        }
                        reservarPuesto($conexion,$numpuesto,$juegoDisponible,$_SESSION['email'],$fec,$_SESSION['turno'],$EsAdministrador);
                        
                        $_SESSION['puesto']=$numpuesto;
                        $_SESSION['fechaReserva']=$fec;
                        if($EsAdministrador == 0)
                            $_SESSION['esAdministrador']="NO es responsable";
                        else
                            $_SESSION['esAdministrador']="Es responsable";
                        //Ya tenemos los datos en sesion
                        echo '<p style="color:green;font-size:20px;"> Reserva efectuada correctamente.</p>'.
                        " Fecha de la reserva: ".$fec.
                        " Numero de puesto: ".$numpuesto.
                        " <br/> " .$_SESSION['esAdministrador']."<br/><br/><br/>";
                    }
                }
            } else{
                echo '<p style="color:green;font-size:20px;"> No puede reservar un puesto porque tienes ya una reserva activa.</p>'."<br>";
            }
		}else if(isset($_POST["volver"])){
            echo $fecha;
			//header("location:../views/menu.php");
		}	
    }
        


?>
