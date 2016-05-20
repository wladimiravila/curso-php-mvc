<html>
    <head></head>
    <body>
        <br>
        <h1>este archivo es <?= __FILE__ ?></h1>
        recibio las variables:
        <br>
        <?php echo $saludo; ?>
        <br>
        <?php foreach ($datos as $key => $value) { ?>
            <ul> <strong><?= $key ?></strong> 
                <br>
                <?php
                if (is_array($value)) {
                    foreach ($value as $data) {
                        ?> 
                        <li> <?= $data ?></li>
                        <?php
                    }
                }
                ?>
            </ul> 
            <br>
        <?php }
        ?>
    </body>
</html>
