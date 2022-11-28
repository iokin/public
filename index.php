<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>La Hacienda del Cardenal, Toledo | Mejor precio garantizado</title>

  <!-- Meta SEO -->
	<meta name="robots" CONTENT="index, follow">
	<meta name="title" content="Hacienda del Cardenal" />
  <meta name="Description" content="Restaurante y hotel en Toledo." />
	<meta name="keywords" content="Restaurante en Toledo, Hotel boutique, En la muralla del casco antiguo, Horno de leña, Cochinillo y cordero asados, Bodas, Grupos" />
	<meta name="rating" content="General" />
	<meta name="revisit-after" content="5 days" />
	<meta name="distribution" content="Global" />
	<meta name="copyright" content="Hacienda del Cardenal"/>
	<meta name="author" content="Hacienda del Cardenal" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name="language" content="Spanish" />

  <link rel="shortcut icon" href="images/iconos/favicon.ico" />
  <link rel="shortcut icon" href="images/iconos/apple-icon.png" />

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Lightbox -->
  <link href="dist/css/lightbox.css" rel="stylesheet">

  <!-- estilos -->
  <link href="css/style.css" rel="stylesheet">
<link href="/engine.css" rel="stylesheet">
  <link href="css/fonts.css" rel="stylesheet">

  <link href="css/font-awesome.min.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<script type="text/javascript" src="https://js.mirai.com/mirai-loader/mirai.loader.js"></script>
</head>

<body>
<div id="miraiTracking" data-mirai-engine="mirai_tr" data-idhotel="" data-init="auto"></div>
  <div class="jumbotron no-margin-padding border-botom-grey">
    <div class="container">
      <ul class="r-social">
        <li class="hidden-xs">Síguenos en: </li>
        <li><a href="https://www.facebook.com/pages/Hacienda-del-Cardenal/261938530628167?ref=hl" target="_blank"><i
              class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
        
        
        <li><a href="https://www.instagram.com/haciendadelcardenal/" target="_blank"><i class="fa fa-instagram fa-2x"
              aria-hidden="true"></i></a></li>
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
      <a id="alternar-respuesta-ej1" href="#" style="display: inline-block;">
        <img src="images/bot-reservar.png" class="img-responsive" alt="Reservar habitación">
      </a>
    </div>


    <div class="jumbotron no-margin-padding buscador" id="respuesta-ej1" style="display:none">
      <?php echo $contentReserva; ?>
    </div>
  </div>
  <?php } else { ?>
  <div class="bot-reserva">
    <a href="#" style="display: inline-block;"></a>
  </div>


  <div class="jumbotron no-margin-padding">
    <?php echo $contentReserva; ?>
  </div>
  </div>
  <?php } ?>

  <!-- Fin Reserva-->

  <!-- SLIDER -->
  <div class="jumbotron no-margin-padding">
    <div class="carousel slide full-screen hidden-xs">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    
  </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="images/slider/home/bodas.jpg" class="center-block" alt="Hacienda del Cardenal">
            <div class="carousel-caption">

            </div>
          </div>

          <div class="item">
            <img src="images/slider/home/bicicleta.jpg" class="center-block" alt="Hacienda del Cardenal">
            <div class="carousel-caption">

            </div>
          </div>

          <div class="item">
            <img src="images/slider/home/chill-out.jpg" class="center-block" alt="Hacienda del Cardenal">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="images/slider/home/toledo.jpg" class="center-block" alt="Hacienda del Cardenal">
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
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-margin-padding margin-down effectIndex" id="effectIndex1">
      
        <div class="d-restaura f-restaura">
        <div style="
    margin: 1.5rem;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 9999999;
