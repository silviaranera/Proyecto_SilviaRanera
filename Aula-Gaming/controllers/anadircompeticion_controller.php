<?php
    session_start();
    
	if(isset($_SESSION['email'])){
		unset($_SESSION['email']);
		session_destroy();
		header("Location:../index.php");
	}
	
	require_once("../db/db.php");
    
	$conexion=conexion();
	
    require_once "../models/anadircompeticion_model.php";
			

	if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha=$_POST["fecha"];
		$puntos=$_POST["puntos"];
        $alumno= $_POST["idsa"];
        $idjuego = $_POST["ids"];
        $idcompeticion = obtenerid($conexion);
		//var_dump($_POST);
		if(isset($_POST["enviarm"])){
            if($_POST["puntos"] !="" && $_POST["fecha"] !="")
            {      
                alta($conexion,$idcompeticion,$idjuego,$alumno,$puntos,$fecha);
				echo '<p style="color:green;font-size:20px;"> Se ha dado de alta correctamente </p>'."<br>";	
			}else{
                echo "<script>alert('Faltan campos por rellenar');</script>";
            }
        }
	}
	
	require_once "../views/anadircompeticion.php";
	    
?>