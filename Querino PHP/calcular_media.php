<?php
    $nome = htmlspecialchars($_POST["nome"]);
    $nota1 = floatval($_POST["nota1"]);  //converte de String para Float
    $nota2 = floatval($_POST["nota2"]);

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 6) {
        $resultado = "APROVADO(A)";
    } else {
        $resultado = "REPROVADO(A)";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultado da Média</title>
    </head>
    <body>
        <h1>Resultado do cálculo da Média</h1>
        <p>
            Aluno(a) <?= $nome ?> obteve média <?= $media ?> e está <?= $resultado ?>.
        </p>
    </body>
</html>