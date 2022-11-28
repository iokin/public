<?php require 'mobile.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurante del Cardenal | Bodas - Salones de boda en Toledo</title>
	<meta name="description" content="Antigua residencia de recreo del Cardenal Lorenzana levantada en el siglo XVII, rodeada de unos jardines espectaculares y con la garantía del Grupo Botín de Madrid. Celebra tu boda con nosotros y garantiza un día inolvidable.">
    <meta name="keywords" content="Boda en Toledo, salones de boda en Toledo, celebra tu boda en Toledo, Boda Restaurante Hacienda del Cardenal en Toledo, espacio bodas Toledo, organización bodas Toledo">
    
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
    
     <link rel="stylesheet"  href="css/lightslider.css"/>
    <style>
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
		.demo{
			width: auto;
		}
    </style>
    
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
    <div class="container-fluid f-bodas">
    &nbsp;
    </div>
</div>
	
    
    
    
    <div class="jumbotron">
    	<div class="container">
        <h1 class="text-center">Eventos</h1>
    	<img src="images/separador.png" class="img-responsive center-block" alt="..." >
    	<p class="text-center">Seremos vuestros guías, y os ayudaremos en todo lo que podáis necesitar. </p>
    		<div class="row">
        		


                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"> 
        <div class="demo">
        <div class="item">            
            <div class="clearfix">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    
                         
                         <li data-thumb="images/galeria-bodas02/Fachada-HdC.jpg"> 
                        <div style="
    position: relative;
"><span class="roll"><a href="images/galeria-bodas02/Fachada-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos-Bodas"><img src="images/icon-ampliar.png" class="img-responsive center-block" alt="..."></a></span><img src="images/galeria-bodas02/Fachada-HdC.jpg" class="img-responsive" /></div>
                         </li>
                         
                         <li data-thumb="images/galeria-bodas02/Ceremonia-patio-HdC.jpg"> 
                        <div style="
    position: relative;
"><span class="roll"><a href="images/galeria-bodas02/Ceremonia-patio-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos-Bodas"><img src="images/icon-ampliar.png" class="img-responsive center-block" alt="..."></a></span><img src="images/galeria-bodas02/Ceremonia-patio-HdC.jpg" class="img-responsive" /></div>
                         </li>
                         <li data-thumb="images/galeria-bodas02/notas.jpg"> 
                        <div style="
    position: relative;
"><span class="roll"><a href="images/galeria-bodas02/notas.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos-Bodas"><img src="images/icon-ampliar.png" class="img-responsive center-block" alt="..."></a></span><img src="images/galeria-bodas02/notas.jpg" class="img-responsive" /></div>
                         </li>
                         
                         <li data-thumb="images/galeria-bodas02/Centro-boda-HdC.jpg"> 
                        <div style="
    position: relative;
"><span class="roll"><a href="images/galeria-bodas02/Centro-boda-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos-Bodas"><img src="images/icon-ampliar.png" class="img-responsive center-block" alt="..."></a></span><img src="images/galeria-bodas02/Centro-boda-HdC.jpg" class="img-responsive" /></div>
                         </li>
                         
                         <li data-thumb="images/galeria-bodas02/salon.jpg"> 
                        <div style="
    position: relative;
"><span class="roll"><a href="images/galeria-bodas02/salon.jpg" data-lightbox="Hacienda del Cardenal" data-title="Eventos-Bodas"><img src="images/icon-ampliar.png" class="img-responsive center-block" alt="..."></a></span><img src="images/galeria-bodas02/salon.jpg" class="img-responsive" /></div>
                         </li>
                         
                    
                </ul>
            </div>
        </div>
    </div>  
         </div>

                
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            	<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                	<div class="bg-res">
            			<h2 class="text-center">Bodas</h2>
            			<img src="images/separador.png" class="img-responsive center-block" alt="...">
            			<p class="text-center">
