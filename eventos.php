<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante del Cardenal | Eventos en Toledo - Restaurante del Cardenal en Toledo</title>
	<meta name="description" content="Disponemos de uno de los mejores espacios que podrás encontrar, no sólo en Toledo sino en España. Junto a la acreditada experiencia hostelera del grupo Botín, harán de su celebración algo único e inolvidable.">
    <meta name="keywords" content="Eventos en Toledo, Restaurante del Cardenal en Toledo, eventos privados en Toledo, eventos corporativos en Toledo, eventos empresa en Toledo, bautizos en Toledo, comuniones en Toledo">
    
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
    
    <!-- SLIDER -->
    <div class="jumbotron no-margin-padding">
    <div class="carousel slide full-screen hidden-xs">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider/eventos/boda.png" class="center-block" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
       <img src="images/slider/eventos/comuniones.png" class="center-block" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
       <img src="images/slider/eventos/empresa.png" class="center-block" alt="...">
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
        <h1 class="text-center">Eventos</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	<p class="text-center">Nuestro equipo de profesionales te asesorará para conseguir que tu evento sea como deseas. Diseñamos <strong>actos corporativos, inauguraciones, actos deportivos, o culturales</strong>. Y todos los detalles estarán previstos en tus eventos privados o sociales.</p>
        <a href="eventos-bodas.php" class="link-cover02" title="Bodas">
    		<div class="row row-dorado">
        		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            		<img src="images/eventos/bodas.jpg" class="img-responsive">
            	</div>
            	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                	<div class="bg-dorado">
            			<h2 class="text-center">Bodas</h2>
            			<img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Seremos vuestros guías, y os ayudaremos<br>en todo lo que podáis necesitar.</p>
                        <img src="images/icon-info.png" class="img-responsive center-block" alt="...">
                    </div>
       	  		</div>
          </div></a>
          
          <a href="eventos-sociales.php" class="link-cover" title="Eventos Sociales">
          <div class="row row-white">
        		
            	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                	<div class="bg-white">
           			  <h2 class="text-center">Eventos Sociales</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Cuentas con un equipo profesional que presta<br>especial cuidado por los detalles.</p>
                        <img src="images/icon-info.png" class="img-responsive center-block" alt="...">
                    </div>
       	  		</div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            		<img src="images/eventos/eventos-sociales.jpg" class="img-responsive">
            	</div>
          </div>
          </a>
          <a href="eventos-corporativos.php" class="link-cover" title="Eventos Corporativos">
          <div class="row row-dorado">
        		
            	
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            		<img src="images/eventos/eventos-corporativas.jpg" class="img-responsive">
            	</div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                	<div class="bg-white">
           			  <h2 class="text-center">Eventos Corporativos</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Nuestras instalaciones se adaptan al evento<br>que cada empresa necesita. </p>
                        <img src="images/icon-info.png" class="img-responsive center-block" alt="...">
                    </div>
       	  		</div>
          </div>
          </a>
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