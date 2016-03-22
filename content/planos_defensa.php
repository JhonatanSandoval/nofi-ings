<?php
include '../global.php';

$item = null;
foreach ($servicios as $menu_item) {
    if ($menu_item['id'] == 'planos_defensa') {
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
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el
            texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se
            dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un
            libro de textos especimen.
        </p>

    </div>
    <div class="col-md-6">
        <p>
            <a data-featherlight="image" href="images/61.jpg">
                <img class="alignnone" src="images/61.jpg" alt="61" height="420" width="840">
            </a>
        </p>
    </div>

    <div class="col-md-12">
        <p>
            No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en
            documentos electrónicos, quedando esencialmente igual al original.

            <br/><br/>

            Fue popularizado en los 60s con la
            creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con
            software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.

            <br/><br/>
            Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un
            sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos
            normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos
            textos hacen parecerlo un español que se puede leer.
        </p>

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