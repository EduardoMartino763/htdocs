<?php
    // criando um array (vetor) associativo em PHP
    $pessoa = [];
    // armazenando valores no vetor
    $pessoa["nome"] = "Maria";
    $pessoa["cidade"] = "Marília";
    $pessoa["idade"] = 19;
    $pessoa["altura"] = 1.65;

    // outra forma de criar um array associativo
    $produto = [
        "codigo" => 1,
        "nome" => "Notebook Lenovo",
        "categoria" => "Informática",
        "preço" => 2999.9,
        "avaliação" => 4.7
    ];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vetores Associativos</title>
    </head>
    <body>
        <h1>Vetores Associativos em PHP</h1>
        <ul>
            <li>Nome: <?= $pessoa["nome"] ?></li>
            <li>Cidade: <?= $pessoa["cidade"] ?></li>
            <li>Idade: <?= $pessoa["idade"] ?></li>
            <li>Altura: <?= $pessoa["altura"] ?></li>
        </ul>

        <h2>Percorrendo um array associativo automaticamente</h2>
        <ul>
        <?php foreach($produto as $chave => $valor) { ?>
            <li><?= $chave  ?>: <?= $valor ?></li>
            <?php } ?>
        </ul>
            
    </body>
</html>