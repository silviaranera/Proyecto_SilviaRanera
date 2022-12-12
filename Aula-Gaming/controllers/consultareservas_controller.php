<?php

    session_start();
	
	if(isset($_SESSION['email']) && isset($_SESSION['nombre']) && isset($_SESSION['turno'])){
		unset($_SESSION['email']);
		unset($_SESSION['nombre']);
        unset($_SESSION['turno']);
		session_destroy();
		header("Location:../index.php");
	}

	include_once "../db/db.php";
	$conexion=conexion();
	
	//include_once '../views/funciones.php';
	include_once '../models/consultareservas_model.php';
	//include_once '../views/consultareservas.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {	
		
        		
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['nombre'] = $_REQUEST['nombre'];

		$email=$_SESSION['email'];
		
		if(!empty($email)){
			$datos=mostrarReservas($conexion,$email);
			//var_dump ($datos);
			//mostrarTabla($datos);
			
		}
	}
	
	include_once '../views/consultareservas.php';

?>