"><a href="https://module.lafourchette.com/es_ES/module/4813-bfdf2" class="no-underline" target="_blank"
              title="Reservar con eltenedor"><i class="fa fa-calendar-check-o fa-3x" aria-hidden="true"
                style="color:white;"></i></a>
  </div><a href="restauracion.php" class="no-underline">
          <div class="sobresalir">
            <h2>Restauración</h2>
            <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
            <p>Restaurante y taberna con lo mejor de la gastronomía toledana</p>
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"
                style="color:white;"></i>
                
          </div>
          </a>
        </div>
        <div class="capa" id="capa1"></div>
        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-margin-padding margin-down effectIndex" id="effectIndex2">
        <a href="el-hotel.php" class="no-underline">

          <div class="d-restaura f-hotel-h">
            <div class="sobresalir">
              <h2>Hotel</h2>
              <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
              <p>Un hotel con leyenda junto al casco histórico de Toledo</p>
              <i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color:white;"></i>
            </div>
          </div>
          <div id="capa"></div>
          <div class="capa" id="capa2"></div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-margin-padding margin-down effectIndex" id="effectIndex3">
        <a href="eventos.php" class="no-underline">
          <div class="d-restaura f-eventos">
            <div class="sobresalir">
              <h2>Eventos</h2>
              <img src="images/separador-white.png" class="img-responsive center-block" alt="...">

              <p>Bodas, eventos sociales y corporativos a medida en Toledo</p>
              <i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color:white;"></i>
            </div>
          </div>
          <div class="capa" id="capa3"></div>
        </a>
      </div>
    </div>
  </div>

  <div class="jumbotron bg-grey">
    <h1 class="text-center color01">Ofertas y promociones</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-down ">
        <div class="thumbnail no-margin-padding">
          <img src="images/menu-cardenal.jpg" alt="Menú cardenal 2022 - HdC">
          <div class="caption">

            <p class="text-center"><strong>Menús del Cardenal</strong><br><span style="font-size: small;
    font-style: italic;">Carta Otoño – Invierno Y Menú Cardenal </span></p>
          </div>
          <p class="text-center"><a href="pdf/Carta-Otono-Invierno-HdC-2022.pdf"
              title="Carta Otoño Invierno Cardenal 2022 - HdC" class="btn btn-primary" role="button" download><i
                class="fa fa-info-circle" aria-hidden="true"></i> CARTA DE OTOÑO</a> </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-down ">
        <div class="thumbnail no-margin-padding">
          <img src="images/corpus.jpg" alt="Días Especiales de Navidad">
          <div class="caption">
          <p class="text-center"><strong>Días Especiales de Navidad</strong><br><span style="font-size: small;
    font-style: italic;">24, 25, 31 diciembre  Y 1 de enero 2023</span></p>
          
          </div>
          <p class="text-center"><a href="pdf/DIAS-ESPECIALES-NAVIDAD-HDC-2022-23.pdf" target="_blank"
              title="Menús Especiales de Navidad 2022" class="btn btn-primary" role="button" download><i class="fa fa-info-circle"
                aria-hidden="true"></i> VER MENÚS</a> </p>
          
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-down ">
        <div class="thumbnail no-margin-padding">
          <img src="images/menu-navidad.jpg" alt="Menús Corpus 2022 - Hacienda del Cardenal">
          <div class="caption">

            <p class="text-center"><strong>Menús navidad grupos 2022</strong><br><span style="font-size: small;
    font-style: italic;">Descubre nuestros menús de navidad.</span></p>

          </div>
          <p class="text-center"><a href="pdf/Menus-grupos-Navidad-2022-HdC.pdf" target="_blank"
              title="Menús Navidad 2022" class="btn btn-primary" role="button" download><i class="fa fa-info-circle"
                aria-hidden="true"></i> VER MENÚS</a> </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-down ">
        <div class="thumbnail no-margin-padding">
          <img src="images/menu-bodas.jpg" alt="Dossier bodas 2022 - Hacienda del Cardenal">
          <div class="caption">

            <p class="text-center"><strong>Menús Bodas 2023</strong><br><span style="font-size: small;
    font-style: italic;">Menús especiales para bodas</span></p>

          </div>
          <p class="text-center"><a href="pdf/Dossier-menus-bodas.2023.pdf" target="_blank"
              title="Menús Bodas HdC 2022 - Hacienda del Cardenal" class="btn btn-primary" role="button"><i
                class="fa fa-info-circle" aria-hidden="true"></i> MÁS INFO</a> </p>
        </div>
      </div>

      

    </div>

  </div>

  <div class="jumbotron">
    <h1 class="text-center color01">Galería de imágenes</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Terraza.jpg" data-lightbox="Hacienda del Cardenal" data-title="Terraza"
          class="thumbnail">
          <span class="roll"></span>
          <img src="images/galeria-home/galeria-_0008_terraza.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Campana.jpg" data-lightbox="Hacienda del Cardenal" data-title="Campana"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0007_campana.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Cristalera.jpg" data-lightbox="Hacienda del Cardenal" data-title="Cristalera"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0005_cristalera.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Habitacion.jpg" data-lightbox="Hacienda del Cardenal" data-title="Habitación"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0003_habitacion.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Suite.jpg" data-lightbox="Hacienda del Cardenal" data-title="Suite"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0000_suite.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Escalera.jpg" data-lightbox="Hacienda del Cardenal" data-title="Escalera"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0004_escalera.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Techos.jpg" data-lightbox="Hacienda del Cardenal" data-title="Techos"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0002_techos.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Chimenea.jpg" data-lightbox="Hacienda del Cardenal" data-title="Terraza"
          class="thumbnail">
          <img src="images/galeria-home/galeria-_0006_chimenea.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/toledo.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Catedral de Toledo" class="thumbnail">
          <img src="images/galeria-home/toledo.jpg">
        </a>
      </div>

      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/toledo2.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Alcazar de Toledo" class="thumbnail">
          <img src="images/galeria-home/toledo2.jpg">
        </a>
      </div>

      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Piscina-y-Muralla-HdC.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Piscina y muralla" class="thumbnail">
          <img src="images/galeria-home/Piscina-y-Muralla-HdC.jpg">
        </a>
      </div>

      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-home/big/Piscina-noche-HdC.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Piscina de noche" class="thumbnail">
          <img src="images/galeria-home/Piscina-noche-HdC.jpg">
        </a>
      </div>

    </div>

  </div><?php require 'pl_pie.php'; ?>

  <div class="container-fluid" style="background-color:white;">
    <p class="text-center"><a href="cookies.php" target="_blank">COOKIES</a> | <a href="privacidad.php"
        target="_blank">POLÍTICA DE PRIVACIDAD</a> | <a href="aviso-legal.php" target="_blank">AVISO LEGAL</a></p>
  </div>

  <a href="#" class="scrolltop" style="display: inline;"><i class="fa fa-arrow-circle-up fa-3x"
      aria-hidden="true"></i></a>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap hover -->
  <script src="js/bootstrap-hover-dropdown.min.js"></script>

  <!-- mis scripts -->

  <script src="js/scripts.js"></script>

  <script src="dist/js/lightbox.js"></script>

  <script type="text/javascript">
    // jQuery
    $(document).ready(function () {
      $('#alternar-respuesta-ej1').on('click', function () {
        $('#respuesta-ej1').toggle('fast');
      });
    });
  </script>

  <!-- Política de cookies -->
  <script src="js/jquery.cookie.js"></script>
  <script src="js/cookie_policy.js"></script>

</body>

</html>
