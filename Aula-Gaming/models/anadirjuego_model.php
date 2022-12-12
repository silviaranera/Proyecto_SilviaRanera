<?php

//Obtiene el código que le corresponde a un nuevo juego
function obtenerid($conexion){
	try {

		$consulta = $conexion->prepare("SELECT max(id_juego) as maximo FROM juego");
		$consulta->execute();

		$datos = $consulta->fetch(PDO::FETCH_ASSOC);

		return $datos["maximo"]+1;

	} catch (PDOException $ex) {
		return null;
	}
}

//Da de alta el juego
function alta($conexion,$idjuego,$nombre,$descripcion,$disponibilidad){
    try{  
        $insert = $conexion->prepare("INSERT INTO `juego`(`id_juego`, `nombre`, `descripcion`, `disponibilidad`) VALUES ('$idjuego','$nombre','$descripcion','$disponibilidad')");
        $insert->execute();

    }catch(PDOException $e){
        echo $e->getMessage();
	}
}

?>