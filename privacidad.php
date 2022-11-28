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
        <h1 class="text-center">Política privacidad</h1>
    		<div class="row">
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            		
																<h3><strong>CONDICIONES GENERALES DE USO</strong></h3>
<p>&nbsp;</p>
<p>El presente aviso legal establece las condiciones de uso que regulan el acceso y uso&nbsp; del sitio http://www.restaurantedelcardenal.es/ (en adelante, el sitio o sitio web) titularidad de RESTAURANTE DEL CARDENAL, quienes ponen el sitio web a disposición de los usuarios de Internet, con el fin de proporcionar información sobre los productos y servicios de la empresa, así como permitir la prestación de distintos servicios a través del Portal.</p>
<p>&nbsp;</p>
<p>A los efectos anteriores, se informa a continuación, los datos identificativos y de contacto del prestador de servicios:</p>
<p>&nbsp;</p>
<p><a href="http://www.restaurantedelcardenal.es/">http://www.restaurantedelcardenal.es/</a></p>
<p>Paseo de Recaredo, 24</p>
<p>45004 Toledo. España<br>
C.I.F.&nbsp;A28154326</p>
<p><a href="mailto:reservas@restaurantedelcardenal.es">reservas@restaurantedelcardenal.es</a></p>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL le da la bienvenida y le invita a leer atentamente las Condiciones Generales de Uso de este Sito Web(en adelante, las “Condiciones Generales de Uso”) que describen los términos y condiciones que serán aplicables a su navegación por el mismo, de conformidad con lo establecido en la normativa española de aplicación. Dado que RESTAURANTE DEL CARDENAL podría modificar en el futuro estas Condiciones de Uso, le recomendamos que las visite periódicamente para estar debidamente informado de los cambios realizados.</p>
<p>&nbsp;</p>
<p>Con el ánimo de que el uso del Sitio Web se ajuste a criterios de transparencia, claridad y sencillez, RESTAURANTE DEL CARDENAL informa al Usuario que cualquier sugerencia, duda o consulta sobre las Condiciones Generales de Uso será recibida y solucionada contactando con RESTAURANTE DEL CARDENAL en la dirección de correo electrónico.</p>
<p>&nbsp;</p>
<ol>
<li>
<h3><strong> Objeto</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL suministra el contenido y los servicios que están disponibles en el Sitio Web, con sujeción a las presentes Condiciones Generales de Uso así como a la política sobre tratamiento de datos personales (en adelante, la “Política de Protección de Datos”). El acceso a este Sitio Web o su utilización en cualquier forma le otorga la calificación de “Usuario” e implica la aceptación sin reservas de todas y cada una de las presentes Condiciones Generales de Uso, reservándose RESTAURANTE DEL CARDENAL el derecho a modificarlos en cualquier momento. En consecuencia, será responsabilidad de todo Usuario, la atenta lectura de las Condiciones Generales de Uso vigente en cada una de las ocasiones en que acceda a este Sitio Web, por lo que si éste no está de acuerdo con cualquiera de los mismos aquí dispuestos, deberá abstenerse respecto al uso del presente Sitio Web.</p>
<p>&nbsp;</p>
<p>Asimismo, queda advertido de que, en ocasiones, se podrán establecer condiciones particulares para la utilización en el Sitio Web de contenidos y/o servicios específicos, la utilización de dichos contenidos o servicios implicará la aceptación de las condiciones particulares en ellos especificadas.</p>
<p>&nbsp;</p>
<ol start="2">
<li>
<h3><strong> Servicios</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>A través&nbsp; del Sitio&nbsp; Web, RESTAURANTE DEL CARDENAL ofrece a los Usuarios la posibilidad de acceder a información sobre los productos y servicios de la empresa, así como permitir la prestación de distintos servicios a través del Portal (en adelante los servicios).</p>
<p>&nbsp;</p>
<ol start="3">
<li>
<h3><strong> Privacidad y Tratamiento de Datos</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>Cuando&nbsp;&nbsp; para el acceso a determinados contenidos o servicios sea necesario facilitar datos de carácter personal, los Usuarios garantizarán su veracidad, exactitud, autenticidad y vigencia. RESTAURANTE DEL CARDENAL dará a dichos datos el tratamiento automatizado que corresponda en función de su naturaleza o finalidad, en los términos indicados en la sección de Política de Protección de Datos [Política de Privacidad].</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ol start="4">
<li>
<h3><strong> Propiedad Industrial e Intelectual</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>El usuario reconoce y acepta que todos los contenidos que se muestran en el Sitio Web y en especial, diseños, textos, imágenes, logos, iconos, botones, software, nombres comerciales, marcas, o cualesquiera otros signos susceptibles de utilización&nbsp; industrial y/o comercial están sujetos a derechos de Propiedad Intelectual y todas&nbsp;las marcas, nombres comerciales o signos distintivos, todos los derechos de propiedad industrial e intelectual, sobre los contenidos y/o cualesquiera otros elementos&nbsp; insertados en el página, que son propiedad exclusiva de RESTAURANTE DEL CARDENAL y/o de terceros, quienes tienen el derecho exclusivo de utilizarlos en el tráfico económico. Por todo ello el usuario se compromete a no reproducir, copiar, distribuir, poner a disposición o de cualquier otra forma comunicar públicamente, transformar o modificar tales contenidos manteniendo indemne a RESTAURANTE DEL CARDENAL de cualquier reclamación que se derive del incumplimiento de tales obligaciones. En ningún caso el acceso al Sitio Web implica ningún tipo de renuncia, transmisión, licencia o cesión total ni parcial de dichos derechos, salvo que se establezca expresamente lo contrario. Las presentes Condiciones Generales de Uso del Sitio Web no confieren a los Usuarios ningún otro derecho de utilización, alteración, explotación, reproducción, distribución o comunicación pública del Sitio Web y/o de sus Contenidos distintos de los aquí expresamente previstos.</p>
<p>&nbsp;</p>
<p>Cualquier otro uso o explotación de cualesquiera derechos estará sujeto a la previa y expresa autorización específicamente otorgada a tal efecto por RESTAURANTE DEL CARDENAL el tercero titular de los derechos afectados. Los contenidos, textos, fotografías, diseños, logotipos, imágenes, programas de ordenador, códigos fuente y, en general, cualquier creación intelectual existente en este sitio, así como el propio sitio en su conjunto, como obra artística multimedia, están protegidos como derechos de autor por la legislación en materia de propiedad intelectual. RESTAURANTE DEL CARDENAL es titular de los elementos que integran el diseño gráfico del Sitio Web, los menús, botones de navegación, el código HTML, los textos, imágenes, texturas , gráficos y cualquier otro contenido del Sitio Web o, en cualquier caso dispone de la correspondiente autorización para la utilización de dichos elementos.</p>
<p>&nbsp;</p>
<p>El contenido dispuesto en el Sitio Web no podrá ser reproducido ni en todo ni en parte, ni transmitido, ni registrado por ningún sistema de recuperación de información, en ninguna forma ni en ningún medio, a menos que se cuente con la&nbsp; autorización previa, por escrito, de la citada Entidad.</p>
<p>Asimismo queda prohibido suprimir, eludir y/o manipular el “copyright” así como los dispositivos técnicos de protección, o cualesquiera&nbsp; mecanismos de información que pudieren contener los contenidos. El Usuario de este Sitio Web se compromete a respetar los derechos enunciados y a evitar cualquier actuación que pudiera&nbsp;perjudicarlos, reservándose en todo caso RESTAURANTE DEL CARDENAL el ejercicio de cuantos medios o acciones legales le correspondan en defensa de sus legítimos derechos de propiedad intelectual e industrial.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ol start="5">
<li>
<h3><strong> Obligaciones y Responsabilidades del Usuario del Sitio Web</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>El Usuario se compromete a:</p>
<p>&nbsp;</p>
<p>a) Hacer un uso adecuado y lícito del Sitio Web así como de los contenidos y servicios, de conformidad con:</p>
<p>(i) la legislación aplicable en cada momento; (ii) las Condiciones&nbsp;&nbsp; Generales de Uso del Sitio Web; (iii) la moral y buenas&nbsp;&nbsp; costumbres generalmente aceptadas y(iv) el orden público.</p>
<p>b) Proveerse de todos los medios y requerimientos técnicos que se precisen para acceder al Sitio Web.</p>
<p>c) Facilitar información veraz al cumplimentar con sus datos de carácter personal los formularios contenidos&nbsp;en el Sitio Web y a mantenerlos actualizados en todo momento de forma que responda, en cada momento, a la &nbsp;situación real del Usuario. El Usuario será el único responsable de las manifestaciones falsas o inexactas que realice y de los perjuicios que cause a RESTAURANTE DEL CARDENAL o a terceros por la información que facilite.</p>
<p>&nbsp;</p>
<p>No obstante lo establecido en el apartado anterior el Usuario deberá asimismo abstenerse de:</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>a) Hacer un uso no autorizado o fraudulento del Sitio Web y/o de los contenidos con fines o efectos ilícitos, prohibidos en las presentes Condiciones Generales de Uso, lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilización de los&nbsp;servicios o los documentos, archivos y toda clase de contenidos almacenados en cualquier equipo informático.</p>
<p>b) Acceder o intentar acceder a recursos o áreas restringidas del Sitio Web, sin cumplir las condiciones exigidas para dicho acceso.</p>
<p>c) Provocar daños en los sistemas físicos o lógicos del Sitio Web, de sus proveedores o de terceros.</p>
<p>d) Introducir o difundir en la red virus informáticos o cualesquiera otros sistemas físicos o lógicos que sean&nbsp;susceptibles de provocar daños en los sistemas físicos o lógicos de RESTAURANTE DEL CARDENAL, de sus&nbsp;proveedores o de terceros.</p>
<p>e) Intentar acceder, utilizar y/o manipular los datos de restaurantedelcardenal.es, terceros proveedores y otros Usuarios.</p>
<p>f) Reproducir o copiar, distribuir, permitir el acceso del público a través de cualquier modalidad de comunicación pública, transformar o modificar los contenidos, a menos que se cuente con la autorización del&nbsp;titular de los correspondientes derechos o ello resulte legalmente permitido.</p>
<p>g) Suprimir, ocultar o manipular las notas sobre derechos de propiedad intelectual o industrial y demás datos&nbsp;identificativos de los derechos de RESTAURANTE DEL CARDENAL o de terceros incorporados a los contenidos, así como los dispositivos técnicos de protección o cualesquiera mecanismos de información que puedan insertarse en los contenidos.</p>
<p>h) Obtener e intentar obtener los contenidos empleando para ello medios o procedimientos distintos de los que, según los casos, se hayan puesto a su disposición a este efecto o se hayan indicado expresamente en las&nbsp;páginas web donde se encuentren los contenidos o, en general, de los que&nbsp; se empleen habitualmente en Internet por no entrañar un riesgo de daño o inutilización del sitio web y/o de los contenidos.</p>
<p>i) En particular, y a título meramente indicativo y no exhaustivo, el Usuario se compromete a no transmitir,difundir o poner a disposición de terceros informaciones, datos, contenidos, mensajes, gráficos, dibujos, archivos de sonido y/o imagen, fotografías, grabaciones, software y, en general, cualquier clase de material que:</p>
<p>&nbsp;</p>
<ul>
<li>De cualquier forma sea contrario, menosprecie o atente contra los derechos fundamentales y las libertades públicas reconocidas constitucionalmente, en los Tratados Internacionales y en el resto de la legislación vigente.</li>
<li>Induzca, incite o promueva actuaciones delictivas, denigratorias, difamatorias, violentas o, en general, contrarias a la ley, a la moral, a las buenas costumbres generalmente aceptadas o al orden público.</li>
<li>Induzca, incite o promueva actuaciones, actitudes o pensamientos discriminatorios por razón de sexo, raza,&nbsp;religión,&nbsp; creencias, edad o condición.</li>
</ul>
<ul>
<li>Incorpore, ponga a disposición o permita acceder a productos, elementos, mensajes y/o servicios delictivos,&nbsp;violentos, ofensivos, nocivos, degradantes o, en general, contrarios a la ley, a la moral y a las buenas costumbres generalmente aceptadas&nbsp;&nbsp;&nbsp;&nbsp; o al orden público.</li>
</ul>
<ul>
<li>Induzca o pueda inducir a un estado inaceptable de ansiedad o temor.</li>
<li>Induzca o incite a involucrarse en prácticas peligrosas, de riesgo o nocivas para la salud y el equilibrio psíquico.</li>
<li>Se encuentra protegido por la legislación en materia de protección intelectual o industrial perteneciente a RESTAURANTE DEL CARDENAL o a terceros sin que haya sido autorizado el uso que se pretenda realizar.</li>
<li>Sea contrario al honor, a la intimidad personal y familiar o a la propia imagen de las personas.</li>
<li>Constituya cualquier tipo de publicidad.</li>
<li>Incluya cualquier tipo de virus o programa que impida el normal funcionamiento del Sitio&nbsp; Web.</li>
</ul>
<p>&nbsp;</p>
<p>Si para acceder a algunos de los servicios y/o&nbsp; contenidos del Sitio Web, se le proporcionara una contraseña, se obliga a usarla&nbsp;&nbsp; de manera diligente, manteniéndola en todo momento en secreto. En consecuencia, será&nbsp;responsable de su adecuada custodia y confidencialidad, comprometiéndose a no cederla a terceros, de manera temporal&nbsp; o permanente, ni a permitir el acceso a los mencionados servicios y/o contenidos por parte&nbsp;de personas ajenas. Igualmente, se obliga a notificar a RESTAURANTE DEL CARDENAL cualquier hecho que pueda suponer un uso indebido de su contraseña, como a título enunciativo, su robo, extravío o el acceso no autorizado, con el fin de proceder a su inmediata cancelación. En consecuencia, mientras no efectúe la notificación anterior, RESTAURANTE DEL CARDENAL quedará eximido de cualquier responsabilidad que pudiera derivarse del uso indebido de su contraseña, siendo de su responsabilidad cualquier utilización ilícita de los contenidos y/o servicios del Sitio Web por cualquier tercero ilegítimo. Si de manera negligente o dolosa incumpliera cualquiera de las obligaciones establecidas en las presentes Condiciones Generales de Uso, responderá por todos los daños y perjuicios que de dicho incumplimiento pudieran derivarse para restaurantedelcardenal.es</p>
<p><strong>&nbsp;</strong></p>
<ol start="6">
<li>
<h3><strong> Responsabilidades</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL no garantiza el acceso continuado, ni la correcta visualización, descarga o utilidad de los elementos e informaciones contenidas en las páginas restaurantedelcardenal.es, impedidos, dificultados o interrumpidos por factores o circunstancias que están fuera de su control.</p>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL no se hace responsable de las decisiones que pudieran adoptarse como consecuencia del acceso a los contenidos o informaciones ofrecidas.</p>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL podrá interrumpir el servicio o resolver de modo inmediato la relación con el Usuario si detecta que un uso de su Sitio Web o de cualquiera de los servicios ofertados en el mismo es&nbsp;contrario a las presentes Condiciones Generales de Uso.</p>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL no se hace responsable por daños, perjuicios, pérdidas, reclamaciones o gastos derivados del uso del Sitio Web. Únicamente será responsable de eliminar, lo antes posible, los contenidos que puedan generar tales perjuicios, siempre que así se notifique. En especial no será responsable de los perjuicios que se pudieran derivar, entre otros de:</p>
<p>&nbsp;</p>
<p>a) interferencias, interrupciones, fallos, omisiones, averías telefónicas, retrasos, bloqueos o desconexiones en&nbsp;el funcionamiento del sistema electrónico, motivadas por deficiencias, sobrecargas y errores en las líneas y redes de telecomunicaciones, o por cualquier otra causa ajena al control de restaurantedelcardenal.es.</p>
<p>b) intromisiones ilegítimas mediante el uso de programas malignos de cualquier tipo y a través de cualquier&nbsp;medio de comunicación, tales como virus informáticos o cualesquiera otros.</p>
<p>c) abuso indebido o inadecuado del Sitio Web.</p>
<p>d) errores de seguridad o navegación producidos por un mal funcionamiento del navegador o por el uso de&nbsp;versiones no actualizadas del mismo. Los administradores de RESTAURANTE DEL CARDENAL se reservan el derecho de retirar, total o parcialmente, cualquier contenido o información presente en el Sitio Web.</p>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL excluye cualquier responsabilidad por los daños y perjuicios de toda naturaleza que pudieran deberse a la mala utilización de los servicios de libre disposición y uso por parte de los Usuarios de Sitio Web. Asimismo, RESTAURANTE DEL CARDENAL queda exonerado de cualquier responsabilidad por el contenido e informaciones que puedan ser recibidas como consecuencia de los formularios de recogida de datos, estando los mismos únicamente para la prestación de los servicios de consultas y dudas.</p>
<p>Por otro lado, en caso de causar daños y perjuicios por un uso ilícito o incorrecto de dichos servicios, podrá ser el Usuario reclamado por RESTAURANTE DEL CARDENAL de los daños o perjuicios causados.</p>
<p>Usted defenderá, indemnizará y mantendrá a RESTAURANTE DEL CARDENAL indemne frente a cualesquiera daños y perjuicios que se deriven de reclamaciones, acciones o demandas de terceros como consecuencia de su acceso o uso del Sitio Web. Asimismo, usted se obliga a indemnizar RESTAURANTE DEL CARDENAL frente a cualesquiera daños y perjuicios, que se deriven del uso por su parte de “robots”, “spiders”, “crawlers” o herramientas similares empleadas con el fin de recabar o extraer datos o de cualquier otra actuación por su parte que imponga una carga irrazonable sobre el funcionamiento del Sitio Web.</p>
<p>&nbsp;</p>
<ol start="7">
<li>
<h3><strong> Hipervínculos</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>El Usuario se obliga a no reproducir de ningún modo, ni siquiera mediante un hiperenlace o hipervínculo, el&nbsp;Sitio Web de RESTAURANTE DEL CARDENAL, así como ninguno de sus contenidos, salvo autorización expresa y por escrito de RESTAURANTE DEL CARDENAL.</p>
<p>El Sitio Web de RESTAURANTE DEL CARDENAL incluye enlaces a otros sitios web gestionados por terceros, con objeto de facilitar el acceso del Usuario a la información de empresas colaboradoras y/o patrocinadoras.</p>
<p>Conforme con ello, RESTAURANTE DEL CARDENAL no se responsabiliza del contenido de dichos sitios web, ni se sitúa en una posición de garante ni/o de parte ofertante de los servicios y/o información que se puedan ofrecer a terceros a través de los enlaces de terceros.</p>
<p>&nbsp;</p>
<p>Se concede al Usuario un derecho limitado, revocable y no exclusivo a crear enlaces a la página principal del Sitio Web exclusivamente para uso privado y no comercial. Los sitios web que incluyan enlace a nuestro Sitio Web (i) no podrán dar a entender que RESTAURANTE DEL CARDENAL recomienda ese sitio web o sus servicios o productos; (ii) no podrán falsear su relación con RESTAURANTE DEL CARDENAL ni afirmar que RESTAURANTE DEL CARDENAL ha autorizado tal enlace, ni incluir marcas, denominaciones, nombres comerciales, logotipos u otros signos distintivos de RESTAURANTE DEL CARDENAL; (iii) no podrán incluir contenidos que puedan considerarse de mal gusto, obscenos, ofensivos, controvertidos, que inciten a la violencia o la discriminación por razón de sexo, raza o religión, contrarios al orden público o ilícitos;(iv) no podrán enlazar a ninguna página del Sitio Web distinta de la página principal; (v) deberá enlazar con la propia dirección del Sitio Web, sin permitir que el sitio web que realice el enlace reproduzca el Sitio Web como parte de su web o dentro de uno de sus “frames” o crear un “browser” sobre cualquiera de las páginas del Sitio Web.</p>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL podrá solicitar, en cualquier momento, que elimine cualquier enlace al Sitio Web, después de lo cual deberá proceder de inmediato a su eliminación. RESTAURANTE DEL CARDENAL no puede controlar la información, contenidos, productos o servicios facilitados por otros sitios web que tengan establecidos enlaces con destino al Sitio Web. En consecuencia, RESTAURANTE DEL CARDENAL no asume ningún tipo de responsabilidad por cualquier aspecto.</p>
<p>&nbsp;</p>
<ol start="8">
<li>
<h3><strong> Protección de datos</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>Para utilizar algunos de los&nbsp; Servicios, los Usuarios deben proporcionar previamente ciertos datos de carácter&nbsp;personal. Para ello, RESTAURANTE DEL CARDENAL tratará automatizadamente los Datos Personales en cumplimiento con la Ley 15/1999 de 13 de diciembre de Protección de Datos de Carácter Personal y el RD de desarrollo 1720/2007. Para ello, el Usuario puede acceder a la política seguida en el tratamiento de los datos&nbsp;personales así como el establecimiento de las&nbsp;&nbsp; finalidades previamente establecidas, a lo dispuesto en las condiciones definidas en la Política de Protección de Datos [Política de Privacidad] que presenta Sitio Web.</p>
<p>&nbsp;</p>
<ol start="9">
<li>
<h3><strong> Duración y terminación</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>La prestación del servicio del presente Sitio Web y los demás servicios tienen en principio una duración indefinida. No obstante, RESTAURANTE DEL CARDENAL podrá dar por terminada o suspender cualquiera de los servicios del portal. Cuando sea ello posible, RESTAURANTE DEL CARDENAL anunciará la terminación o suspensión de la prestación del servicio determinado.</p>
<p>&nbsp;</p>
<ol start="10">
<li>
<h3><strong> Declaraciones y Garantías</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>En general, los contenidos y servicios ofrecidos en el Sitio Web tienen carácter meramente informativo. Por consiguiente, al ofrecerlos, RESTAURANTE DEL CARDENAL no otorga garantía ni declaración alguna en relación con los contenidos y servicios ofrecidos en el Sitio web, incluyendo, a título enunciativo, garantías de licitud, fiabilidad, utilidad, veracidad, exactitud, o comerciabilidad, salvo en la medida en que por ley no puedan excluirse tales declaraciones y garantías.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ol start="11">
<li>
<h3><strong> Fuerza mayor</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>RESTAURANTE DEL CARDENAL no será responsable en todo en caso de imposibilidad de prestar servicio, si ésta se debe a interrupciones prolongadas del suministro eléctrico, líneas de telecomunicaciones, conflictos sociales, huelgas, rebelión, explosiones, inundaciones, actos y omisiones del Gobierno, y en general todos los supuestos de fuerza mayor o de caso fortuito.</p>
<p>&nbsp;</p>
<ol start="12">
<li>
<h3><strong> Resolución de controversias. Ley aplicable y jurisdicción</strong></h3>
</li>
</ol>
<p>&nbsp;</p>
<p>Las presentes Condiciones Generales de Uso, así como el uso del Sitio Web, se regirán por la legislación española. Las partes se someten, a su elección, para la resolución de los conflictos y con renuncia a cualquier&nbsp;otro fuero, a los juzgados y tribunales del domicilio del usuario.</p>
<p>&nbsp;</p>
<p>En el supuesto de que cualquier estipulación de las presentes Condiciones Generales de Uso resultara inexigible o nula en virtud de la legislación aplicable o como consecuencia de una resolución judicial o administrativa, dicha inexigibilidad o nulidad no hará que las presentes Condiciones Generales de Uso resulten&nbsp;inexigibles o nulas en su conjunto. En dichos casos, RESTAURANTE DEL CARDENAL procederá a la modificación o sustitución de dicha estipulación por otra que sea válida y exigible y que, en la medida de lo posible, consiga el objetivo y pretensión reflejados en la estipulación original.</p>
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