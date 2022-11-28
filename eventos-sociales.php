<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante del Cardenal | Menus para eventos privados - Comuniones y Bautizos en Toledo</title>

<meta name="description" content="Un espacio privilegiado, diferente y exclusivo con impresionantes y bellos jardines, rodeados por la muralla toledana. Celebra la comunión o el Bautizo de tus hijos con nosotros y disfruta de nuestros asados en hornos de leña de encina.">
			
							<meta name="keywords" content="Menus para eventos privados Restaurante del Cardenal,  Comuniones en Toledo, Bautizos en Toledo, menu para comuniones en Toledo, menu para bautizos en Toledo">
    
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
     <link href="dist/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">

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
    <div class="container-fluid f-eventos-sociales">
    &nbsp;
    </div>
</div>
	
    
    
    
    <div class="jumbotron">
    	<div class="container">
        <h1 class="text-center">Eventos</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	<p class="text-center">Cuentas con un equipo profesional que presta especial cuidado por los detalles.</p>
    		<div class="row">
        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            		<img src="images/eventos/img-eventos-sociales.jpg" class="img-responsive center-block" alt="...">
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="bg-res">
            			<h2 class="text-center">Eventos sociales</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">

Contacta con nosotros para que te ayudemos en la organización de tu evento, nos adaptamos a las necesidades de nuestros clientes. </p>
<p class="text-center"><a href="#reservas" class="btn btn-primary btn-color01 no-radious" role="button"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> SOLICITAR INFORMACIÓN</a>&nbsp;<a href="#menus" class="btn btn-primary btn-color01 no-radious" role="button"><i class="fa fa-cutlery" aria-hidden="true"></i> MENÚS HdC</a></p>
                	</div>
       	  		</div>
          </div>
          
          
          
          
       
        </div>
    </div>
    <a id="menus"></a>
<div class="jumbotron bg-grey">
  <h1 class="text-center color01" style="margin:0; margin-bottom:30px;">Menús Eventos Sociales 2020-2021</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
   <div class="container">

 <p class="text-center"><strong>Pulsa sobre los menús para descargar el PDF</strong></p>
 

 	

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <a href="pdf/Dossier-Menus-2022-HdC-Toledo.pdf" target="_blank" download>
    <img src="images/menus-grupos.png" alt="Menús de Grupos" title="Menús de Grupos" class="img-responsive center-block"></a>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <a href="pdf/menus-comuniones-2023-hdc.pdf" target="_blank">
    <img src="images/menus_mcomunion_pdf.png" alt="Menús de Comunión" title="Menús de Comunión" class="img-responsive center-block"></a>
    </div>

    

    
</div>
  </div>
    
    <div class="jumbotron">
    <h1 class="text-center color01">Galería de imágenes</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
    <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/Mesa-quesos-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/Mesa-quesos-HdC.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/JARDIN-3-B.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/JARDIN-3-B.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/CHUCHES-2.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/CHUCHES-2.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/Escalera-velas-Hotel-del-Cardenal.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/Escalera-velas-Hotel-del-Cardenal.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/Mesa-salon-Greco-HdC-Toledo.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/Mesa-salon-Greco-HdC-Toledo.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/Deco-Lolea-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/Deco-Lolea-HdC.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/Cardenal-en-imperial-b.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/Cardenal-en-imperial-b.jpg">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-eventos-sociales/big/KE4A0190.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos sociales en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-eventos-sociales/KE4A0190.jpg">
    </a>
  </div>
    </div>
    
    </div>
    
    
    
    <div class="jumbotron bg-grey"><a id="reservas"></a>
    <h1 class="text-center color01">Solicitar Información</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <p class="text-center">Pídenos información sin compromiso, muchas gracias. <strong>Los campos marcados con (*) son obligatorios.</strong></p><br>
    <div class="container">
        <div id="eventResponse" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"></div>
    <form action="contact_me.php" method="post" id="eventForm">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
    <label for="name">Nombre *</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
  	</div>
        <div class="form-group">
    <label for="phone">Teléfono *</label>
    <input type="text" class="form-control" id="phone"  name="phone" placeholder="Teléfono">
  	</div>
    <div class="form-group">
    <label for="email">E-Mail *</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
  	</div>
     
     
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
    <label for="date">Fecha *</label>
    <input type="text" class="form-control" id="date" name="date" placeholder="dd/mm/aaaa">
  	</div>
     <div class="form-group">
    <label for="event">Tipo de evento *</label>
    <select class="form-control" id="event"  name="event">
  <option>Bautizo</option>
  <option>Comunión</option>
  <option>Aniversario</option>
  <option>Otros...</option>
    </select>
  	</div>
     <div class="form-group">
    <label for="commensal">Nº Comensales *</label>
    <input type="number" class="form-control" id="commensal" name="commensal" placeholder="Invitados">
  	</div>
  </div>
  <div class="col-lg-12 col-md-12">
  <div class="form-group">
    <label for="comments">Comentarios *</label>
    <textarea class="form-control" id="comments" name="comments" placeholder="Introduzca sus comentarios o dudas" rows="6"></textarea>
    </div>
    
    <div class="form-group">
    <div class="col-lg-12 col-md-12">
      <div class="checkbox">
        <label>
          <input type="checkbox" id="agree" name="agree" > Acepto las <a href="privacidad.php" target="_blank">Condiciones de uso y la Política de privacidad</a>. *
        </label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-12 col-md-12">
      <button type="submit" class="btn btn-default center-block" name="submitEventForm" value="eventForm">ENVIAR</button>
    </div>
  </div>
  
  </div>
 
  </form>  
        
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
    
    <script src="js/jquery-ui.js"></script>
    <!-- Validate form -->
    <script type="text/javascript" src="/js/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- mis scripts -->
    
    <script src="js/scripts.js"></script>
    <script src="js/scripts2.js" type='text/javascript'></script>

    <script src="dist/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="dist/bootstrap-datepicker/locales/bootstrap-datepicker.en-GB.min.js" charset="UTF-8"></script>
    <script src="dist/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>
    
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