Un banquete delicioso, adornos florales sencillos, de tendencia o clásicos. Montajes originales, meseros temáticos… </p>
<p class="text-center"><a href="#menus" class="btn btn-primary btn-color01 no-radious" role="button"><i class="fa fa-cutlery" aria-hidden="true"></i> MENÚS</a>&nbsp;<a href="#reservas" class="btn btn-primary btn-color01 no-radious" role="button"><i class="fa fa-info-circle" aria-hidden="true"></i> SOLICITAR INFORMACIÓN</a> </p>
                	</div>
       	  		</div>
          </div>
          
          
          
          
       
        </div>
    </div>
    <a id="menus"></a>
<div class="jumbotron bg-grey" style="
    background: #f2f2f2 url(&quot;images/restauracion/fondo-menu.png&quot;) center no-repeat;
    background-size: cover; background-attachment: fixed;
">

<h1 class="text-center color01" style="margin:0; margin-bottom:30px;">Menús 2022</h1>



  <div class="container">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs hidden-xs" role="tablist">
    <li role="presentation" class="active"><a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab"><i class="fa fa-cutlery" aria-hidden="true"></i> Carta</a></li>
    
    <li role="presentation"><a href="#infantil" aria-controls="infantil" role="tab" data-toggle="tab"><i class="fa fa-cutlery" aria-hidden="true"></i> Servicios incluidos</a></li>
    <li role="presentation"><a href="#infantil02" aria-controls="infantil02" role="tab" data-toggle="tab"><i class="fa fa-cutlery" aria-hidden="true"></i> Menú Infantil</a></li>

    <li role="presentation"><a href="#ceremonia" aria-controls="ceremonia" role="tab" data-toggle="tab"><i class="fa fa-info-circle" aria-hidden="true"></i> Ceremonia civil</a></li>
    
  </ul>
  
  <ul class="nav nav-tabs hidden-lg visible-xs" role="tablist">
    <li role="presentation" class="active"><a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab"><i class="fa fa-cutlery" aria-hidden="true"></i> Carta</a></li>
    
    <li role="presentation"><a href="#infantil" aria-controls="infantil" role="tab" data-toggle="tab"><i class="fa fa-cutlery" aria-hidden="true"></i></a></li>

    <li role="presentation"><a href="#infantil02" aria-controls="infantil02" role="tab" data-toggle="tab"><i class="fa fa-cutlery" aria-hidden="true"></i></a></li>
    
    <li role="presentation"><a href="#ceremonia" aria-controls="ceremonia" role="tab" data-toggle="tab"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="menu1">
    
    <div class="container f-menus">
    <h2 class="text-center">Cóctel y Bienvenida</h2>
<hr class="hr-30">
    <p class="text-center">Comenzamos nuestro Aperitivo de bodas con los “minutos de cortesía”
Serán 20 minutos en los que ofrecemos bebidas de recepción a vuestros invitados.
A continuación seguiremos con el servicio del cóctel que tendrá 1 hora de duración.<br><br>
Siempre que el tiempo lo permita, el Aperitivo se servirá en nuestra Terraza Chill out.
</p>
    <hr class="hr-30">
    <h2 class="text-center">Aperitivos</h2>
	
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p>
    Vasito de gachas manchegas<br>
    <span class="color01">Cazuelita de carcamusas toledanas</span><br>
Chupito de crema de temporada<br>
<span class="color01">Hojaldre de guacamole y anchoa</span><br>
Tapita de ensaladilla y huevas de salmón<br>
<span class="color01">Langostino en panko</span><br>
Daditos de atún rojo marinado<br>
</p>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

<p>
<span class="color01">Ferrero de foie con mermelada de mango</span><br>
Croquetitas variadas<br>
<span class="color01">Tartaleta de brandada de bacalao</span><br>
Vieira al curry rojo y mango<br>
<span class="color01">Delicia de codorniz al vermut</span><br>
Ravioli crujiente de huevo y bacon<br>
<span class="color01">Brocheta de pulpo con vinagreta o a la plancha con aceite de pimentón (según temporada)</span><br>
</p>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<p class="text-center">
<strong>Bebidas incluidas en el cóctel</strong><br>
Agua mineral, refrescos, cervezas<br>
Vino blanco y vino tinto de la Mancha
</p>
</div>

    </div>

    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    	<h2 class="text-center">Mesa de Cava</h2>
    	<p class="text-center">Cava de bienvenida con
