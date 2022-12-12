<?php
//Muestra todos los ids de los juegos en el nombre
function mostrarids($conexion){
    try {
        $conexion=conexion();
        $consulta = $conexion->prepare("SELECT num_puesto, disponibilidad FROM ordenador ORDER BY num_puesto ASC");	 
        $consulta->execute();	
        echo "<select name='ids' required>";
            foreach($consulta->fetchAll() as $consulta){
                echo '<option value="'.$consulta["num_puesto"].'">  - Disponible:
                '.$consulta["disponibilidad"].' - Puesto: 
                '.$consulta["num_puesto"].'</option>';
            }
        echo "</select>";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conexion=null;
}

//Cambios para la disponibilidad
function cambiopuesto($conexion,$puestos,$disponibilidad){
    try{  
        $insert = $conexion->prepare(" UPDATE ordenador SET disponibilidad=$disponibilidad WHERE num_puesto=$puestos ");
        $insert->execute();

    }catch(PDOException $e){
        echo $e->getMessage();
	}
}

?>
