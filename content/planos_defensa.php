<?php
include '../global.php';

$item = null;
foreach ($servicios as $menu_item) {
    if ($menu_item['id'] == 'planos_defensa') {
        $item = $menu_item;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
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

            <br/><br/>

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

</body>
</html>