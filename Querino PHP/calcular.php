<?php
$numero1 = floatval($_POST["numero1"]);
$numero2 = floatval($_POST["numero2"]);
$operacao = $_POST["operacao"];

if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
} else if ($operacao == "-") {
    $resultado = $numero1 - $numero2;
} else if ($operacao == "*") {
    $resultado = $numero1 * $numero2;
} else if ($operacao == "/") {
    $resultado = $numero1 / $numero2;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultado da Calculadora</title>
    </head>
    <body>
        <h1>Resultado do Cálculo</h1>
        <p> O resultado de <?= $numero1 ?> <?= $operacao ?> <?= $numero2?> dá <?= $resultado ?></p>
    </body>
</html>