<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante del Cardenal | El Restaurante - Asados al horno de leña en Toledo</title>
	<meta name="description" content="En nuestro horno de leña de encina permite la preparación a la antigua usanza castellana de los inconfundibles asados de cochinillo y cordero. Cocina castellana de alta calidad.">
	<meta name="keywords" content="Restaurante el Cardenal en Toledo, asados al horno de leña, cochinillo asado, codornices estofadas, cordero asado.">
    
    <link rel="shortcut icon" href="images/iconos/favicon.ico"/>
    <link rel="shortcut icon" href="images/iconos/apple-icon.png"/>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Lightbox -->
    <link href="dist/css/lightbox.css" rel="stylesheet">
    
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
    
    <!-- SLIDER -->
    <div class="jumbotron no-margin-padding">
    <div class="carousel slide full-screen hidden-xs">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider/restauracion/terraza.jpg" class="center-block" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
       <img src="images/slider/restauracion/terraza-exterior.jpg" class="center-block" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
       <img src="images/slider/restauracion/patio-toledano.jpg" class="center-block" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
       <img src="images/slider/restauracion/asador.png" class="center-block" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>
	<!-- FIN SLIDER -->
    
    
    
    <div class="jumbotron">
    	<div class="container">
        <h1 class="text-center">Restauración</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	<p class="text-center" style="margin:2em;">Vive un Restaurante dentro de una antigua mansión toledana con salas y dependencias, decoradas con azulejos, madera y artesonados de solera.</p>
        <a href="el-restaurante.php" class="link-cover02" title="El Restaurante">
    		<div class="row row-dorado">
        		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            		<img src="images/restauracion/restaurante.jpg" class="img-responsive hidden-xs">
            	</div>
            	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                	<div class="bg-dorado">
            			<h2 class="text-center">Restaurante</h2>
            			<img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Restaurante dentro de una antigua mansión toledana con salas y dependencias decoradas con azulejos, madera y artesonados.</p>
                        <img src="images/icon-info.png" class="img-responsive center-block" alt="...">
                    </div>
       	  		</div>
          </div>
          </a>
          <a href="la-taberna.php" class="link-cover" title="La Taberna">
          <div class="row row-white">
        		
            	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                	<div class="bg-white">
           			  <h2 class="text-center">Taberna</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Como alternativa o como complemento al restaurante también puedes disfrutar de nuestra singular taberna. </p>
                        <img src="images/icon-info.png" class="img-responsive center-block" alt="...">
                    </div>
       	  		</div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            		<img src="images/restauracion/taberna.jpg" class="img-responsive hidden-xs">
            	</div>
          </div>
          </a>
          
          <a href="chill-out.php" class="link-cover" title="Chill Out">
          <div class="row row-dorado">
        		
            	
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            		<img src="images/restauracion/chill-out.jpg" class="img-responsive hidden-xs">
            	</div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                	<div class="bg-white">
           			  <h2 class="text-center">Chill Out</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Relax en un enclave único. Es el momento de pasar un rato agradable a nuestra terraza chill-out y tomarse una copa en un espacio singular.</p>
                        <img src="images/icon-info.png" class="img-responsive center-block" alt="...">
                    </div>
       	  		</div>
          </div>
          </a>
        </div>
    </div>
    
    <div class="jumbotron bg-grey">
    <h1 class="text-center color01">Galería de imágenes</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
    <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/terraza.jpg" data-lightbox="Hacienda del Cardenal" data-title="Terraza desde Muralla El Cardenal" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0000_terraza.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/taberna2.jpg" data-lightbox="Hacienda del Cardenal" data-title="Taberna Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0002_taberna.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/airosas.jpg" data-lightbox="Hacienda del Cardenal" data-title="Restaurante Airosas HdC toledo" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0006_airosas.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/salon.jpg" data-lightbox="Hacienda del Cardenal" data-title="Mesa salón Greco HdC Toledo" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0008_salon.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/mezquita2.jpg" data-lightbox="Hacienda del Cardenal" data-title="Restarante Mezquita HdC" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0007_mezquita.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/restaurante2.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle Restaurante HdC" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0011_restaurante.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/lampara.jpg" data-lightbox="Hacienda del Cardenal" data-title="Lampara Mezquita HdC Toledo" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0009_lampara.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-restauracion/big/asador.jpg" data-lightbox="Hacienda del Cardenal" data-title="Horno y asados Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-restauracion/galeria-_0000s_0010_asador.png">
    </a>
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
    
     <script src="dist/js/lightbox.js"></script>
    
  <script type="text/javascript">
	// jQuery
$(document).ready(function(){ 
   $('#alternar-respuesta-ej1').on('click',function(){
      $('#respuesta-ej1').toggle('fast');
   });
});
</script></body>
</html>