<?php

session_start();

if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = [];
}

if (isset($_GET["produto"])) {
    array_push($_SESSION["carrinho"], $_GET["produto"]); 
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>carrinho de compras</title>
    </head>
    <body>
        <h1>Carrinho de Compras</h1>
        <p>Você tem <?= sizeof($_SESSION["carrinho"]) ?> no seu carrinho</p>
        <ul>
            <?php foreach($_SESSION["carrinho"] as $elemento) { ?>
                <li><?= $elemento ?></li>
           <?php } ?>
        </ul>
    </body>
</html>