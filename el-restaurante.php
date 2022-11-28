<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Restaurante del Cardenal | El Restaurante - Asados al horno de leña en Toledo</title>
  <meta name="description"
    content="En nuestro horno de leña de encina permite la preparación a la antigua usanza castellana de los inconfundibles asados de cochinillo y cordero. Cocina castellana de alta calidad.">
  <meta name="keywords"
    content="Restaurante el Cardenal en Toledo, asados al horno de leña, cochinillo asado, codornices estofadas, cordero asado.">

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

  <!--<link rel="stylesheet" href="css/jquery-ui.css">-->
  <link href="dist/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">

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


  <div class="jumbotron no-margin-padding">
    <div class="container-fluid f-restaurante">
      &nbsp;
    </div>
  </div>




  <div class="jumbotron no-margin-padding">
    <div class="container">
      <h1 class="text-center">Restauración</h1>
      <img src="images/separador.png" class="img-responsive center-block" alt="...">
      <p class="text-center" style="margin:2em;">Nuestro horno de leña de encina permite la preparación a la antigua
        usanza castellana, de los inconfundibles asados de cochinillo y cordero.</p>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="images/restauracion/img-restaurante.jpg" class="img-responsive center-block" alt="...">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="bg-res">
            <h2 class="text-center">Restaurante</h2>
            <img src="images/separador.png" class="img-responsive center-block" alt="...">
            <p class="text-center">
              Cuando se acerca el verano, podrás disfrutar de los extensos jardines con tradición musulmana, inundados
              por el aroma de sus flores y el sonido de sus fuentes creando un ambiente de relajación en un sitio
              único.<br><br>
              <strong>Vive un Restaurante dentro de una antigua mansión toledana con salas y dependencias, decoradas con
                azulejos, madera y artesonados de solera.</strong></p>
            <p class="text-center"><a href="#reservas" class="btn btn-primary btn-color01 no-radious" role="button"><i
                  class="fa fa-calendar-check-o" aria-hidden="true"></i> RESERVAR</a></p>
          </div>
        </div>
      </div>





    </div>
  </div>

  <div class="jumbotron bg-grey" style="
    background: #f2f2f2 url(&quot;images/restauracion/fondo-menu.png&quot;) center no-repeat;
    background-size: cover; background-attachment: fixed;
