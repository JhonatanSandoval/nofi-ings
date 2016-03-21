<ul class="menu">
    <li id="general_servicios">
        <a href="servicios.php">Todos los Servicios</a>
    </li>
    <?php foreach ($servicios as $item) { ?>
        <li id="<?php echo $item['id']; ?>">
            <a href="servicios.php?p=<?php echo $item['id']; ?>">
                <?php echo $item['nombre']; ?></a>
        </li>
    <?php } ?>
</ul>