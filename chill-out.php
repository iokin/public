<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chill Out | La Hacienda del Cardenal, Toledo</title>
    
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
  <body>
    
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
    <div class="container-fluid f-chill-out">
    &nbsp;
    </div>
</div>
	
    
    
    
    <div class="jumbotron no-margin-padding">
    	<div class="container">
        <h1 class="text-center">Restauración</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
        <p class="text-center"><strong>Terraza Chill-out: relax en un enclave único.</strong><br><br>Cae la tarde en la ciudad imperial y el sol comienza a ocultarse tras la muralla, dando un respiro a toledanos y visitantes hasta el día siguiente.</p>
    	
    		<div class="row">
        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            		<img src="images/restauracion/img-chill-out.jpg" class="img-responsive center-block" alt="...">
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="bg-res">
            			<h2 class="text-center">Chill-Out</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
                        
            			<p class="text-center">


<br>
Es el momento de pasar un rato agradable a nuestra terraza chill-out y tomarse una copa o dos.<br><br>
Además podrás pasear por el único trozo de la muralla transitable que queda en Toledo, al que sólo se puede acceder a través de nuestros jardines.</p>

                	</div>
       	  		</div>
          </div>
          
          
          
          
       
        </div>
    </div>
    
   
    
    <div class="jumbotron">
    <h1 class="text-center color01">Galería de imágenes</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
    <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/Rincon-Mahou-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Rincon Mahou" class="thumbnail">
      <img src="images/galeria-chillout/Rincon-Mahou-HdC.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/chillout-hdc-02.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle Chill-out" class="thumbnail">
      <img src="images/galeria-chillout/chillout-hdc-07.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/chillout-hdc-01.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle Chill-out" class="thumbnail">
      <img src="images/galeria-chillout/chillout-hdc-08.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/Photocall-boda-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Photocall" class="thumbnail">
      <img src="images/galeria-chillout/Photocall-boda-HdC.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/Lolea-HdC-Toledo.jpg" data-lightbox="Hacienda del Cardenal" data-title="Lolea HdC" class="thumbnail">
      <img src="images/galeria-chillout/Lolea-HdC-Toledo.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/Limonadas-HdC-extras.jpg" data-lightbox="Hacienda del Cardenal" data-title="Limonadas Hdc" class="thumbnail">
      <img src="images/galeria-chillout/Limonadas-HdC-extras.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/Arbol-Huellas-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Árbol huellas" class="thumbnail">
      <img src="images/galeria-chillout/Arbol-Huellas-HdC.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-chillout/big/chillout-hdc-07.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle Chill-out" class="thumbnail">
      <img src="images/galeria-chillout/chillout-hdc-02.png">
    </a>
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