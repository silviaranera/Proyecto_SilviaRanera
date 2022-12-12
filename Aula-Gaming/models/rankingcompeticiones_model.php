<?php

//Muestra un ranking con los puntos obtenidos
function mostrarRanking($conexion){
    try{  
        $insert = $conexion->prepare(" SELECT juego.nombre, competicion.email, competicion.puntos, competicion.fecha FROM juego, competicion WHERE juego.id_juego=competicion.idjuego ORDER BY competicion.puntos DESC");
        $insert->execute();
        return $insert;
    }catch(PDOException $e){
        echo $e->getMessage();
	}
}

?>