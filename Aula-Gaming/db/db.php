<?php
	//Función: conexion()
	//Parámetros entrada: --
	//Parámetros salida: devuelve el identificador de la conexión
	function conexion(){
	  $servername = "localhost";
	  $username = "id19763958_dbaulagaming";
	  $password = "Proyecto22_SilviaRanera";
	  $dbname = "id19763958_dbgaming";

	  try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  }

	  catch(PDOException $e)
	  {
		echo "Error: " . $e->getMessage();
	  }

	  return $conn;
	}
?>