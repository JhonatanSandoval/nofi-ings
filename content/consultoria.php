<?php
include '../global.php';

$item = null;
foreach ($servicios as $menu_item) {
    if ($menu_item['id'] == 'consultoria') {
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

        <h4><?php echo $item['nombre'];?></h4>

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

</body>
</html>