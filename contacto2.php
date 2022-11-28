<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante del Cardenal | Contacto - Restaurante del Cardenal en Toledo</title>
	<meta name="description" content="Contacta con el Restaurante del Cardenal en Toledo, mándanos un email, rellena el formulario o llámanos para solicitar cualquier información.">
	<meta name="keywords" content="Contacto  Restaurante del Cardenal en Toledo, contacta con Restaurante el Cardenal en Toledo, datos contacto Restaurante el Cardenal en Toledo, ontacta, contacto, email, telefono, direccion, datos de contacto, formualrio de contacto">
    
    <link rel="shortcut icon" href="images/iconos/favicon.ico"/>
    <link rel="shortcut icon" href="images/iconos/apple-icon.png"/>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- estilos -->
     <link href="css/style.css" rel="stylesheet">
<link href="/engine.css" rel="stylesheet">
     <link href="css/fonts.css" rel="stylesheet">
     
     <!-- font awesome -->
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
    <li>Síguenos en: </li>
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
                        <img src="images/bot-reservar.png" class="img-responsive">
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
    
    
    <div class="jumbotron bg-grey no-margin-padding">
    	<div class="container-fluid no-padding">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3062.5491310703965!2d-4.026787046748877!3d39.86193599999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6a0ba8440d316d%3A0xdf0a0d00dfd14125!2sHacienda+del+Cardenal!5e0!3m2!1ses!2ses!4v1430132397909" width="600" height="400" frameborder="0" style="border:0;width: 100%;max-height: 350px;"></iframe>
        
		
        </div>
        
        
    </div>
	
    
    
    
    <div class="jumbotron">
    	<div class="container">
        <h1 class="text-center">Contacta con nosotros</h1>
    	<img src="images/separador.png" class="img-responsive center-block" >
        <div class="row"><div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"><p class="text-justify"><strong>En el Casco Antiguo de Toledo, junto a la zona monumental</strong><br><br>
La Hacienda del Cardenal, antigua residencia de recreo del Cardenal Lorenzana, allá por el siglo XVIII, es un edificio histórico ubicado en la misma muralla de la ciudad y a escasos metros del remonte peatonal que nos traslada al conjunto histórico de una de las ciudades Patrimonio de la Humanidad.</p>
</div></div>
<div class="clearfix"></div>
    	<p class="text-center">Rellena el formulario y contacta con nosotros. Los campos marcados con (*) son obligatorios.</p>
        
    		<div class="row">
        		
                <div id="contactResponse" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"></div>
                    
            	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                	<form action="contact_me.php" class="form-horizontal" method="post" id="contactForm">
    
    <div class="form-group">
    <label for="name">Nombre *</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
  	</div>
                           
     <div class="form-group">
    <label for="email">E-Mail *</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
  	</div>
 
  
    <div class="form-group">
    <label for="subject">Asunto *</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
  	</div>
     
     
  
  <div class="form-group">
    <label for="message">Mensaje *</label>
    <textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="6"></textarea>
    </div>
    
    <div class="form-group">
   
      <div class="checkbox">
        <label>
          <input type="checkbox" id="agree" name="agree" value="agree"> Acepto las <a href="privacidad.php" target="_blank">Condiciones de uso y la Política de privacidad</a>. *
        </label>
      </div>
    

  
  <div class="form-group">
    
      <button type="submit" class="btn btn-default center-block" name="submitContactForm" value="contactForm">ENVIAR</button>
   
  </div>
  
  </div>
 
  </form>
  
  <div style="padding:30px;">
  <p class="text-center">... o llama al ...</p>
  <a href="tel://925220862"><h2 class="text-center"><i class="fa fa-phone" aria-hidden="true"></i><br>(+34) 925 22 08 62</h2></a>
       	  		</div>
          </div>
          
          
          
          
       
        </div>
    </div>
    
   </div>
    
    
    
    
    
    
    
    
    <div class="jumbotron bg-grey">
    <h2 class="color01 text-center">Dirección y contacto</h2>
    <img src="images/separador.png" class="center-block img-responsive">
        <p class="text-center">Paseo de Recaredo 24 45004 Toledo España<br> 
Tel: (+34) <a href="tel://925224900">925 22 49 00</a> | Fax: (+34) 925 22 29 91<br>
hotel@haciendadelcardenal.com<br>
<br>
Restaurante: +34 925 22 08 62<br>
restaurante@haciendadelcardenal.com</p>
    </div>
    
    <div class="container-fluid" style="background-color:white;">
        <p class="text-center"><a href="cookies.php" target="_blank">COOKIES</a> | <a href="privacidad.php" target="_blank">POLÍTICA DE PRIVACIDAD</a> | <a href="aviso-legal.php" target="_blank">AVISO LEGAL</a></p>
        </div> <a href="#" class="scrolltop" style="display: inline;"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i></a>
	
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="dist/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Validate form -->
    <script type="text/javascript" src="/js/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    
    <!-- mis scripts -->
    <script src="js/scripts.js"></script>
    <script src="js/scripts2.js"></script>
    
  <script type="text/javascript">
	// jQuery
$(document).ready(function(){ 
   $('#alternar-respuesta-ej1').on('click',function(){
      $('#respuesta-ej1').toggle('fast');
   });
});
</script></body>
</html>