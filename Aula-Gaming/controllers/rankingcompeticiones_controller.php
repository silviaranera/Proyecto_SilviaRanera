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
	
	include_once '../models/rankingcompeticiones_model.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {	
		
		$datos=mostrarRanking($conexion);
        var_dump ($datos);
			echo "<br> <br> <table border='2' width='60%' align='center' style='margin: 0px auto;'>";
                echo"<tbody>
                  	<tr> 
				  		<th> Juego </th> 
						<th> Email </th> 
						<th> Puntos </th> 
						<th> Fecha </th> 
				  	</tr>";
                   foreach ($datos as $dato) {
                      echo   "<tr>
                                  <td>".$dato['nombre']."</td>
                                  <td>".$dato['email']."</td>
                                  <td>".$dato['puntos']."</td>
                                  <td>".$dato['fecha']."</td>
                              </tr>";
                  } //fin foreach 
                  echo "</tbody></table>";
                  echo "<br>";	
			
    	if(isset($_POST["volver"])) {
    		header ("location:../views/menuadmin.php");
    	}
	
	}
		include_once '../views/rankingcompeticiones.php';
	
	    

?>