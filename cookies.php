<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>El Restaurante | La Hacienda del Cardenal, Toledo</title>
    
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
    
    
    <div class="jumbotron no-margin-padding">
    <div class="container-fluid f-legal">
    &nbsp;
    </div>
</div>
	
    
    
    
    <div class="jumbotron no-margin-padding bg-white">
    	<div class="container">
        <h1 class="text-center">Política Cookies</h1>
    		<div class="row">
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																
																<p>Utilizamos coockies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continúa navegando, consideramos que acepta su uso. Puede obtener más información, o bien conocer cómo cambiar la configuración, en nuestra Política de coockies.</p>

<p>Cookie&nbsp;es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.. El navegador del usuario memoriza cookies en el disco duro solamente durante la sesión actual ocupando un espacio de memoria mínimo y no perjudicando al ordenador. Las cookies no contienen ninguna clase de información personal específica, y la mayoría de las mismas se borran del disco duro al finalizar la sesión de navegador (las denominadas cookies de sesión).</p>
<p>La mayoría de los navegadores aceptan como estándar a las cookies y, con independencia de las mismas, permiten o impiden en los ajustes de seguridad las cookies temporales o memorizadas.</p>
<p>Sin su expreso consentimiento –mediante la activación de las cookies en su navegador– RESTAURANTE DEL CARDENAL no enlazará en las cookies los datos memorizados con sus datos personales proporcionados en el momento del registro o la compra.</p>
<p>&nbsp;</p>
<h3><strong>¿Qué tipos de cookies utiliza esta página web?</strong></h3>
<p>&nbsp;</p>
<p>– Cookies&nbsp;técnicas: Son aquéllas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.</p>
<p>&nbsp;</p>
<p>– Cookies&nbsp;de personalización: Son aquéllas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</p>
<p>&nbsp;</p>
<p>– Cookies de análisis: Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</p>
<p>&nbsp;</p>
<p>– Cookies publicitarias: Son aquéllas que, bien tratadas por nosotros o por terceros, nos permiten gestionar de la forma más eficaz posible la oferta de los espacios publicitarios que hay en la página web, adecuando el contenido del anuncio al contenido del servicio solicitado o al uso que realice de nuestra página web. Para ello podemos analizar sus hábitos de navegación en Internet y podemos mostrarle publicidad relacionada con su perfil de navegación.</p>
<p>&nbsp;</p>
<p>– Cookies de&nbsp;publicidad comportamental: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo.</p>
<p>&nbsp;</p>
<p><strong>Cookies de terceros</strong>: La Web de RESTAURANTE DEL CARDENAL puede utilizar&nbsp;servicios de terceros que, por cuenta de XXXXX, recopilaran información con fines estadísticos, de uso del Site por parte del usuario y para la prestación de otros servicios relacionados con la actividad del Website y otros servicios de Internet.</p>
<p>En particular, este sitio Web utiliza Google Analytics, un servicio analítico de web prestado por Google, Inc. con domicilio en los Estados Unidos con sede central en 1600 Amphitheatre Parkway, Mountain View, California 94043.&nbsp; Para la prestación de estos servicios, estos&nbsp;utilizan cookies que recopilan la información, incluida la dirección IP del usuario, que será&nbsp;transmitida, tratada y almacenada por&nbsp;Google&nbsp;en los términos fijados en la Web Google.com. Incluyendo la posible&nbsp;transmisión de dicha información a terceros por razones de exigencia legal o cuando dichos terceros&nbsp;procesen la información por cuenta de Google.</p>
<p>(En este punto la AGPD sugiere incluir cada una de las cookies de terceros utilizadas y los datos de dichos terceros. Por evidentes razones en este modelo sólo se ha incluido la Google en el uso de Analytics por ser la más extendida y común.)</p>
<p>&nbsp;</p>
<p><strong>El Usuario acepta expresamente, por la utilización de este Site,&nbsp;el tratamiento de la información&nbsp;recabada en la forma y con los fines anteriormente mencionados.</strong>&nbsp;Y asimismo reconoce conocer la posibilidad de rechazar el tratamiento de&nbsp;tales datos o información&nbsp;rechazando el uso de Cookies mediante la selección de la configuración apropiada a tal fin en su navegador. Si bien esta opción de bloqueo de Cookies en su navegador puede no permitirle el uso pleno de todas las funcionalidades del Website.</p>
<p>Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador:</p>
<ul>
<li><a title="Administrar cookies en Google Chrome" href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank">Chrome</a></li>
<li><a title="Administrar cookies en Internet Explorer" href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank">Explorer</a></li>
<li><a title="Administrar cookies en Firefox" href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we" target="_blank">Firefox</a></li>
<li><a title="Administrar Cookies en Safari" href="https://support.apple.com/kb/ph5042?locale=en_US" target="_blank">Safari</a></li>
</ul>
<p>&nbsp;</p>
<p>Si tiene dudas sobre esta política de cookies, puede contactar con RESTAURANTE DEL CARDENAL en <a href="mailto:reservas@restaurantedelcardenal.es">reservas@restaurantedelcardenal.es</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
														 
																				
		
														 
																				
		

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