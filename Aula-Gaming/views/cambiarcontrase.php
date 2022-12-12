
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
                    <h2>¿ Desea cambiar la contraseña ?</h2>
                    
                    <br><br>
                    
                    <form method="POST" action="cambiarcontrase_controller.php">
                        
                        <p style="color:black">Introduzca su email: 
                        <input class="form-control-md" type="text" name="email"></p><br>
                        <p style="color:black">Introduzca la nueva contraseña: 
                        <input class="form-control-md" type="text" name="nueva"></p><br>
                        
                        <input type="submit" name="confirmar" value="Confirmar"style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red; "> &nbsp;
                        <input type="button" value="Volver" onclick="window.location.href='../views/menu.php'" style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red; ">
                
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <footer>
            <div class="copyright" >
                <div> &copy;Todos los derechos reservados</div>
            </div>
        </footer> 
    </body>
</html>
