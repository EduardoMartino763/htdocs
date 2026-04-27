<?php

    $temperatura = floatval(htmlspecialchars($_GET["temperatura"]));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultado da Converção</title>
    </head>
    <body>
        <h1>Resultado em Fahrenheit</h1>
        <?php if($temperatura != NULL) {
        $resultado = ($temperatura * 1.8) + 32; 
            echo "o resultato da conversão de $temperatura Célcius em Fahrenheit é $resultado";
        } else { echo "O campo está vazio!"; }
        ?>
    </body>
</html>