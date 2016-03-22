<?php
include '../global.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php foreach ($servicios as $i => $serv) { ?>
    <?php if (($i + 1) % 3 == 0) { ?>
        <div class="row margin-bottom-30">
    <?php } ?>

    <div class="col-md-4">
        <div class="page-box--block">
            <!--<a class="page-box__picture" href="general.php">
                <img src="images/61-360x240.jpg" srcset="images/61-360x240.jpg 360w, images/61.jpg 840w"
                     sizes="(min-width: 992px) 360px, calc(100vw - 30px)" class="wp-post-image"
                     alt="Construction Consultant" height="240" width="360">
            </a>-->

            <div class="page-box__content">
                <h4 class="page-box__title">
                    <a href="servicios.php?p=<?php echo $serv['id']; ?>"><?php echo $serv['nombre']; ?></a>
                </h4>

                <p class="page-box__text">
                    <?php echo $serv['texto']; ?>
                </p>
                <a href="servicios.php?p=<?php echo $serv['id']; ?>"
                   class="page-box__more-link">Leer m&aacute;s ...</a>
            </div>
        </div>
    </div>
    <!-- /.col -->

    <?php if (($i + 1) % 3 == 0) { ?>
        </div>
    <?php } ?>
    <!-- /.row -->
<?php } ?>

</body>
</html>