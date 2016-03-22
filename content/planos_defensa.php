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

        <?php if (count($Galeria) > 0) { ?>
            <br/><br/>
            <a class="btn btn-primary boton_amarillo img_gallery pull-right clearfix" target="_self"
               rel="gallery" href="fotos/<?php echo $item['id']; ?>/<?php echo $Galeria[0]; ?>">
                Galería de Imágenes
            </a>

            <div style="display: none;">
                <?php
                array_splice($Galeria, 0, 1);
                for ($x = 0;
                     $x < count($Galeria);
                     $x++) {
                    ?>
                    <a class="img_gallery" href="fotos/<?php echo $item['id']; ?>/<?php echo $Galeria[$x]; ?>"
                       rel="gallery"></a>
                    <?php
                }
                ?>
            </div>
        <?php } ?>

        <?php if (count($item['subcateg']) > 0) {
            $subcateg = $item['subcateg'];
            ?>
            <div class="subcateg">
                <div class="accordion panel-group" id="accordion-widget" role="tablist" aria-multiselectable="true">
                    <?php foreach ($subcateg as $x => $item_sub) {
                        $Galeria_sub = filesFromFolderToArray('../fotos/' . $item['id'] . '/' . $item_sub['id']);
                        ?>
                        <div class="accordion__panel panel panel-default">
                            <div class="accordion__heading panel-heading" role="tab"
                                 id="heading-widget-<?php echo $x; ?>">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                       data-parent="#accordion-widget" href="#collapse-widget-<?php echo $x; ?>"
                                       aria-expanded="false"
                                       aria-controls="collapse-widget-<?php echo $x; ?>">
                                        <?php echo $item_sub['nombre']; ?>
                                    </a>
                                </h4>
                            </div>
                            <?php if ($item_sub['texto'] != '' || (count($Galeria_sub) > 0)) { ?>
                                <div aria-expanded="false" id="collapse-widget-<?php echo $x; ?>"
                                     class="accordion__content panel-collapse collapse"
                                     role="tabpanel" aria-labelledby="heading-widget-<?php echo $x; ?>">
                                    <div class="panel-body">
                                        <?php echo $item_sub['texto']; ?>
                                        <?php if (count($Galeria_sub) > 0) { ?>
                                            <div class="btn_fotos">
                                                <a href="fotos/<?php echo $item['id']; ?>/<?php echo $item_sub['id']; ?>/<?php echo $Galeria_sub[0]; ?>"
                                                   rel="gallery-<?php echo $x; ?>" class="gallery-<?php echo $x; ?>">
                                                    <button class="btn btn-sm btn-danger">Ver Fotos</button>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div style="display: none;">
                                    <?php
                                    array_splice($Galeria_sub, 0, 1);
                                    for ($i = 0;
                                         $i < count($Galeria_sub);
                                         $i++) {
                                        ?>
                                        <a class="gallery-<?php echo $x; ?>"
                                           href="fotos/<?php echo $item['id']; ?>/<?php echo $item_sub['id']; ?>/<?php echo $Galeria_sub[$i]; ?>"
                                           rel="gallery-<?php echo $x; ?>"></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            <?php } ?>
                        </div>

                        <script>
                            jQuery(function () {
                                jQuery("a.gallery-<?php echo $x;?>").fancybox({
                                    cyclic: true,
                                    'transitionIn': 'elastic',
                                    'transitionOut': 'elastic',
                                    'speedIn': 600,
                                    'speedOut': 200
                                });
                            });
                        </script>
                    <?php } ?>
                </div>
                <!-- /.accordion -->
            </div>
        <?php } ?>

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