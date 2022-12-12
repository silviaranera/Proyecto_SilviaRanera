<?php	
	session_start();
?>
<html>
    <head>
	    <title>Aula-Gamming</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	    <link href="./css/web.css" type="text/css" rel="stylesheet">
        
        <script src="assets/js/carrusel-text.js" ></script>
        
    </head>

    <body>
        <div class="container-flex">
            <div>
                <div class="row-flex">
                     <div class="row align-items-center" class="row justify-content-center">
                        <header class="col-12">
                            <img  class="img-flex" class="float-center" width="100%"  class="img-responsive" src="imagenes/header.png" />
                        </header>
                                    
                        <div class="col-12">
                            <div class="menuc">
                                <a class="home">Home</a>
                                <a href="./../controllers/reserva_controller.php">Reservar</a>
                                <a href="./../controllers/consultareservas_controller.php">Mi reserva</a>
                                <a href="./../controllers/consultacompeticiones_controller.php">Mis competiciones</a>
                                <a href="./../controllers/todaslasreservas_controller.php">Todas las reservas</a>
                                <a href="./../controllers/rankingcompeticiones_controller.php">Ranking competiciones</a>
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
                                <h1 class="titulo">Bienvenido </h1>
                                <b>Esta utilizando la cuenta de: <?php echo $_SESSION['nombre']; ?> </b>
                                <br><br>
                                
                                <div class="col-12" >
                                    <button  type="submit" value="Cambiar contraseña" 
                                            onclick="window.location.href='./../controllers/cambiarcontrase_controller.php'" 
                                            style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red;" > Cambiar Contraseña
                                    </button>&nbsp;&nbsp;&nbsp;
                                
                                    <button type="button" value="cerrar" 
                                            onclick="window.location.href='../index.php'" 
                                            style="background-color:white ;color:#000000; box-shadow:3px 3px 10px red;" > 
                                            Cerrar sesión
                                    </button>
                                </div>
                                <!--<br><br><br>
                                
                                <div class="caruselV3">
                                    Aquí puedes agregar todas las imagenes que quieras
                                    <div class="carousel">
                                      <img src="imagenes/header.png" with="200 px" height="100px";>
                                        <div class="text">
                                            <h4>PacMan</h4>
                                        </div>
                                    </div>
                                </div>-->
                                <br><br><br>
								<div id="horario">
									<h3 class="titulo">Horario</h3>
									<TABLE BORDER="2" class="horario">
										<TR>
											<TH>TURNOS</TH><TH>Lunes</TH> <TH>Martes</TH> <TH>Miécoles</TH> <TH>Jueves</TH> <TH>Viernes</TH>
										</TR>
										<TR>
											<TH>Diurno</TH><TD colspan="5" style="text-align:center;">11:05 a 11:30</TD> 
										</TR>
										<TR>
											<TH>Vespertino</TH><TD colspan="5" style="text-align:center;">17:45 a 18:10</TD> 
										
									</TABLE>
								    </br></br>
                                </div>
								
								<div id="ubicación">
									<h3 class="titulo">Ubicación</h3>
									<p>Calle Blas Cabrera 90, 28044 Madrid. </p>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.3955356933784!2d-3.76663538514606!3d40.37792547936964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418837d98581bb%3A0x5e27f9f907f91d18!2sIES%20Leonardo%20Da%20Vinci!5e0!3m2!1ses!2ses!4v1668159097329!5m2!1ses!2ses" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<br><br>
								<div id="contacto">
									<h3 class="titulo">Contacto</h3>
									<div>
										<p>IES LEONARDO DA VINCI</p>
										<p>Teléfonos: 91 706 30 48 / 91 706 49 70  </p>
										<p>Fax: 91 706 12 65</p>
										<p>Web del centro http://ifpleonardo.com/ </p>
									</div>
								</div>
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