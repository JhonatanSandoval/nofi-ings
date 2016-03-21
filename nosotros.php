<?php
include 'global.php';
// galeria de imagenes de PREMIACION
$prArray = array(
    'premiacion1.jpg',
    'premiacion2.jpg',
    'premiacion3.jpg',
    'premiacion4.jpg',
    'premiacion5.jpg',
    'premiacion6.jpg',
    'premiacion7.jpg',
    'premiacion8.jpg'
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NofiIng's S.A.C. :. Contacto</title>
    <link rel="stylesheet" href="fonts/fonts.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Roboto%3A700%7COpen+Sans%3A400%2C700&#038;subset=latin"
          type="text/css" media="all">
    <link rel="stylesheet" href="css/featherlight.css" type="text/css" media="all">

    <link rel="stylesheet" href="css/styleswitcher.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css"/>

    <link rel="icon" href="images/LOGO_NOFI.ico" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="images/cropped-favicon-180x180.png">

    <meta name="msapplication-TileImage" content="images/cropped-favicon-270x270.png">

</head>

<body class="home">

<div class="boxed-container">

    <header>
        <div class="top">
            <div class="container top__container">
                <div class="top__tagline">

                </div>
            </div>
            <!-- /.top__container -->
        </div>
        <!-- /.top -->

        <div class="header">
            <div class="container">

                <div class="header__logo">
                    <a href="index.php">
                        <img src="images/LOGO_NOFI.jpg" alt="StructurePress" srcset="images/LOGO_NOFI.jpg"
                             class="img-fluid" width="269" height="70">
                    </a>
                </div>

                <button class="btn btn-primary header__navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                        data-target="#structurepress-main-navigation">
                    <i class="fa fa-bars hamburger"></i>
                    <span>MENU</span>
                </button>

                <nav class="header__navigation collapse navbar-toggleable-md" id="structurepress-main-navigation"
                     aria-label="Main Menu">

                    <a class="home-icon" href="index.php">
                        <i class="fa fa-home"></i>
                    </a>

                    <ul class="main-navigation js-main-nav" role="menubar">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="servicios.php">Servicios</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="planos.php">Dise&ntilde;o de planos</a>
                                </li>
                                <li>
                                    <a href="obras.php">Supervisiones de obras</a>
                                </li>
                                <li>
                                    <a href="fachadas.php">Construcci&oacute;n de fachadas</a>
                                </li>
                                <li>
                                    <a href="general.php">Contrataci&oacute;n general</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contacto.php">Contacto</a>
                        </li>
                    </ul>

                </nav>

                <div class="jumbotron__widgets hidden-lg-up">

                    <div class="widget">
                        <div class="icon-box">
                            <i class="fa fa-phone"></i>

                            <div class="icon-box__text">
                                <h4 class="icon-box__title">Teléfono contacto:</h4>
                                <span class="icon-box__subtitle">(01) 287 - 2535 | 993 120 467</span>
                            </div>
                        </div>
                        <!-- /.icon-box -->
                    </div>
                    <!-- /.widget-icon-box -->

                    <div class="widget">
                        <div class="icon-box">
                            <i class="fa fa-clock-o"></i>

                            <div class="icon-box__text">
                                <h4 class="icon-box__title">Horarios de atención:</h4>
                                <span class="icon-box__subtitle">
                                    L-V 9:00am-1:30pm / 3:00pm-7:00pm <br/>
                                    Sáb. 9:00am-1:30pm
                                </span>
                            </div>
                        </div>
                        <!-- /.icon-box -->
                    </div>
                    <!-- /.widget-icon-box -->

                    <div class="widget">
                        <div class="icon-box">
                            <i class="fa fa-envelope-o"></i>

                            <div class="icon-box__text">
                                <h4 class="icon-box__title">Correo electrónico:</h4>
                                <span class="icon-box__subtitle">nofi-ingenieros@hotmail.com</span>
                            </div>
                        </div>
                        <!-- /.icon-box -->
                    </div>

                    <div class="widget">
                        <a class="social-icons__link" href="<?php echo FB_URL; ?>" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="social-icons__link" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter-square"></i>
                        </a>
                        <a class="social-icons__link" href="https://www.youtube.com"
                           target="_blank">
                            <i class="fa fa-youtube-square"></i>
                        </a>
                    </div>

                </div>
                <!-- /.jumbotron__widgets -->

                <div class="header__featured-link">
                    <a class="btn btn-primary boton_amarillo" target="_self" href="contacto.php">SOLICITAR
                        PRESUPUESTO</a>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.header -->

    </header>

    <div class="page-header">
        <div class="container">
            <h1 class="page-header__title  display-1">Nosotros</h1>

            <p class="page-header__subtitle">Qu&eacute; hacemos y qui&eacute;nes somos</p>
        </div>
    </div>
    <!-- /.page-header -->

    <div id="div_video" style="margin: 35px; text-align: center;">
        <iframe width="600" height="340"
                src="https://www.youtube.com/embed/BqPieWYFhzI" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- // galeria de imagenes -->
    <div class="div_galeria">
        <?php foreach ($prArray as $index => $foto) {
            ?>
            <a href="Premiacion/<?php echo $foto; ?>" class="img_gallery" rel="gallery">
                <img src="Premiacion/<?php echo $foto; ?>" style="height: 150px;"/></a>
        <?php } ?>
    </div>

    <!-- // FIN galeria de imagenes -->


    <div class="accordion panel-group" id="accordion-widget" role="tablist" aria-multiselectable="true"
         style="width: 70%; margin: 42px auto;">

        <div class="accordion__panel panel panel-default">
            <div class="accordion__heading panel-heading" role="tab" id="heading-widget-2">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-widget"
                       href="#collapse-widget-3" aria-expanded="false" aria-controls="collapse-widget-3">
                        Historia
                    </a>
                </h4>
            </div>
            <div aria-expanded="false" id="collapse-widget-3" class="accordion__content panel-collapse collapse"
                 role="tabpanel" aria-labelledby="heading-widget-0-0-1-2">
                <div class="panel-body">
                    Llegamos a Villa el Salvador en el año de 1992, procedentes del norte del Perú, y decidimos
                    iniciar nuestra empresa de proyectos, poco a poco hemos ido creciendo conjuntamente con los que
                    confían, ha pasado no menos de 24 años, y a la fecha nos sentimos satisfechos en conseguir que
                    cada cliente nuestro comparta tambien su exito .
                </div>
            </div>
        </div>

        <div class="accordion__panel panel panel-default">
            <div class="accordion__heading panel-heading" role="tab" id="heading-widget-1">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-widget"
                       href="#collapse-widget-1" aria-expanded="false" aria-controls="collapse-widget-1">
                        Misión
                    </a>
                </h4>
            </div>
            <div aria-expanded="false" id="collapse-widget-1" class="accordion__content panel-collapse collapse"
                 role="tabpanel" aria-labelledby="heading-widget-1">
                <div class="panel-body">
                    Colaborar con el desarrollo y el avance del sector ingenieria, a través de nuestros servicios las
                    cuales ofrecemos como son: elaboración de proyecto de planos para vivienda, comercio, industria ,
                    educación, hospedaje, así mismo declaratorias de fabrica e independizacion, sub-división, planos
                    perimetricos, lotizaciones, planos para defensa civil y bomberos, suervisión de obras, etc.
                </div>
            </div>
        </div>

        <div class="accordion__panel panel panel-default">
            <div class="accordion__heading panel-heading" role="tab" id="heading-widget-2">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-widget"
                       href="#collapse-widget-2" aria-expanded="false" aria-controls="collapse-widget-2">
                        Visión
                    </a>
                </h4>
            </div>
            <div aria-expanded="false" id="collapse-widget-2" class="accordion__content panel-collapse collapse"
                 role="tabpanel" aria-labelledby="heading-widget-0-0-1-2">
                <div class="panel-body">
                    Adaptarse a las nuevas necesidades que nuestros clientes necesitan, crecer continuamente en el
                    rubro de la ingenieria y construccion, elaborar expedientes técnicos para licitaciones publicas,
                    supervisiones de obras para el estado, construcciones de megaproyectos, etc.
                </div>
            </div>
        </div>

    </div>
    <!-- /.accordion -->

    <div class="container margin-bottom-60">

        <div class="row margin-bottom-60">

            <div class="col-lg-3">

                <div class="margin-bottom-30 textwidget">
                    <h4>
                        <img class="alignnone" src="images/64-300x150.jpg" alt="64" height="150" width="300"><br>
                        Calidad
                    </h4>

                    <p class="smal">
                        Nuestro objetivo es superar continuamente las expectativas de nuestros clientes para entregar
                        los miembros del equipo construction. Los miembros de nuestro equipo verifican todas las
                        características del
                        trabajo.
                    </p>
                </div>

                <div class="margin-bottom-30 textwidget">
                    <h4>
                        <img class="alignnone" src="images/9-300x150.jpg" alt="9" height="150" width="300"><br>
                        Seguridad
                    </h4>

                    <p class="smal">
                        Planificación de seguridad proactiva nos ayuda a proporcionar un entorno de trabajo seguro para
                        todos los que trabajan en el proyecto, las personas que visitan el sitio de trabajo o trabajar.
                    </p>
                </div>

            </div>
            <!-- /.col -->

            <div class="col-lg-3">

                <div class="margin-bottom-30 textwidget">
                    <h4>
                        <img class="alignnone" src="images/22-300x150.jpg" alt="64" height="150" width="300"><br>
                        Integridad
                    </h4>

                    <p class="smal">
                        Nuestra asociación con nuestros clientes se basa en la confianza mutua y lo hacemos lo mejor
                        para nuestros clientes los siguientes valores y métodos de nuestra empresa.
                    </p>
                </div>

                <div class="margin-bottom-30 textwidget">
                    <h4>
                        <img class="alignnone" src="images/33-300x150.jpg" alt="9" height="150" width="300"><br>
                        Trabajo en equipo
                    </h4>

                    <p class="smal">
                        Para convertirse en un líder de la industria, es importante para nosotros el alentar el
                        trabajo en equipo con el fin de resolver los desafíos de la construcción para lograr
                        resultados.
                    </p>
                </div>

            </div>
            <!-- /.col -->

            <div class="col-lg-6">

                <img src="images/28.jpg" class="so-widget-image margin-bottom-30" height="420" width="840">

                <img src="images/16.jpg" class="so-widget-image margin-bottom-30" height="420" width="840">

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    <?php include 'footer.php'; ?>


</div>
<!-- /.boxed-container -->

<script src="js/jquery.js"></script>
<script src="js/modernizr.custom.24530.js"></script>
<script src="js/picturefill.min.js"></script>
<script src="js/underscore.min.js?ver=1.6.0"></script>
<script src="js/main.min.js?ver=1.1.0-3-g4c75ad2"></script>
<script src="js/styleswitcher.js"></script>
<script src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="fancybox/source/jquery.fancybox.js"></script>
<script>
    jQuery(function () {
        jQuery("a.img_gallery").fancybox({
            cyclic: true,
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'speedIn': 600,
            'speedOut': 200
        });
    });
</script>

</body>
</html>