bodegón de frutas de temporada</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    	<h2 class="text-center">Rincón del Aceite de Oliva</h2>
    	<p class="text-center">Selección de aceites de oliva y panes</p>
    </div>
    
	</div>
    
    <h2 class="text-center">Primer plato</h2>
    
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p>
Crema de calabaza
<br>
<span class="color01">Crema de puerro, bacalao confitado y aceituna negra crujiente</span>
<br>
Gazpacho Cardenal o Salmorejo Cardenal
<br>
<span class="color01">Bacalao con crema de puerros y cebolla crujiente</span>
<br>
Rodaballo, crema de pimientos asados y refrito de ajetes con vinagre de sidra
<br>
<span class="color01">Merluza, bisqué de mariscos y salsa holandesa</span>
<br>
Merluza, risotto de albahaca y glaseado de curry verde
<br>
<span class="color01">Lubina al vapor con verduritas asadas y aceite de trufa</span>
<br>
Micuit de foie caramelizado, crumble especiado y compota de frutas
<br>
</p>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p> * Mariscada el Cardenal (4 gambas, 3 langostinos, 1 cigala y 1 nécora o 8 gambas, 4 langostinos y 1 cigala) 
<br>
<span class="color01">* Ensalada de bogavante y fresas con su vinagreta</span>
<br>
<strong>* Consultar el suplemento</strong>
</p>
    </div>
    </div>
    
    <h2 class="text-center">Sorbete</h2>
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <p class="text-center">
Sorbete de mojito
<br>
<span class="color01">Sorbete de limón al cava</span>
<br>
Sorbete de mandarina
</p>
    </div>
    
    </div>
    
    <h2 class="text-center">Plato principal</h2>
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p>
Cordero asado en nuestro horno de leña con patatas doradas
<br>
<span class="color01">Cochinillo asado en nuestro horno de leña con patatas doradas</span>
<br>
Cochicordy (mixto de asado de cordero y cochinillo) con patatas doradas
</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p>
Solomillo de ternera con foie y salsa de: trufa, frutos del bosque o Idiazábal
<br>
<span class="color01">Lomo de ciervo marinado y salsa de mostaza</span>

</p>
</div>
</div>
<h2 class="text-center">Tarta nupcial (para corte)</h2>
<hr class="hr-30">
<h2 class="text-center">Postre</h2>
<hr class="hr-30">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p class="text-center">
Crujiente de avellanas
<br>
<span class="color01">Tarta de queso con coulis de fresas</span>
<br>
Mini Red Velvet
<br>
<span class="color01">Ponche toledano</span>
<br>
Tarta selva negra
<br>
<span class="color01">Bizcocho de zanahoria con crema de queso</span>
<br>
<span class="color01">***</span>
<br>
Café e Infusiones con dulces Toledanos
</p>
</div>
</div>
    
    <h2 class="text-center">Vinos Blancos</h2>
    
    <hr class="hr-30">
    <div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    		<p class="text-center">
Marqués de Riscal Verdejo (D.O. Rueda)
<br>
<span class="color01">Añil Macabeo (D.O. Mancha)</span>
<br>
Viñas del Vero Chardonnay (D.O. Somontano)
<br>
<span class="color01">Cune Verdejo (D.O.Rueda)</span>
			</p>
    	</div>
    </div>
    
    <h2 class="text-center">Vinos Tintos</h2>
    
    <hr class="hr-30">
    <div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    		<p class="text-center">
