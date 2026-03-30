<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Usando For PHP</title>
    </head>
    <body>
        <h1>For no PHP</h1>
        <h2>Contando de 1 a 10</h2>
        <?php
            for ($contador = 1; $contador <= 10; $contador++) {
                echo "$contador <br/>";
            }
        ?>
        <h2>Contagem regressiva em uma lista</h2>
        <ul>
        <?php for ($contador = 10; $contador >= 0; $contador--) { ?>
            <li><?= $contador ?> </li>
        <?php } ?>
        </ul>
    </body>
</html>