">

    <h1 class="text-center color01" style="margin:0; margin-bottom:30px;">Nuestra Carta</h1>
    <p class="text-center"><strong>Pulsa sobre la imagen para descargar el PDF</strong></p>
    <div class="container">

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="pdf/Dossier-Menus-2022-HdC-Toledo.pdf" target="_blank" title="Menús Grupos Hacienda del Cardenal" download><img
            src="images/menus-grupos.png" alt="Menús Grupos Hacienda del Cardenal - Hacienda del Cardenal"
            title="Menús Grupos Hacienda del Cardenal" class="img-responsive center-block"></a>
      </div>
      <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a href="pdf/menu-haciendacardenal-esp-ing.pdf" target="_blank" title="Menús de Hacienda El Cardenal"
          download><img src="images/carta_restaurante.png" alt="Carta del restaurante Hacienda del Cardenal"
            title="Descargar Carta del restaurante" class="img-responsive center-block"></a>
      </div> -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="pdf/CARTA-VINOS-2022-HDC.pdf" target="_blank" download><img src="images/carta-vinos.png"
            alt="Carta de vinos Hacienda del Cardenal" title="Carta de vinos Hacienda del Cardenal"
            class="img-responsive center-block"></a>
      </div>
      <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<a href="pdf/menu-cardenal.pdf" target="_blank"><img src="images/menu-cardenal.png" alt="Menú Hacienda del Cardenal" title="Menú Hacienda del Cardenal" class="img-responsive center-block"></a>
   </div> -->





    </div>
    <div class="container hidden-xs">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs hidden-xs" role="tablist">
        <li role="presentation" class="active"><a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab"><i
              class="fa fa-cutlery" aria-hidden="true"></i> Carta</a></li>


        <li role="presentation"><a href="#infantil" aria-controls="infantil" role="tab" data-toggle="tab"><i
              class="fa fa-child" aria-hidden="true"></i> Menú infantil</a></li>

      </ul>

      <ul class="nav nav-tabs hidden-lg visible-xs" role="tablist">
        <li role="presentation" class="active"><a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab"><i
              class="fa fa-cutlery" aria-hidden="true"></i></a></li>

        <li role="presentation"><a href="#infantil" aria-controls="infantil" role="tab" data-toggle="tab"><i
              class="fa fa-child" aria-hidden="true"></i></a></li>

      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="menu1">

          <div class="container f-menus">
            <h2 class="text-center">Escanea y accede a La Carta</h2>

            <img src="/images/QR-Hacienda-del-Cardenal-2021.jpg" alt="QR con la carta"
              class="img-responsive center-block">
          </div>
        </div>




        <div role="tabpanel" class="tab-pane fade" id="infantil">

          <div class="container f-menus">
            <h2 class="text-center">Menú Infantil (hasta 12 años)</h2>
            <img src="/images/cocineros.png" alt="QR con la carta" class="img-responsive center-block">
            <hr class="hr-30">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="text-center">PLATO ÚNICO (A ELEGIR ENTRE)<br><br>

                  Espaguettis con boloñesa casera<br><br>
                  <span class="color01">Escalope de ternera con patatas fritas</span><br><br>
                  Daditos de merluza con patatas fritas<br><br>
                  <span class="color01">Fingers de pollo y croquetas de jamón con patatas fritas</span><br><br>
                  *****<br><br>
                  POSTRE A ELEGIR<br><br>
                  Helados<br>
                  <span class="color01">Tarta de chocolate</span><br><br>
                  Incluye una bebida y pan<br><br>
                  *****<br><br>
                  <span class="precio">Precio 18 €</span><br><br>
                  <strong>Precios con el IVA incluído</strong>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron"><a id="reservas"></a>
    <h1 class="text-center color01">Formulario de reservas</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <p class="text-center">Llámanos al <a href="tel:925220862"><i class="fa fa-phone" aria-hidden="true"></i> 925 22 08
        62</a> o haz tu reserva a través de este formulario.</p><br>
    <div class="container">
      <div id="restaurantResponse" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"></div>

      <div align="center">
        <iframe src="https://module.lafourchette.com/es_ES/module/4813-bfdf2"
          style="width: 100%; min-height:600px; border:none; scrolling: yes;"></iframe></div>
    </div>
  </div>

  <div class="jumbotron bg-grey">
    <h1 class="text-center color01">Galería de imágenes</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <div class="container">
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-01.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Terraza desde Muralla El Cardenal" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-08.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-02.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Taberna Hacienda del Cardenal" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-07.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-03.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Restaurante Airosas HdC toledo" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-06.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-05.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Mesa salón Greco HdC Toledo" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-04.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-06.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Restarante Mezquita HdC" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-03.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-04.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Detalle Restaurante HdC" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-05.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-07.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Lampara Mezquita HdC Toledo" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-02.png">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="images/galeria-restaurantes/big/restaurante-hdc-08.jpg" data-lightbox="Hacienda del Cardenal"
          data-title="Horno y asados Hacienda del Cardenal" class="thumbnail">
          <img src="images/galeria-restaurantes/restaurante-hdc-01.png">
        </a>
      </div>
    </div>

  </div>


  <?php require 'pl_pie.php'; ?>

  <div class="container-fluid" style="background-color:white;">
    <p class="text-center"><a href="cookies.php" target="_blank">COOKIES</a> | <a href="privacidad.php"
        target="_blank">POLÍTICA DE PRIVACIDAD</a> | <a href="aviso-legal.php" target="_blank">AVISO LEGAL</a></p>
  </div> <a href="#" class="scrolltop" style="display: inline;"><i class="fa fa-arrow-circle-up fa-3x"
      aria-hidden="true"></i></a>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <!--<script src="js/jquery-ui.js"></script>-->

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
    $(document).ready(function () {
      $('#alternar-respuesta-ej1').on('click', function () {
        $('#respuesta-ej1').toggle('fast');
      });
    });
  </script>
</body>

</html>