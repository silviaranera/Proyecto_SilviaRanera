
<html>
     <head>
	    <title>Aula-Gamming</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="../views/bootstrap/css/bootstrap.min.css">
        <link href="../views/css/web.css" type="text/css" rel="stylesheet">
       
    </head>
    <body>
    <div class="container-flex">
            <div>
                <div class="row-flex">
                     <div class="row align-items-center" class="row justify-content-center">
                        <header class="col-12">
                            <img  class="img-flex" class="float-center" width="100%"  class="img-responsive" src="../views/imagenes/header.png" />
                        </header>
                                    
                         <div class="col-12">
                            <div class="menuc">
                                <a class="home" href="./../views/menu.php">Home</a>
                                <a href="./reserva_controller.php">Reservar</a>
                                <a href="./consultareservas_controller.php">Mi reserva</a>
                                <a href="./consultacompeticiones_controller.php">Mis competiciones</a>
                                <a href="./todaslasreservas_controller.php">Todas las reservas</a>
                                <a href="./rankingcompeticiones_controller.php">Ranking competiciones</a>
                                <a href="../index.php">Cerrar sesion</a>	
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div id="inf">
                    <div class="titulo">
                        <h1>RANKING DE COMPETICIONES</h1><br>
                    </div
                    <form name="primero" method="POST" action="rankingcompeticiones_controller.php">
                        
                        
    					<?php
    						$datos=mostrarRanking($conexion);
    						echo "<br> <br> <table border='2' width='60%' align='center' style='margin: 0px auto;'>";
                            echo"<tbody align='center' style='background-color: white;'>
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
                		?>
    				
                        
                        <br><br>
                        
                        <button type="button" value="Volver" onclick="window.location.href='../views/menu.php'" style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red;" >Volver</button>
                    </form>
                    <br><br>
                </div>
            </div>
            
            
            
            
           
            
            
        </div>
        <br><br>
        <footer>
            <div class="row">
                <div class="row align-items-center" class="row justify-content-center">
                    <div class="copyright" >
                        <div class="col-12"> &copy;Todos los derechos reservados</div>
                    </div>
                </div>
            </div>
        </footer> 
    </body>
</html>