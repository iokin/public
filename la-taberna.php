<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante del Cardenal | La Taberna - Restaurante del Cardenal en Toledo</title>
	<meta name="description" content="Taberna de estilo mudéjar un espacio donde relajarse y disfrutar del buen vino y la buena comida. Deliciosas tapas de ibéricos o platos típicos de Toledo, mientras disfruta del sonido del agua o de actuaciones musicales en directo.">
	<meta name="keywords" content="Taberna restaurante del Cardenal Toledo, tapas Toledo, platos típicos de Toledo, actuaciones musicales en directo en Toledo.">
    
						<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    
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
     
     <link rel="stylesheet" href="css/jquery-ui.css">

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
    <div class="container-fluid f-taberna">
    &nbsp;
    </div>
</div>
	
    
    
    
    <div class="jumbotron">
    	<div class="container">
        <h1 class="text-center">Restauración</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	
    		<div class="row">
        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            		<img src="images/restauracion/img-taberna.jpg" class="img-responsive center-block" alt="...">
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="bg-res">
            			<h2 class="text-center">La Taberna</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">
<strong>Como alternativa, o como complemento al restaurante también puedes disfrutar de nuestra singular taberna.</strong><br><br>Su carta ofrece una selección de tapas y raciones típicas de la zona y alberga una bodega con una <strong>gran selección de vinos</strong> de la Tierra, Riojas y Riberas del Duero.</p>

                	</div>
       	  		</div>
          </div>
          
          
          
          
       
        </div>
    </div>
    
    <div class="jumbotron bg-grey" style="
    background: #f2f2f2 url('images/restauracion/fondo-menu-taberna.png') center no-repeat;
    background-size: cover; background-attachment: fixed;
">
<h1 class="text-center color01">Carta taberna</h1><img src="images/separador.png" class="img-responsive center-block" alt="...">
   
    <div class="container">

  
  
   		<div class="container f-menus">
       <img src="/images/QR-Hacienda-del-Cardenal-2021.jpg" alt="QR con la carta" class="img-responsive center-block">
   		  <!-- <h2 class="text-center">Bocados con sabor</h2>
    		<hr class="hr-30">
    		<div class="row">
    		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    		<p class="text-center">
Anchoas del Cantábrico con tapenade de aceitunas Kalamata<br>
<span class="color01">Jamón Ibérico (60 gr.)</span><br>
Tabla Manchega (lomo, cecina y queso Manchego)
<br>
<span class="color01">Tabla de queso Manchego D.O.</span><br>
Croquetas de jamón Ibérico
<br>
<span class="color01">Nuestros huevos rotos con jamón o torreznos de Soria</span><br>
Ragout de ciervo marinado de los Montes de Toledo
<br>
<span class="color01">Nuestro cochifrito
</span><br>
Gambones al ajillo
<br>
<span class="color01">Pulpo a la brasa</span><br>
Ensalada de pimiento con ventresca<br>
<span class="color01">Timbal de morcilla, compota de cebolla y pimiento asado</span>
<br>
Tomate rosado con piparras, cebolleta y atún con aliño de miel y mostaza<br>
<span class="color01">Carcamusas</span>
<br>
		</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p class="text-center">

<span class="color01">Entrecot de vaca trinchado</span>
<br>
Pepito de ternera blanca, canónigos y chimichurri<br>
<span class="color01">Calamares al ajillo y alioli tradicional</span><br>
Ensalada César a nuestra manera de pollo crujiente o salmón<br>
Pepito de ternera blanca, canónigos y chimichurri<br>
<span class="color01">Terrina de oreja con mahonesa de jamón</span><br>
Salmorejo o Gazpacho Cardenal<br>
<span class="color01"> Alistado a la plancha con sal Maldon y salsa Mery</span><br>
Hamburguesa “Cardenal” (lechuga, tomate, cebolla roja
 en compota, pepinillo, emmental y carne de buey (certificada)
 salsas: Mahonesa, mostaza y BBQ ahumada<br>
<span class="color01">Hamburguesa de Salmón con patata confitada y ajo negro
 (tomate, lechuga, pepinillo, cebolleta y salsa rosa)</span><br>




</p>


    </div>
    </div>
    -->
   
    </div>
    </div>

    
    </div>
    
    <div class="jumbotron">
    <h1 class="text-center color01">Galería de imágenes</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
    <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-07.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle Taberna" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-02.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-02.jpg" data-lightbox="Hacienda del Cardenal" data-title="Interior Taberna Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-07.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-03.jpg" data-lightbox="Hacienda del Cardenal" data-title="Selección de vinos" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-06.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-06.jpg" data-lightbox="Hacienda del Cardenal" data-title="Tapas de calidad" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-03.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-01.jpg" data-lightbox="Hacienda del Cardenal" data-title="Interior Taberna" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-08.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-08.jpg" data-lightbox="Hacienda del Cardenal" data-title="Selección de vinos de la Tierra" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-01.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-04.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle tapas" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-05.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-taberna/big/taberna-hdc-05.jpg" data-lightbox="Hacienda del Cardenal" data-title="Detalle Taberna" class="thumbnail">
      <img src="images/galeria-taberna/taberna-hdc-04.png">
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
    
    <script src="js/jquery-ui.js"></script>
    <!-- Validate form -->
    <script type="text/javascript" src="/js/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- mis scripts -->
    
    <script src="js/scripts.js"></script>
    <script src="js/scripts2.js"></script>
    
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