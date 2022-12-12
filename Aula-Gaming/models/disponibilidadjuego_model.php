<?php

//Muestra todos los ids de los juegos en el nombre
function mostrarids($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT id_juego, nombre, disponibilidad FROM juego ORDER BY id_juego ASC");	 
        $consulta->execute();	
        echo "<select name='ids' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["id_juego"].'"> - Disponible:
                '.$consulta["disponibilidad"].' - Juego: 
                '.$consulta["nombre"].'</option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

//Cambios para la fecha de inicio, fecha de fin y la disponibilidad
function cambiosjuego($conexion,$idjuego,$disponibilidad){
    try{  
        $insert = $conexion->prepare(" UPDATE juego SET disponibilidad=$disponibilidad WHERE id_juego=$idjuego ");
        $insert->execute();

    }catch(PDOException $e){
        echo $e->getMessage();
	}
}

?>
