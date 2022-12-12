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
                                <a class="home" href="./../views/menuadmin.php">Home</a>
                                <a href="./anadirjuego_controller.php">Añadir Juego</a>
                                <a href="./disponibilidadjuego_controller.php">Modificar la disponibilidad de un juego</a>
                                <a href="./disponibilidadordenadores_controller.php">Modificar la disponibilidad de un ordenador</a>
                                <a href="../index.php">Cerrar sesion</a>	
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div id="inf">
                    <div class="titulo"><h1>CAMBIAR DISPONIBILIDAD DE LOS PUESTOS DE UN ORDENADOR</h1></div><br>
                        <form name="primero" method="POST" action="disponibilidadordenadores_controller.php">
                                    
                            <label>Puestos de Ordenadores</label>
                                <?php
                                    mostrarids($conexion);
                                ?>
                            <br><br>
                                <p style="color:rgba(29, 27, 27, 0.432)">* 0= Disponible | 1= Ocupado/Fuera de servicio</p>
                            <br>

                            <label>Disponibilidad</label>
                                <select name="disponibilidad">
                                    <option value="0">Disponible</option>
                                    <option value="1">Ocupado o fuera de servicio</option>
                                </select><br><br><br>
                
                            <button type="submit" name="enviar" value="Continuar" style="background-color:#fcfcfc; color:#000000; box-shadow:3px 3px 10px red;"> Aceptar </button> &nbsp;&nbsp;&nbsp;
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
