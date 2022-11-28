<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Habitaciones | La Hacienda del Cardenal</title>
    <meta name="description" content="Reserva tu habitación en Toledo al mejor precio a través de nuestra Web oficial. Habitaciones completamente equipadas. Servicios 3 estrellas."/>
    <meta name="keywords" content="habitaciones, hotel, toledo, hotel con encanto"/>
    
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
    <div class="container-fluid f-hotel">
    &nbsp;
    </div>
</div>
    
    
    
    <div class="jumbotron no-margin-padding">
    	<div class="container bg-grey">
        <h1 class="text-center">El Hotel</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	
        <h2 class="text-center color01">Habitaciones</h2>
    	
        <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-individual.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación individual</h1>
         	<p class="caracter">Máximo 1 persona | 1 cama individual</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado</p>
         	<a href="habitacion-individual.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-doble-dos.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación doble (2 camas)</h1>
         	<p class="caracter">Máximo 2 personas | 2 camas individuales</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado</p>
         	<a href="habitacion-doble.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-doble-suple.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación doble + supletoria triple</h1>
         	<p class="caracter">Máximo 3 personas | 1 cama doble</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado</p>
         	<a href="habitacion-doble-suple.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-matrimonio.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación matrimonio</h1>
         	<p class="caracter">Máximo 2 personas | 1 cama doble (150-200cm)</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado</p>
         	<a href="habitacion-matrimonio.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-sup-kingsize.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación superior king-size</h1>
         	<p class="caracter">Máximo 2 personas | 1 cama doble (200-200cm)</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado • Habitación con salón</p>
         	<a href="habitacion-superior.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-sup-queensize.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación superior queen-size</h1>
         	<p class="caracter">Máximo 2 personas | 1 cama doble (160-200cm)</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado • Habitación con salón</p>
         	<a href="habitacion-queen.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-tripleking.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación triple king-size</h1>
         	<p class="caracter">Máximo 3 personas | 1 cama individual y 1 cama doble (200-200cm)</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado</p>
         	<a href="habitacion-tripleking.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
         <div class="l-habitaciones"> <!-- item  -->
         	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"> 
         	<img src="images/hotel/habitacion-doble-king.jpg" class="img-responsive">
         	</div>
         	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
         	<h1>Habitación doble king-size</h1>
         	<p class="caracter">Máximo 2 personas | 1 cama doble (200-200cm)</p>
         	<p>Teléfono en habitación • TV con Canal+ • Antena parabólica • Caja fuerte en habitación (gratuita) • WI-FI (gratuito) • Secador de pelo • Espejo de maquillaje • Calefacción • Aire acondicionado</p>
         	<a href="habitacion-dobleking.php" class="masinfo">+ Información</a>
          	</div>
         </div> <!-- end item  -->
         
       </div>
    </div>
    
     <div class="jumbotron">
    	<div class="container no-padding">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin-padding margin-down">
            
            <div class="d-hotel f-hotel-info">
            <div class="d-hotel-f">
            <h2>Información y servicios</h2>
            <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            <p>Servicios de alta calidad para que disfrute<br>de su estancia con nosotros.</p>
            <p class="text-center"><a href="servicios-hotel.php" class="btn btn-primary btn-color01 no-radious" role="button">+ INFO</a> </p>
            </div>
            </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin-padding margin-down">
           
            <div class="d-hotel f-elhotel">
            <div class="d-hotel-f">
            <h2>El hotel</h2>
            <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            <p>Descubre la historia de nuestro Hotel<br>y sus orígenes.</p>
            <p class="text-center"><a href="el-hotel.php" class="btn btn-primary btn-color01 no-radious" role="button">+ INFO</a> </p>
            </div>
           </div>
            </div>
        </div>
    </div><?php require 'pl_pie.php'; ?>
    
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