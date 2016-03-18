<?php


?>
<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NofiIng's S.A.C. :. Home</title>
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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
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
                                <span class="icon-box__subtitle">(01) 287 - 2535</span>
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
                        <a class="social-icons__link" href="https://www.facebook.com/ProteusThemes/" target="_self">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="social-icons__link" href="https://twitter.com/chillyorange" target="_self">
                            <i class="fa fa-twitter-square"></i>
                        </a>
                        <a class="social-icons__link" href="https://www.youtube.com/user/ProteusNetCompany"
                           target="_self">
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
            <h1 class="page-header__title  display-1">Servicios</h1>

            <p class="page-header__subtitle">Que ofrecemos</p>
        </div>
    </div>
    <!-- /.page-header -->


    <div class="container margin-bottom-30">

        <div class="row">

            <main id="main" class="site-main  col-xs-12  col-lg-9  col-lg-push-3" role="main">

                <div class="row margin-bottom-30">

                    <div class="col-md-6">

                        <h4>Contrataci&oacute;n general</h4>

                        <p>
                            Puede visitarnos en nuestro local central, donde lo atenderá personalmente nuestro generente
                            general, el Ing. Wilder Ulises Novoa Figueroa.
                        </p>

                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <p>
                            <a data-featherlight="image" href="images/61.jpg">
                                <img class="alignnone" src="images/61.jpg" alt="61" height="420" width="840">
                            </a>
                        </p>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->

            </main>

            <div class="col-xs-12  col-lg-3  col-lg-pull-9">

                <div class="sidebar widget widget_nav_menu" role="complementary">

                    <ul class="menu">
                        <li>
                            <a href="servicios.php">Todos los Servicios</a>
                        </li>
                        <li>
                            <a href="planos.php">Dise&ntilde;o de Planos</a>
                        </li>
                        <li>
                            <a href="obras.php">Supervisiones de obras</a>
                        </li>
                        <li>
                            <a href="fachadas.php">Construcci&oacute;n de fachadas</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="general.php">Contrataci&oacute;n general</a>
                        </li>
                    </ul>

                </div>
                <!-- /.sidebar -->

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.boxed-container -->


<?php include 'footer.php'; ?>


<script src="js/jquery.js"></script>
<script src="js/modernizr.custom.24530.js"></script>
<script src="js/picturefill.min.js"></script>
<script src="js/underscore.min.js?ver=1.6.0"></script>
<script src="js/featherlight.js"></script>
<script src="js/main.min.js?ver=1.1.0-3-g4c75ad2"></script>
<script src="js/styleswitcher.js"></script>

</body>
</html>