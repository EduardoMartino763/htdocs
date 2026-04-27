<?php
    $tabuada = intval($_POST["tabuada"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gerador de Tabuada PHP</title>
    </head>
    <body>
        <h1>Gerador de Tabuada PHP</h1>
        <h2>Tabuada do <?= $tabuada ?></h2>
        <table border="1">
            <?php for ($contador = 1; $contador <= 10; $contador++) { ?>
                <tr>
                    <td>
                        <?= $tabuada ?> x <?= $contador ?> = <?= $contador * $tabuada ?>
                    </td>
                </tr>
          <?php  } ?>
        </table>
    </body>
</html>