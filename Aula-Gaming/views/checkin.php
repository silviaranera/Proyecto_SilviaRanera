<html>
     <head>
	    <title>Aula-Gamming</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="../views/bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" href="../views/css/web.css" type="text/css">
  
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
                    <div class="titulo"><h1>REGISTRO</h1></div><br>
                        <form name="primero" method="POST" action="checkin_controller.php">
                                    
                            <label name="nombre">Nombre</label>
                            <input class="form-control-md" type="text" name="nombre" pattern="[a-zA-ZáéíóúüàèìòùÁÉÍÓÚÀÈÌÒÙÜ-]{3,20}"><br>
                            <p style="color:rgba(29, 27, 27, 0.432)">*El nombre solo admite letras y guion,debe tener un minimo de 3 letras</p>
                                            
                            <label name="apellido">Apellido</label>
                            <input class="form-control-md" type="text" name="apellido" pattern="[a-zA-ZáéíóúüàèìòùÁÉÍÓÚÀÈÌÒÙÜ ]{3,80}"><br>
                            <p style="color:rgba(29, 27, 27, 0.432)">*El apellido solo admite letras y espacios,debe tener un minimo de 3 letras</p>
                                            
                            <label name="dni">DNI</label>
                            <input class="form-control-md" type="text" name="dni"><br><br>
                                        
                            <label>Turno</label>
                                <select name="turno">
                                    <option value="M">Diurno</option>
                                    <option value="T">Vespertino</option>
                                </select><br><br><br>
                                    
                                    
                            <label name="telefono">Teléfono</label>
                            <input class="form-control-md" type="tel" name="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"><br>
                            <p style="color:rgba(29, 27, 27, 0.432)">*El telefono solo admite digitos, 000-000-000</p>
                                        
                            <label name="email">Email</label>
                            <input class="form-control-md" type="email" name="email"><br><br>
                                            
                            <label name="contraseña">Contraseña</label>
                            <input class="form-control-md" type="contraseña" name="contraseña"><br><br><br>
                                    
                
                            <button type="submit" name="enviar" value="Continuar" style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red;"> Aceptar </button> &nbsp;&nbsp;&nbsp;
                            <button type="submit" name="volver" value="Volver" style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red;" onclick="window.location.href='../views/web.php'"> Volver </button>
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