Marqués de Murrieta (D.O.C. Rioja)
<br>
<span class="color01">Cune Roble (D.O. Ribera del Duero)</span>
<br>
Cune Crianza (D.O.C. Rioja)
<br>
<span class="color01">Oh de Romaila (V. Tierra Castilla)</span>
<br>
La Planta (D.O. Ribera del Duero)
<br><br>
<strong>El jefe de cocina podrá hacer variaciones en esta carta a lo largo del año</strong>
			</p>
    	</div>
    </div>
    </div>
    </div>
    
    
    <div role="tabpanel" class="tab-pane fade" id="infantil">
    
     <div class="container f-menus">
    <h2 class="text-center">Servicios incluidos</h2>
    
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <p class="text-center">
    Cóctel de bienvenida y minutos de cortesía<br>
    <span class="color01">Mesa de cavas y rincón de aceites</span><br>
Menú compuesto por: Entrante, Sorbete, Plato principal y Postre<br>
<span class="color01">Gestión y coordinación personalizada del evento</span><br>
Confección de menús para dietas especiales<br>
<span class="color01">Tarta nupcial de fondant o desnuda</span><br>
Elección de mantelería y bajo plato<br>
<span class="color01">Centros de mesa</span><br>
Iluminación con velas y decoración de espacios comunes<br>
<span class="color01">Impresión de minutas y cuadro de mesas</span><br>
Habitación superior para la noche de bodas<br>
<span class="color01">Menú degustación (6 personas)</span><br>
Descuento del 15% en nuestro Hotel<br>
</p>
<hr class="hr-30">
<p>
En función de la temporada, y para garantizar la privacidad en su evento, la Hacienda del Cardenal
considerará el siguiente número de invitados adultos como mínimo de facturación:<br><br>
<strong>Temporada alta</strong><br>
Sábados de Junio y Septiembre - Nº Mínimo adultos 100<br>
<strong>Temporada media</strong><br>
Sábados de Julio y Octubre - Nº Mínimo adultos 90<br>
<strong>Resto del año</strong> - Consultar *
</p>

<hr class="hr-30">
<p class="text-center">Disponemos de servicios adicionales. Solicite nuestro catálogo de complementos gastronómicos
y decorativos a nuestro equipo de eventos.
<br><br>Para ampliar esta información, <strong>rogamos reservéis cita previa</strong>:<br>
<br><strong>HACIENDA DEL CARDENAL, TOLEDO</strong>
<br>Teléfono: <a href="tel:925220862">925 22 08 62</a> Ext. 2 (Restaurante)
<br><a href="mailto:restaurante@haciendadelcardenal.com">restaurante@haciendadelcardenal.com</a>
<br><a href="mailto:eventos@haciendadelcardenal.com">eventos@haciendadelcardenal.com</a>
</p>

    </div>
    
    </div>
    </div>
    
    </div>

     <div role="tabpanel" class="tab-pane fade" id="infantil02">
    
     <div class="container f-menus">
    <h2 class="text-center">Menú Infantil</h2>
    
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p class="text-center">
        Entrantes fríos y calientes<br>
        O Espaguetis Boloñesa o Carbonara<br>
        Fingers de pollo con patatas fritas<br>
        O<br>
        Escalope de ternera con patatas fritas<br>
        Tarta o helado<br>
        Agua mineral y refrescos
      </p>
    </div>
    </div>
    </div>
    
    </div>

    <div role="tabpanel" class="tab-pane fade" id="ceremonia">
    
     <div class="container f-menus">
    <h2 class="text-center">Ceremonia</h2>
    
    <hr class="hr-30">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <p class="text-center">
Espacio para la ceremonia
<br>Montaje de sillas invitados y mesa ceremonial
<br>Asientos reservados personalizados
<br>Coordinadora de ceremonia
<br>Recepción de invitados con agua mineral
<br><br><strong>Decoración:</strong>
<br><br><strong>En el patio Toledano:</strong> Decoración floral en zona altar. Pétalos o velas en la fuente central.
Vasitos decorados en sillas (12ud.).
<br><br><strong>En Cenador (si fuera opción):</strong> Moqueta central con pétalos y decoración.
Adornos florales en zona altar o entrada pasillo nupcial.
<br><br><strong>Precio: CONSULTAR</strong><br>
</p>
<hr class="hr-30">
<p class="text-center">
  <strong>Megafonía en ceremonia:CONSULTAR</strong><br>
