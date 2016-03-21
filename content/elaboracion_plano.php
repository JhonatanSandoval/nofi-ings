<?php
include '../global.php';

$item = null;
foreach ($servicios as $menu_item) {
    if ($menu_item['id'] == 'elaboracion_plano') {
        $item = $menu_item;
        break;
    }
}

$Galeria = array(
    'planos1.jpg', 'planos2.jpg', 'planos3.jpg', 'planos4.jpg', 'planos5.jpg', 'planos6.jpg'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css"/>
</head>
<body>

<div class="row margin-bottom-30">

    <div class="col-md-6">

        <h4><?php echo $item['nombre'];?></h4>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br/><br/>
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
            passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.
        </p>

        <br/><br/>
        <a class="btn btn-primary boton_amarillo img_gallery" target="_self"
           rel="gallery" href="planos/<?php echo $Galeria[0]; ?>">
            Galería de Imágenes
        </a>

        <div style="display: none;">
            <?php

            array_splice($Galeria, 0, 1);
            for ($x = 0; $x < count($Galeria); $x++) {
                ?>
                <a class="img_gallery" href="planos/<?php echo $Galeria[$x]; ?>"
                   rel="gallery"></a>
                <?php
            }
            ?>
        </div>

    </div>
    <!-- /.col -->

    <div class="col-md-6">

        <p>
            <a data-featherlight="image" href="images/23.jpg">
                <img class="alignnone" src="images/23.jpg" alt="61" height="420" width="840">
            </a>
        </p>

        <p>
            <a data-featherlight="image" href="images/25.jpg">
                <img class="alignnone" src="images/25.jpg" alt="25" height="420" width="840">
            </a>
        </p>

    </div>
    <!-- /.col -->

</div>
<!-- /.row -->

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