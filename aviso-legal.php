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
        <h1 class="text-center">Aviso Legal</h1>
    		<div class="row">
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            		
<h3>Objeto</h3>
<p>A continuación se expone el documento contractual que regirá la contratación de productos y/o servicios a través del presente Sitio Web. La aceptación del presente documento conlleva que el usuario:</p>
<ul>
<li>Ha leído, entiende y comprende lo aquí expuesto.</li>
<li>Que es una persona con capacidad suficiente para contratar.</li>
<li>Que asume todas las obligaciones aquí dispuestas.</li>
</ul>
<p>Las presentes condiciones tendrán un periodo de validez indefinido y serán aplicables a todas las contrataciones realizadas a través del sitio web.</p>
<p>Las presentes Condiciones Generales de Contratación, junto con las Condiciones Particulares que puedan establecerse, tienen como finalidad poner a disposición del usuario información necesaria y regular las relaciones comerciales que surjan entre El Titular del presente Sitio Web y los usuarios de la misma. Tanto la navegación, como el registro, la utilización y/o la adquisición de cualquiera de los productos de la web, suponen la aceptación como Usuario, sin reservas de ninguna clase, de todas y cada una de las presentes Condiciones Generales de Contratación que en su caso rijan la adquisición de los bienes y/o la prestación de los servicios, así como en su caso, de las Condiciones Particulares si las hubiere.</p>
<p>El Titular podrá en todo momento y sin previo aviso, modificar las presentes Condiciones Generales de Contratación mediante la publicación de dichas modificaciones en la web para que puedan ser conocidas por los Usuarios. Dicha modificación no afectará a los bienes o promociones que fueron adquiridos por el Usuario previamente a la modificación.</p>
<p>El mero acceso implica el conocimiento y la aceptación de dichas Condiciones Generales. El presente Aviso Legal ha de entenderse en conjunción con la correspondiente Política de Privacidad y Política de Cookies.</p>
<p>La navegación por el Sitio Web atribuye al navegante la condición de Usuario del sitio, lo cual implica la adhesión a las presentes Condiciones Generales en la versión publicada en el momento en que se acceda al mismo. Por ello, Instalaciones Turísticas Hispánicas S.A. (en adelante, El Titular) recomienda su atenta lectura y aceptación, debiéndose abstener el Usuario si no existe conformidad con las mismas. El Usuario es consciente y acepta que el uso y navegación del Sitio Web se realiza en todo caso bajo su única y exclusiva responsabilidad. El Titular podrá modificar en cualquier momento las condiciones aquí determinadas, siendo debidamente expuestas con la antelación suficiente.</p>
<p>El presente Aviso Legal es aplicable únicamente a la información recogida, exclusivamente, en el Sitio Web. En ningún caso se entenderá aplicable a los contenidos recogidos en las páginas de terceros.</p>
<p>La reserva de habitaciones implica, necesariamente, la aceptación íntegra de todos los términos y condiciones que aquí se detallan, además de las condiciones particulares exigidas por la plataforma que nos proporciona el motor de reservas (Mirai España). Al respecto le recomendamos que en el momento de la reserva se informe de las mencionadas condiciones, ajenas a las nuestras.</p>
<h3>Titularidad</h3>
<p>Instalaciones Turísticas Hispánicas S.A. (en adelante, el Titular) es el Titular del nombre de los nombres de dominio www.hostaldelcardenal.com, www.haciendadelcardenal.com, www.haciendadelcardenal.es www.haciendadelcardenal.net www.elcardenaldelalcazar.com y www.elcardenaldelalcazar.es y con domicilio social en Pº de Recaredo, 24, 45004 Toledo y CIF: A28154326, entidad inscrita en el Registro Mercantil de Toledo con los siguientes datos registrales: T471 , F 40, S 8, H TO 30486, I/A 2</p>
<h3>Medios de Contacto / Atencion al Cliente</h3>
<p>El Titular pone a disposición de todos los interesados los siguientes medios de contacto con la entidad:</p>
<p>HOTEL:</p>
<p>Tlf: (+34) 925 22 49 00</p>
<p>Fax: (+34) 925 22 29 91</p>
<p>hotel@haciendadelcardenal.com</p>
<p>RESTAURANTE:</p>
<p>Tlf: (+34) 925 22 08 62</p>
<p>Fax: (+34) 925 25 16 88</p>
<p>restaurante@haciendadelcardenal.com</p>
<p>Ubicación:</p>
<p>Paseo de Recaredo 24, 45004, Toledo, España.</p>
<p>A los efectos quejas y reclamaciones, se ofrecen cualquiera de las direcciones anteriormente expuestas en las que el usuario podrá hacerlas constar de forma fehaciente (Ley 3/2014).</p>
<h3>Propiedad Intelectual</h3>
<p>El Titular es titular de todos los derechos de propiedad intelectual del presente Sitio Web, así como de todos los elementos contenidos en la misma (a título enunciativo, imágenes, sonido, audio, vídeo, software o textos; marcas o logotipos, combinaciones de colores, estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, etc.). Todos los derechos de propiedad intelectual del Sitio Web, incluyendo los citados y el propio Sitio Web en su conjunto pertenecen a El Titular, que se reserva el derecho a modificar y/o suprimir los contenidos del sitio sin previo aviso. En virtud de lo dispuesto en la normativa de propiedad intelectual, quedan expresamente prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin la autorización de El Titular. Todos los elementos que dan forma al Sitio Web están protegidos como derechos de autor por la legislación en materia de propiedad intelectual. El acceso a esta página o la navegación por la misma no implica, en ningún caso, cesión de dichos derechos de autor al interesado. Podrá visualizar los elementos del portal e incluso imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, única y exclusivamente, para su uso personal y privado.</p>
<h3>Propiedad Industrial</h3>
<p>Las marcas registradas o signos distintivos presentes en el Sitio Web son propiedad industrial de sus legítimos propietarios. Está prohibido hacer uso de ellas sin el previo permiso de los mismos. El acceso al Sitio Web no confiere a su titular ningún derecho sobre las mismas. A todos los efectos, las mismas se encuentran sometidas a la Ley 17/2001, de marcas.</p>
<h3>Navegacion y Responsabilidad</h3>
<p>El Titular no puede garantizar el buen funcionamiento del Sitio Web en ningún caso, ello no obstante se procurará en todo caso que dicho funcionamiento sea el apropiado en todo momento. El Titular no se hace responsable de los errores del Sitio Web, así como del mal funcionamiento o responsabilidad de los contenidos enlazados. Dichos contenidos enlazados podrían en ocasiones ofertar productos y servicios. El mero enlace en el presente Sitio Web no supone invitación alguna a contratarlos. El Titular no ejerce ningún tipo de control sobre dichos sitios y contenidos externos al Sitio Web.</p>
<p>El usuario declara que es mayor de edad (mayor de 18 años) y disponer de capacidad legal necesaria, manifestando asimismo que acepta la vinculación a este acuerdo y entiende y acepta en su totalidad las condiciones aquí enunciadas.</p>
<h3>Ilegalidad de Contenidos</h3>
<p>Se puede notificar la ilegalidad de los contenidos del Sitio Web y solicitar la retirada o bloqueo de los mismos enviando un correo electrónico a la siguiente dirección:</p>
<p>hotel@haciendadelcardenal.com</p>

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