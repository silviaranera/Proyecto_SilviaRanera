<?php
    session_start();
    
	if(isset($_SESSION['email'])){
		unset($_SESSION['email']);
		session_destroy();
		header("Location:../index.php");
	}
	
	require_once("../db/db.php");
    
	$conexion=conexion();
	
    require_once "../models/disponibilidadordenadores_model.php";
			

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$disponibilidad=$_POST["disponibilidad"];	

        $puestos = $_POST["ids"];
		//var_dump($_POST);
		if(isset($_POST["enviar"])){
            if($_POST["disponibilidad"] !="")
            {      
                cambiopuesto($conexion,$puestos,$disponibilidad);
				echo '<p style="color:green;font-size:20px;"> Se ha modificado correctamente </p>'."<br>";	
			}else{
                echo "<script>alert('Faltan campos por rellenar');</script>";
            }
        }elseif(isset($_POST["volver"])) {
                header ("location:../views/menuadmin.php");
        }
	}
	
	
	require_once "../views/disponibilidadordenadores.php";
	    
?>
