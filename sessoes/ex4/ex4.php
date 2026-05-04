<?php
session_start();

if (!isset ($_SESSION["tema"])) {
    $_SESSION["tema"] = "claro";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tema com PHP</title>
        <link href="estilos.css" rel="stylesheet">
    </head>
    <body class="claro">
        <h1>Tema em PHP</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <form action="ex4_mudar.php">
            <button type="submit" name="btn_claro">Tema Claro</button>
            <button type="submit" name="btn_escuro">Tema Escuro</button>
        </form>
    </body>
</html>