<?php	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
     <head>
	    <title>Aula-Gamming</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="../views/bootstrap/css/bootstrap.min.css">
	    <link href="../views/css/web.css" type="text/css" rel="stylesheet">
	    
	    <!--Librerias de javascript para uso de calendarios y fechas-->
        <link rel="stylesheet" href="../views/js/jquery-ui.css" type="text/css">
        <link rel="stylesheet" href="../views/js/jquery-ui.structure.min.css" type="text/css">
        <link rel="stylesheet" href="../views/js/jquery-ui.theme.css" type="text/css">
        <script type="text/javascript" src="../views/js/jquery.js"></script>
        <script type="text/javascript" src="../views/js/jquery-ui.js" type="text/css"></script>
        <script>
            $(function () {
                $.datepicker.setDefaults($.datepicker.regional["es"]);
                $("#datepicker").datepicker({
                    firstDay: 1,
                    minDate: 0,
                    prevText: '< Ant',   //etiqueta de anterior
                    nextText: 'Sig >',   //etiqueta de siguiente
                    beforeShowDay: $.datepicker.noWeekends 
                });
            });
        </script>

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
                    <div class="titulo"><h1>RESERVA</h1></div><br>
                    
                    <b>Esta utilizando la cuenta de:</b><?php echo $_SESSION['email']; ?>

                    <form name="primero" method="POST" action="reserva_controller.php">
                        
                        <br><br>
                        
                            <b>JUEGO DISPONIBLE:</b> <?php echo $_SESSION['juegoName']; ?> </br>
                        
                            <label for="sel-fecha">Selecciona una fecha: </label>
			                <input  class="form-control-md" id="datepicker" name="fechareverva" type="text">

                        <br><br>
                        
                        <button type="submit" name="enviar" value="Continuar" style="background-color:#fcfcfc;color:#000000; box-shadow:3px 3px 10px red;">Confirmar reserva</button> &nbsp;&nbsp;&nbsp;
                        
                        <button type="button" name="volver" value="Volver" onclick="window.location.href='../views/menu.php'"  style="background-color:#fcfcfc; color:#000000; box-shadow:3px 3px 10px red;" >Volver</button>
                    </form>
                    
                    
                    <br><br>           
                    <?php 
                        
                    ?>
                </div>
            </div>
        </div>
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
