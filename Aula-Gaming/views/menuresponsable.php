<html>
    <head>
	    <title>Aula-Gamming</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	    <link href="./css/web.css" type="text/css" rel="stylesheet">

    <body>
        <div class="container-flex">
            <div>
                <div class="row-flex">
                     <div class="row align-items-center" class="row justify-content-center">
                        <header class="col-12">
                            <img  class="img-flex" class="float-center" width="100%"  class="img-responsive" src="imagenes/header3.jpg" />
                        </header>
                                    
                        <div class="col-12">
                            <div class="menuc">
                                <a class="home" href="menuresponsable.php">Home</a>
                                <a href="./../controllers/anadircompeticion_controller.php">Añadir competicion</a>
                                <a href="../index.php">Cerrar sesion</a>	
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="row align-items-center" class="row justify-content-center">
                        <div class="col-12">
                            <div id="inf">
                                <h1 class="titulo">Bienvenido</h1>
                                <b>Eres el responsable de añadir a tus compañeros sus competiciones.</b>
                                

                                <br><br><br>
                                <div class="col-12" >
                                    
                                    <button type="button" value="cerrar" 
                                            onclick="window.location.href='../index.php'" 
                                            style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red;" > 
                                            Cerrar sesión
                                    </button>
                                </div>
                                <br><br><br>
							</div>
                        </div>
                    </div>    
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
