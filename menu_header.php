<ul class="sub-menu">
    <?php foreach ($servicios as $item) { ?>
        <li>
            <a href="servicios.php?p=<?php echo $item['id']; ?>">
                <?php echo $item['nombre']; ?></a>
        </li>
    <?php } ?>
</ul>