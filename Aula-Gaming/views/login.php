
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
						
                    </div>
                </div>
                <br><br>
                <div id="inf">
                    <div class="titulo"><h1>INCIAR SESION</h1></div><br>
                    <form name="primero" method="POST" action="login_controller.php">
                            
                        <label for="email">Email</label><br>
                        <input class="form-control-md" type="email" name="email"><br>
                                
                        <label for="contraseña">Contraseña</label><br>
                        <input class="form-control-md" type="password" name="contraseña">
                        
                        <br><br>
                        <button type="submit" name="enviar" value="enviar" style="background-color:#fcfcfc;color:#000000; box-shadow:3px 3px 10px red;">Aceptar</button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="submit" name="volver" value="volver" style="background-color:#fcfcfc;color:#000000; box-shadow:3px 3px 10px red;">Volver</button>
                    </form>
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
