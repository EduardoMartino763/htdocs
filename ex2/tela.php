<?php
session_start();

if(isset($_SESSION["contador"])) {
    $_SESSION["contador"]++;
} else {
    $_SESSION["contador"] = 1;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tela</title>
    </head>
    <body>
        <h1>Você visitou essa tela <?= $_SESSION["contador"] ?> vezes!</h1>
        <button>RESETAR</button>
    </body>
</html>