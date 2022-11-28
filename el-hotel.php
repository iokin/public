<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Hotel con encanto de 3 estrellas en Toledo | La Hacienda del Cardenal</title>

  <meta name="description"
    content="Hotel con encanto de 3 estrellas ubicado en un edificio histórico en la muralla (S.XI) del Casco Antiguo de Toledo. Reserva al mejor precio garantizado" />
  <meta name="keywords" content="hotel, toledo, hotel con encanto" />

  <link rel="shortcut icon" href="images/iconos/favicon.ico" />
  <link rel="shortcut icon" href="images/iconos/apple-icon.png" />

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
            <img src="images/slider/hotel/hotel.jpg" class="center-block" alt="...">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">

            <img src="images/slider/hotel/hotel-terraza.jpg" class="center-block" alt="...">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="images/slider/hotel/hotel-chimenea.jpg" class="center-block" alt="...">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="images/slider/hotel/hotel-patiotoledano.jpg" class="center-block" alt="...">
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
      <h1 class="text-center">El Hotel</h1>
      <img src="images/separador.png" class="img-responsive center-block" alt="...">
      <p class="text-center"><strong>Alojarse en la Hacienda del Cardenal, tradición y leyenda de siglos
          pasados.</strong></p>
      <p class="text-justify" style="line-height: 1.8;">
        A tan solo 30 minutos de Madrid se halla Toledo. Ciudad milenaria, cruce de diferentes culturas: árabe, judía y
        cristiana y declarada Patrimonio de la Humanidad por la UNESCO en 1986. En ese mismo entorno, y en uno de los
        lugares más privilegiados de la ciudad, se encuentra la Hacienda del Cardenal, próxima a todos los lugares de
        interés y asentada en uno de los entornos más bellos. <a href="#" id="alternar-respuesta-ej5"
          style="display: inline-block; background-color: #c49956; color: #fff; text-decoration: none; padding: 2px 8px; font-size: small; border-radius: 4px; font-family: 'Open Sans', Arial, Helvetica, sans-serif;"
          title="Ampliar información del Hotel"> Ampliar info </a> </p>

      <p id="respuesta-ej5" style="display:none; padding:12px; border-radius:12px; line-height: 1.8;" class="bg-grey">

        Levantada como “Quinta” de recreo, restaurando lo que fue un palacio toledano de la época, a finales del siglo
        XVIII por el Cardenal Lorenzana, es lo que hoy vemos como el hotel.
        <br><br>

        <img src="images/slider/hotel/escudo.png" class="img-responsive center-block" alt="...">

        <br><br>
        El hotel se encuentra en la parte alta del jardín. El zaguán coronado con el escudo familiar Lorenzana, alberga
        la recepción del hotel y da paso a un recibidor con techo de madera al uso en la segunda mitad del siglo XVIII.
        <br>
        <br>
        Los pasillos vestidos con caminos de sisal distribuyen en dos plantas las 27 habitaciones orientadas en su
        mayoría hacia el norte, encarando el jardín, con ventanas imitando el lacado popular en blanco.
        <br><br>

        A la planta superior accedemos por una escalera cuya barandilla es del siglo XVI, donde contemplamos una réplica
        de “Tormenta sobre Toledo”, antesala del salón social de corte neoclásico, cuya chimenea es el centro de una
        sala irregular donde podemos encontrar dos sillones de cordobán.</p>

        <a href="habitaciones.php" class="link-cover" title="Habitaciones del Hotel">
        <div class="row row-dorado">

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="bg-white02">
              <h2 class="text-center">Habitaciones</h2>
              <img src="images/separador.png" class="img-responsive center-block" alt="...">
              <p class="text-center">Hacienda del Cardenal dispone de <br>habitaciones con estilo propio.</p>
              <center><i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color:#C49956;"></i></center>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/hotel/fondo-galeria02.jpg" class="img-responsive hidden-xs">
          </div>
        </div>
      </a>
      
      <a href="servicios-hotel.php" class="link-cover02" title="Servicios">
        <div class="row row-white">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/hotel/fondo-info.jpg" class="img-responsive hidden-xs">
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="bg-dorado02">
              <h2 class="text-center">Servicios</h2>
              <img src="images/separador-white.png" class="img-responsive center-block" alt="...">
              <p class="text-center">Servicios de alta calidad para que disfrute<br>
                de su estancia con nosotros.</p>
              <center><i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color:white;"></i></center>
            </div>
          </div>
        </div>
      </a>
      

      <!--<a href="el-hotel-02.php" class="link-cover" title="El Hotel">
          <div class="row row-dorado">
        		
            	
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            		<img src="images/hotel/fondo-hotel02.jpg" class="img-responsive hidden-xs">
            	</div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                	<div class="bg-white02">
           			  <h2 class="text-center">El Hotel</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">Descubre la historia de nuestro Hotel<br>
y sus orígenes.</p>
                        <center><i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color:#C49956;"></i></center>
                    </div>
       	  		</div>
          </div>
          </a>-->
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

  <!-- mis scripts -->

  <script src="js/scripts.js"></script>

  <script type="text/javascript">
    // jQuery
    $(document).ready(function () {
      $('#alternar-respuesta-ej1').on('click', function () {
        $('#respuesta-ej1').toggle('fast');
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {

      $('#alternar-respuesta-ej5').toggle(

        // Primer click
        function (e) {
          $('#respuesta-ej5').slideDown();
          $(this).text('Ocultar info');
          e.preventDefault();
        }, // Separamos las dos funciones con una coma

        // Segundo click
        function (e) {
          $('#respuesta-ej5').slideUp();
          $(this).text('Ampliar info');
          e.preventDefault();
        }

      );

    });
  </script>

</body>

</html>