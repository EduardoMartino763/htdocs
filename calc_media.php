<?php 
    $nota1 = floatval(htmlspecialchars($_POST["nota1"]));
    $nota2 = floatval(htmlspecialchars($_POST["nota2"]));
    $nota3 = floatval(htmlspecialchars($_POST["nota3"]));
    $nota4 = floatval(htmlspecialchars($_POST["nota4"]));

    $notas = [ $nota1, $nota2, $nota3, $nota4 ];

    $total = 0;
    foreach ($notas as $nota) {
        $total = $total + $nota;
    }

    $media = $total / sizeof($notas);

    if ($media >= 7.0) {
        $resultado = "APROVADO";
    } else if ($media >= 5.0) {
        $resultado = "RECUPERAÇÃO";
    } else {
        $resultado = "REPROVADO";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultado da Média</title>
    </head>
    <body>
        <h1>RESULTADO</h1>
        <h2>A Média final é <?= $media ?> e o resultado é <?= $resultado ?></h2>
    </body>
</html>