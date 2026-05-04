<?php
session_start();

$_SESSION["Carrinho"] = [];

array_push($_SESSION["Carrinho"], );

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lojinha</title>
</head>
<body>
    <h1>CARRINHO DE COMPRAS</h1>
    <div>
        <form action="produto1.php">
            <label for="">Havaianas</label>
            <button>Comprar</button>
        </form>
    </div>
    <div>
        <form action="produto2.php">
            <label for="">Calça Jeans</label>
            <button>Comprar</button>
        </form>
    </div>
    <div>
        <form action="produto3.php">
            <label for="">Camisa Polo</label>
            <button>Comprar</button>
        </form>
    </div>
    <div>
        <h2>Seu carrinho possui <?= sizeof($_SESSION["Carrinho"]) ?> </h2>
    </div>
</body>
</html>