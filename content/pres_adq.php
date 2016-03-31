<?php
include '../global.php';

$item = null;
foreach ($servicios as $menu_item) {
    if ($menu_item['id'] == 'pres_adq') {
        $item = $menu_item;
        break;
    }
}

include '../util/funciones.php';
if (!is_dir('../fotos/' . $item['id'])) {
    mkdir('../fotos/' . $item['id']);
}
$Galeria = filesFromFolderToArray('../fotos/' . $item['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/custom_content.css"/>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css"/>
    <script src="fancybox/source/jquery.fancybox.js"></script>
</head>
<body>


<div class="row margin-bottom-30">

    <div class="col-md-6">

        <h4><?php echo $item['nombre']; ?></h4>

        <p>
            (Regularización de propiedad por posesión)
        </p>

    </div>
    <div class="col-md-6">
        <p>
            <a data-featherlight="image" href="images/prescripcion-adquisitiva.jpg">
                <img class="alignnone" src="images/prescripcion-adquisitiva.jpg" alt="61" height="420" width="840">
            </a>
        </p>
    </div>

    <div class="col-md-12">
       

        <?php include '../common_content.php'; ?>

    </div>
    <!-- /.col -->

</div>
<!-- /.row -->


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