
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
                            <img  class="img-flex" class="float-center" width="100%"  class="img-responsive" src="../views/imagenes/header3.jpg" />
                        </header>
                                    
                        <div class="col-12">
                            <div class="menuc">
                                <a class="home" href="./../views/menuresponsable.php">Home</a>
                                <a href="./anadircompeticion_controller.php">Añadir competicion</a>
                                <a href="../index.php">Cerrar sesion</a>	
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div id="inf">
                    <div class="titulo"><h1>AÑADIR COMPETICION</h1></div><br>
                        <form name="primero" method="POST" action="anadircompeticion_controller.php">
                            
                            <b>Alumnos</b><br>
                                    <?php
                                       mostraralumnos($conexion);
                                    ?>
                            <br><br>
                            <label>Juegos</label>
                                <?php
                                    mostrarids($conexion);
                                ?>
                            <br><br>
                                
                            <label name="fecha">Fecha de la competicion</label><br>
                            <input class="form-control-md" type="date" name="fecha"><br><br>
                                        
                            <label name="puntos">Puntos</label><br>
                            <input class="form-control-md" type="text" name="puntos"><br><br>
                                        
                            <button type="submit" name="enviar" value="Continuar" style="background-color:#fcfcfc; color:#000000; box-shadow:3px 3px 10px red;"> Enviar datos </button> &nbsp;&nbsp;&nbsp;
                            <button type="submit" name="volver" value="Volver" style="background-color:#fcfcfc; color:#000000; box-shadow:3px 3px 10px red;" onclick="window.location.href='views/menuadmin.php'"> Volver </button>
                            
                        </form>
                    </div>
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
