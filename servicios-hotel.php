<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Servicios | La Hacienda del Cardenal</title>
    <meta name="description" content="Servicios del Hotel La Hacienda del Cardenal. Disfruta de Toledo con todas las comodidades. Ubicación céntrica. Web oficial"/>
    <meta name="keywords" content="servicios, hotel, toledo, hotel con encanto"/>
    
    <link rel="shortcut icon" href="images/iconos/favicon.ico"/>
    <link rel="shortcut icon" href="images/iconos/apple-icon.png"/>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- estilos -->
     <link href="css/style.css" rel="stylesheet">
<link href="/engine.css" rel="stylesheet">
     <link href="css/fonts.css" rel="stylesheet">
     
     <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <script type="text/javascript" src="https://js.mirai.com/mirai-loader/mirai.loader.js"></script>
</head>
  <body><div id="miraiTracking" data-mirai-engine="mirai_tr" data-idhotel="" data-init="auto"></div>
    
    <div class="jumbotron no-margin-padding border-botom-grey">
    <div class="container">
    <ul class="r-social">
    <li class="hidden-xs">Síguenos en: </li>
    <li><a href="https://www.facebook.com/pages/Hacienda-del-Cardenal/261938530628167?ref=hl" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
    
    
    <li><a href="https://www.instagram.com/haciendadelcardenal/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
    <!-- <li>Idioma: <a href="#">ES</a> | <a href="#">EN</a></li> -->
    </ul>
    
    </div>
    </div>
    <div class="jumbotron no-margin-padding">
    
    <div class="container">
    
    <?php require 'menu-ppal.php'; ?>
    
    </div>
     <!-- Inicio Reserva -->
    
    <?php $contentReserva =
    "<div class='container'>
    
        <!-- mirai -->
        <div data-mirai-engine='mirai_be' data-lang='es' data-idhotel='100155460' class='mirai-motor-home'></div>
        <!-- end mirai -->
    </div>"; ?>  
        
    <?php $isMobile = isMobile();
        if ($isMobile == 0) {?>
                <div class="bot-reserva">
                    <a id="alternar-respuesta-ej1" href="#" style="display: inline-block;" >
                        <img src="images/bot-reservar.png" class="img-responsive" alt="Reservar habitación">
                    </a>
                </div>
            

            <div class="jumbotron no-margin-padding buscador" id="respuesta-ej1" style="display:none">
                <?php echo $contentReserva; ?>
            </div>
        </div>
        <?php } else { ?>
                <div class="bot-reserva">
                    <a href="#" style="display: inline-block;" ></a>
                </div>
            

            <div class="jumbotron no-margin-padding" >
                <?php echo $contentReserva; ?>
            </div>
        </div>
    <?php } ?>
        
    <!-- Fin Reserva-->
    
     <div class="jumbotron no-margin-padding">
    <div class="container-fluid f-servicios">
    &nbsp;
    </div>
</div>
    
    
    
    <div class="jumbotron no-margin-padding">
    	<div class="container bg-grey">
        <h1 class="text-center">El Hotel</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	<h2 class="text-center color01">Servicios</h2>
        <p class="text-center">Los mejores cuidados y servicios para su estancia en Toledo sea inolvidable.</p>
        
        </div>
    </div>
    
    <div class="jumbotron no-margin-padding">
    
    <div class="container bg-grey">
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/piscina.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Baños árabes</p>
    </div>
   	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-centrico.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Sitio céntrico</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-historico.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Edificio histórico</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-telefono.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Teléfono</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-TV.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">TV plana</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-ppv.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Canal + en la Taberna</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-antena.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Antena parabólica</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-tarjetas.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Admite tarjetas</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-seguridad.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Caja fuerte gratuita</p>
    </div>
   
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-cale.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Calefacción</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-aire.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Aire acondicionado</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-wifi.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">WI-FI (gratuito)</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-secador.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Secador de pelo</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-espejo.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Espejo de maquillaje</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-restaurante.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Restaurante</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-bar.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Taberna / Cafetería</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-jardin.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Jardín / Terraza</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-chill-out.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Chill-out</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-eventos.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Eventos</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-lavanderia.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Lavanderia</p>
    </div>
    
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
    <img src="images/iconos/icon-reuniones.png" class="img-responsive center-block" alt="...">
    <p class="text-center min-p">Salas de Reuniones</p>
    </div>
    
    </div>
    
    </div>
    
    
    <div class="jumbotron no-padding-top">
    	<div class="container no-padding">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin-padding margin-down">
            
            <div class="d-hotel f-hotel-info">
            <div class="d-hotel-f">
            <h2>El hotel</h2>
            <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            <p>Descubre la historia de nuestro Hotel<br>y sus orígenes.</p>
            <p class="text-center"><a href="el-hotel.php" class="btn btn-primary btn-color01 no-radious" role="button">+ INFO</a> </p>
            </div>
            </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin-padding margin-down">
           
            <div class="d-hotel f-hotel-galeria">
            <div class="d-hotel-f">
            <h2>Habitaciones</h2>
            <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            <p>Hacienda del Cardenal dispone de<br>habitaciones con estilo propio.</p>
            <p class="text-center"><a href="habitaciones.php" class="btn btn-primary btn-color01 no-radious" role="button">+ INFO</a> </p>
            </div>
           </div>
            </div>
        </div>
    </div>
    
    
    
    <?php require 'pl_pie.php'; ?>
    
    <div class="container-fluid" style="background-color:white;">
        <p class="text-center"><a href="cookies.php" target="_blank">COOKIES</a> | <a href="privacidad.php" target="_blank">POLÍTICA DE PRIVACIDAD</a> | <a href="aviso-legal.php" target="_blank">AVISO LEGAL</a></p>
        </div> <a href="#" class="scrolltop" style="display: inline;"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i></a>
	
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- mis scripts -->
    
    <script src="js/scripts.js"></script>
    
    
    
  <script type="text/javascript">
	// jQuery
$(document).ready(function(){ 
   $('#alternar-respuesta-ej1').on('click',function(){
      $('#respuesta-ej1').toggle('fast');
   });
});
</script></body>
</html>