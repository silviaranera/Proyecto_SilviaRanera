<?php

//Obtiene el código que le corresponde a una nueva competicion
function obtenerid($conexion){
	try {

		$consulta = $conexion->prepare("SELECT max(id_competicion) as maximo FROM competicion");
		$consulta->execute();

		$datos = $consulta->fetch(PDO::FETCH_ASSOC);

		return $datos["maximo"]+1;

	} catch (PDOException $ex) {
		return null;
	}
}


//Muestra todos los alumnos que tengan una reserva sin repeticiones
function mostraralumnos($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT DISTINCT reserva.email, alumno.nombre, alumno.apellido, alumno.turno
                                        FROM reserva, alumno 
                                        WHERE reserva.email=alumno.email
                                        ORDER BY email");	 
        $consulta->execute();	
        echo "<select name='idsa' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["email"].'"> '
                                    .$consulta["email"]. ' : ' 
                                    .$consulta["nombre"]. ' ' 
                                    .$consulta["apellido"].' -> ' 
                                    .$consulta["turno"]. '  
                </option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

//Muestra todos los alumnos que tengan una reserva
function mostrarAlumnosxFecha($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT reserva.email, alumno.nombre, alumno.apellido, alumno.turno, reserva.fecha_reserva 
                                        FROM reserva, alumno 
                                        WHERE reserva.email=alumno.email
                                        ORDER BY fecha_reserva DESC");	 
        $consulta->execute();	
        echo "<select name='idsa' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["email"].'"> '
                                    .$consulta["email"]. ' : ' 
                                    .$consulta["nombre"]. ' ' 
                                    .$consulta["apellido"].' -> ' 
                                    .$consulta["turno"]. '  -> ' 
                                    .$consulta["fecha_reserva"]. ' 
                </option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

//Muestra todos los nombres de los juegos em orden del idjuego ascendente
function mostrarids($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT id_juego, nombre FROM juego ORDER BY id_juego ASC");	 
        $consulta->execute();	
        echo "<select name='ids' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["id_juego"].'">'.$consulta["nombre"].'</option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

//Da de alta el juego
function alta($conexion,$idcompeticion,$idjuego,$alumno,$puntos,$fecha){
    try{  
        $insert = $conexion->prepare("INSERT INTO `competicion`(`id_competicion`, `idjuego`, `email`, `puntos`, `fecha`)  VALUES ('$idcompeticion','$idjuego','$alumno','$puntos','$fecha')");
        $insert->execute();

    }catch(PDOException $e){
        echo $e->getMessage();
	}
}

//Muestra todos los alumnos de mañana
function mostraralumnosM($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT email, nombre, apellido, turno FROM alumno WHERE turno='M' ORDER BY nombre ");	 
        $consulta->execute();	
        echo "<select name='idsa' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["email"].'">'
                                    .$consulta["email"]. ' : ' 
                                    .$consulta["nombre"]. ' ' 
                                    .$consulta["apellido"].'
                </option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

//Muestra todos los alumnos de tarde
function mostraralumnosT($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT email, nombre, apellido, turno FROM alumno WHERE turno='T' ORDER BY nombre ");	 
        $consulta->execute();	
        echo "<select name='idsa' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["email"].'">'
                                    .$consulta["email"]. ' -> ' 
                                    .$consulta["nombre"]. ' ' 
                                    .$consulta["apellido"].' 
                </option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

?>