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
	
	include_once '../models/consultacompeticiones_model.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {	
		
        		
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['nombre'] = $_REQUEST['nombre'];

		$email=$_SESSION['email'];
		
		if(!empty($email)){
			$datos=mostrarCompeticiones($conexion,$_SESSION['email']);

			echo "<br> <br> <table border='2' width='60%' align='center' style='margin: 0px auto;'>";
                echo"<tbody>
                  	<tr> 
				  		<th> Juego </th> 
						<th> Puntos </th> 
						<th> Fecha </th> 
				  	</tr>";
                   foreach ($datos as $cada) {
                      echo   "<tr>
                                  <td>".$cada['nombre']."</td>
                                  <td>".$cada['puntos']."</td>
                                  <td>".$cada['fecha']."</td>
                              </tr>";
                  } //fin foreach 
                  echo "</tbody></table>";
                  echo "<br>";
       
		}
	}
	
	include_once '../views/consultacompeticiones.php';

?>