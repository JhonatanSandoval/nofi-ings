<?php
include '../global.php';

$item = null;
foreach ($servicios as $menu_item) {
    if ($menu_item['id'] == 'elaboracion_plano') {
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
           Ubicación, distribución, cortes, cimentación, estructuras,
instalaciones eléctricas, instalaciones comunicaciones, instalación sanitarias agua,
instalación sanitarias  desague , instalación gas <natural class="">            </natural>
        </p>

    </div>
    <div class="col-md-6">
        <p>
            <a data-featherlight="image" href="fotos/elaboracion_plano/planos3.jpg">
                <img class="alignnone" src="fotos/elaboracion_plano/planos3.jpg" alt="61" height="420" width="840">
            </a>
        </p>
    </div>

    <div class="col-md-12">
        <!--<p>
            No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en
            documentos electrónicos, quedando esencialmente igual al original.

            <br/><br/>

            Fue popularizado en los 60s con la
            creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con
            software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.

        </p>
-->
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