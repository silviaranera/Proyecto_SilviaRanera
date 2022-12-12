<?php
    session_start();
    
	if(isset($_SESSION['email'])){
		unset($_SESSION['email']);
		session_destroy();
		header("Location:../index.php");
	}
	
	require_once("../db/db.php");
    
	$conexion=conexion();
	
    require_once "../models/anadirjuego_model.php";
			

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
		$disponibilidad=$_POST["disponibilidad"];	

        $idjuego = obtenerid($conexion);
		//var_dump($_POST);
		if(isset($_POST["enviar"])){
            if($_POST["nombre"] !="" && $_POST["descripcion"] !="" && $_POST["disponibilidad"] !="")
            {      
                alta($conexion,$idjuego,$nombre,$descripcion,$disponibilidad);
				echo '<p style="color:green;font-size:20px;"> Se ha dado de alta correctamente </p>'."<br>";	
			}else{
                echo "<script>alert('Faltan campos por rellenar');</script>";
            }
        }elseif(isset($_POST["volver"])) {
                header ("location:../views/menuadmin.php");
        }
	}
	
	require_once "../views/anadirjuego.php";
	    
?>
