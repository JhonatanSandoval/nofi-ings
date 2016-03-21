<?php
include "global.php";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NofiIng's S.A.C. :. Home</title>
    <link rel="stylesheet" href="fonts/fonts.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Roboto%3A700%7COpen+Sans%3A400%2C700&#038;subset=latin"
          type="text/css" media="all">
    <link rel="stylesheet" href="css/featherlight.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/styleswitcher.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/custom.css"/>

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
                        <li class="current-menu-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="servicios.php">Servicios</a>
                            <?php include 'menu_header.php'; ?>
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
                    <a class="btn btn-primary boton_amarillo" target="_self" href="contacto.php">SOLICITAR PRESUPUESTO</a>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.header -->

    </header>

    <div class="jumbotron">

        <div class="carousel slide js-jumbotron-slider" id="headerCarousel" data-ride="carousel" data-interval="5000">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="slider/slider2.jpg">

                    <div class="container">
                        <div class="jumbotron-content">
                            <h1 class="jumbotron-content__title">Construcciones de calidad </h1>

                            <div class="jumbotron-content__description">
                                <p>
                                    Creemos que la privacidad y la elegancia van mucho de la mano. Por eso elaboramos las mejores
                                    construcciones de fachadas.
                                </p>

                                <p>
                                    <a class="btn btn-primary boton_amarillo" href="nosotros.php" target="_self">LEER M&Aacute;S</a>
                                    <a class="btn btn-tertiary" href="servicios.php" target="_self">NUESTROS
                                        SERVICIOS</a>
                                </p>
                            </div>
                            <!-- /.jumbotron-content__description -->
                        </div>
                        <!-- /.jumbotron-content -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <img src="slider/slider1.jpg">

                    <div class="container">
                        <div class="jumbotron-content">
                            <h1 class="jumbotron-content__title">Diseño profesional de planos</h1>

                            <div class="jumbotron-content__description">
                                <p>
                                    Prestamos lo mejor en servicios de diseño y elaboración de planos para hogar y edificios.
                                </p>

                            </div>
                            <!-- /.jumbotron-content__description -->
                        </div>
                        <!-- /.jumbotron-content -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <img src="slider/slider5.jpg">

                    <div class="container">
                        <div class="jumbotron-content">
                            <h1 class="jumbotron-content__title">¿Necesitas asesoría profesional?</h1>

                            <div class="jumbotron-content__description">
                                <p>
                                    Estamos para servirte: tenemos profesionales altamente calificados que te ayudarán en el proyecto
                                     que necesites.
                                </p>
                            </div>
                            <!-- /.jumbotron-content__description -->
                        </div>
                        <!-- /.jumbotron-content -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.carousel-item -->

            </div>
            <!-- /.carousel-inner -->

            <div class="jumbotron__extras">

                <div class="container">

                    <a class="left jumbotron__control" href="#headerCarousel" role="button" data-slide="prev">
                        <i class="fa fa-caret-left"></i>
                    </a>
                    <a class="right jumbotron__control" href="#headerCarousel" role="button" data-slide="next">
                        <i class="fa fa-caret-right"></i>
                    </a>

                    <div class="jumbotron__widgets hidden-md-down pull-right">

                        <div class="widget">
                            <div class="icon-box">
                                <i class="fa fa-phone"></i>

                                <div class="icon-box__text">
                                    <h4 class="icon-box__title">Teléfono contacto:</h4>
                                    <span class="icon-box__subtitle">(01) 287 - 2535 <br/> 993 120 467</span>
                                </div>
                            </div>
                            <!-- /.icon-box -->
                        </div>

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
                            <a class="social-icons__link" href="<?php echo FB_URL; ?>" target="_blank"><i
                                    class="fa fa-facebook-square"></i></a>
                            <a class="social-icons__link" href="https://twitter.com/" target="_blank"><i
                                    class="fa fa-twitter-square"></i></a>
                            <a class="social-icons__link" href="https://www.youtube.com/"
                               target="_blank"><i class="fa fa-youtube-square"></i></a>
                        </div>

                    </div>
                    <!-- /.jumbotron__widgets -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /.jumbotron__extras -->

        </div>
        <!-- /.carousel -->

    </div>
    <!-- /.jumbotron -->


    <?php include 'footer.php'; ?>


</div>
<!-- /.boxed-container -->

<script src="js/jquery.js"></script>
<script src="js/modernizr.custom.24530.js"></script>
<script src="js/picturefill.min.js"></script>
<script src="js/underscore.min.js?ver=1.6.0"></script>
<script src="js/featherlight.js"></script>
<script src="js/main.min.js?ver=1.1.0-3-g4c75ad2"></script>
<script src="js/styleswitcher.js"></script>

</body>
</html>