Incluye: equipo de sonido, micrófono y técnico.<br>
Los novios aportarán las canciones previamente al técnico.<br><br>
<strong>Oficiante de ceremonia y megafonía:</strong><br>
Incluye: Equipo de sonido, micrófono y técnico.<br>
Oficiante de ceremonia (no oficial) y Guión ceremonial<br>
Reunión para la preparación de la ceremonia
</p>
<hr class="hr-30">
<p class="text-center">
	Otras decoraciones y extras consultar con nuestro equipo de eventos.
<br><br>Para ampliar esta información, <strong>rogamos reservéis cita previa</strong>:<br>
<br><strong>HACIENDA DEL CARDENAL, TOLEDO</strong>
<br>Teléfono: <a href="tel:925220862">925 22 08 62</a> Ext. 2 (Restaurante)
<br><a href="mailto:restaurante@haciendadelcardenal.com">restaurante@haciendadelcardenal.com</a>
<br><a href="mailto:eventos@haciendadelcardenal.com">eventos@haciendadelcardenal.com</a>
</p>

    </div>
    
    </div>
    </div>
    
    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="info2">
    
     <div class="container f-menus">
      <h2 class="text-center">Confirmación y reserva</h2>
      <hr class="hr-30">
      <p class="text-center">La confirmación de la fecha se hará mediante la firma del contrato de bodas y la entrega de un
<strong>depósito de 2.700 euros (a descontar de la factura final)</strong>.<br><br>
La liquidación del evento se realizará al días siguiente del evento.</p>
<p class="text-center"><strong>El IVA aplicable a los precios, será el vigente en la fecha de la celebración.</strong></p>
<hr class="hr-30">
  <h2 class="text-center">Ceremonia civil</h2>
  <p class="text-center"><strong>Ceremonia en el patio toledano: 200€ + 21% IVA</strong><br>
Incluye: espacio, montaje de sillas y altar con atril.<br><br>
<strong>Decoración de la ceremonia: 100€ + 21% IVA</strong><br>
Incluye: centro del altar, pétalos y velas o flores en la fuente central<br><br>
<strong>Megafonía en ceremonia: 100€ + 21% IVA</strong><br>
Incluye: equipo de sonido, micrófono y técnico.<br>
Los novios aportarán las canciones debidamente descargadas</p>
  <hr class="hr-30">
  <h2 class="text-center">Baile y barra libre</h2>
    <p class="text-center">Baile y Barra libre: Consultar / 3 horas por adulto<br>
<strong>Dj y equipo de música en barra libre: CONSULTAR</strong><br>
Hora adicional: 8€ + 10% IVA / persona (mínimo a facturar 50 personas).<br>
Horario máximo de barra libre en cena: 03:30h</p>
    <hr class="hr-30">
    <h2 class="text-center">Algunos servicios adicionales:</h2>
    <p class="text-center">

<span class="color01">Pantalla y proyector: 100€ + 21% IVA</span>
<br>
Mesa de quesos con frutos secos y mermeladas: 300€ + 10% IVA
<br>
<span class="color01">Jamón Ibérico con cortador: 500€ + 10% IVA</span>
<br>
Show cooking de huevos de codorniz con pisto manchego: 350€ + 10% IVA
<br>
<span class="color01">Corner de cervezas: 250€+ 10% IVA</span>
<br>
Candy bar: 130€ + 10% IVA
<br>
<span class="color01">Rincón de limonada, horchata y agua mineral: 150€ + 10% IVA</span>
<br>
Recena: 4€/persona + 10% IVA
<br>
Incluye: saladitos, taquitos de tortilla de patata y brochetas de fruta natural
<br><br>
<strong>*El IVA aplicable a los precios, será el vigente en la fecha de la celebración.</strong>
<br><br>
<strong>Disponemos de servicios adicionales. Solicite nuestro catálogo de complementos gastronómicos
y decorativos a nuestro equipo de eventos.</strong>
</p>
<hr class="hr-30">
<p class="text-center">Para ampliar esta información, os rogamos reservéis cita previa:<br>
Teléfono: <a href="phone:925220862">925 22 08 62</a> Ext. 2 (Restaurante)<br>
<a href="mailto:restaurante@haciendadelcardenal.com">restaurante@haciendadelcardenal.com</a><br>
<a href="mailto:eventos@haciendadelcardenal.com">eventos@haciendadelcardenal.com</a>

