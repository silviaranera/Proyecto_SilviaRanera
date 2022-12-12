<?php
    session_start();
    
	require_once("../db/db.php");
    
	$conexion=conexion();
	
    require_once "../models/checkin_model.php";
			

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
		$email=$_POST["email"];
        $dni=$_POST["dni"];
		$turno=$_POST["turno"];
		$telefono=$_POST["telefono"];
		$contraseña=$_POST["contraseña"];	

		//var_dump($_POST);
		if(isset($_POST["enviar"])){
            if($_POST["nombre"] !="" && $_POST["apellido"] !="" && $_POST["email"] !="" && $_POST["dni"] !="" && $_POST["turno"] !="" && $_POST["telefono"] !="" && $_POST["contraseña"] !=""){                            
				$respuesta=comprobar($conexion,$email,$contraseña);
				//var_dump($respuesta);
				if($respuesta==null){
					alta($nombre,$apellido,$email,$dni,$turno,$telefono,$contraseña,$conexion);
					echo '<p style="color:green;font-size:20px;"> Se ha dado de alta correctamente </p>'."<br>";
				}
				else{
					echo '<p style="color:red;font-size:20px;"> Este cliente ya existe en la base de datos </p>'."<br>";
				}
			}else{
                echo "<script>alert('Faltan campos por rellenar');</script>";
            }
        }elseif(isset($_POST["volver"])) {
                header ("location:../index.php");
        }
	}
	
	require_once "../views/checkin.php";
	    
?>