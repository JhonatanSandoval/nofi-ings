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
                if (!is_dir('../fotos/' . $item['id'] . '/' . $item_sub['id'])) {
                    mkdir('../fotos/' . $item['id'] . '/' . $item_sub['id']);
                }
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