</p>
<hr class="hr-30">
    
    

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
    <a href="images/galeria-bodas/big/Patio-HdC-pano.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Patio-HdC-pano.jpg">
    </a>
  </div>

  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Mesero-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Mesero-HdC.jpg">
    </a>
  </div>

  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Jamon-Iberico-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Jamon-Iberico-HdC.jpg">
    </a>
  </div>

  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Entrada-rincon-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Entrada-rincon-HdC.jpg">
    </a>
  </div>

  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Corner-Beauty-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Corner-Beauty-HdC.jpg">
    </a>
  </div>
    
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/bodas-hdc-05.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/bodas-hdc-11.png">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/bodas-hdc-08.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/bodas-hdc-09.png">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/bodas-hdc-09.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/bodas-hdc-08.png">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/bodas-hdc-02.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/bodas-hdc-02.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Bici-boda-decoracion-chill-out.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Bici-boda-decoracion-chill-out.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Bodegon-flores-HdC-bodas2.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Bodegon-flores-HdC-bodas2.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Bouquet-bodas-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Bouquet-bodas-HdC.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Fuente-Patio-HdC-boda.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Fuente-Patio-HdC-boda.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Mesero-escalera-HdC-bodas.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Mesero-escalera-HdC-bodas.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Saquitos-arroz-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Saquitos-arroz-HdC.jpg">
    </a>
  </div>
  
  <div class="col-xs-6 col-md-3">
    <a href="images/galeria-bodas/big/Sombreros-boda-HdC.jpg" data-lightbox="Hacienda del Cardenal" data-title="Bodas en la Hacienda del Cardenal" class="thumbnail">
      <img src="images/galeria-bodas/Sombreros-boda-HdC.jpg">
    </a>
  </div>
  
    </div>
    
    </div>
    
    
    
    <div class="jumbotron bg-grey"><a id="reservas"></a>
    <h1 class="text-center color01">Solicitar Información</h1>
    <img src="images/separador.png" class="img-responsive center-block" alt="...">
    <p class="text-center">Pídenos información sin compromiso, muchas gracias. <strong>Los campos marcados con (*) son obligatorios.</strong></p><br>
    <div class="container">
<div id="weddingResponse" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"></div>
        <form action="contact_me.php" method="post" id="eventWeddingForm">
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
    <label for="event">Horario *</label>
    <select class="form-control" id="event"  name="event">
  <option>Comida</option>
  <option>Cena</option>
    </select>
  	</div>
     <div class="form-group">
    <label for="commensal">Nº Invitados *</label>
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
      <button type="submit" class="btn btn-default center-block" name="submitWeddingForm" value="eventWeddingForm">ENVIAR</button>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
    
    
    <!-- Validate form -->
    <script type="text/javascript" src="/js/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- mis scripts -->
    
    <script src="js/scripts.js"></script>
    <script src="js/scripts2.js" type='text/javascript'></script>

    <script src="dist/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="dist/bootstrap-datepicker/locales/bootstrap-datepicker.en-GB.min.js" charset="UTF-8"></script>
    <script src="dist/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>
    
     
    
  <script type="text/javascript">
	// jQuery
$(document).ready(function(){ 
   $('#alternar-respuesta-ej1').on('click',function(){
      $('#respuesta-ej1').toggle('fast');
   });
});
</script>



<script type="text/javascript">

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 

</script>

<script src="js/lightslider.js" type="text/javascript"></script> 
    <script type="text/javascript">
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:5,
                slideMargin: 0,
                speed:400,
                auto:false,
                loop:true,
				vThumbWidth:100,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>
    
    <script src="dist/js/lightbox.js"></script>
    
	


</body>
</html>