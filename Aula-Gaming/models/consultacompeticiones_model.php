<?php

//Muestra las competiciones del usuario por fecha
function mostrarCompeticiones($conexion,$email){
    try{  
        $consulta = $conexion->prepare(" SELECT juego.nombre, competicion.puntos, competicion.fecha 
                                        FROM juego, competicion 
                                        WHERE juego.id_juego=competicion.idjuego and competicion.email='$email'
                                        ORDER BY competicion.fecha DESC");
        //SELECT juego.nombre, competicion.puntos, competicion.fecha FROM juego, competicion WHERE juego.id_juego=competicion.idjuego and competicion.email='raneras@gmail.com' ORDER BY competicion.fecha DESC
        $consulta->execute();
        return $consulta;
    }catch(PDOException $e){
        echo $e->getMessage();
	}
}

?>