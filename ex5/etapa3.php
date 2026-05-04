<?php
session_start();

$_SESSION["cidade"] = htmlspecialchars($_POST["cidade"]);
$_SESSION["estado"] = htmlspecialchars($_POST["estado"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Etapa Final</title>
    </head>
    <body>
        <h1>Etapa Final</h1>
        <h2>Etapa 3 - Confirme seus dados:</h2>
        <table border="1">
            <tr>
                <th>Nome:</th><td><?= $_SESSION["nome"] ?></td>
            </tr>
            <tr>
                <th>E-Mail:</th><td><?= $_SESSION["email"] ?></td>
            </tr>
            <tr>
                <th>Cidade:</th><td><?= $_SESSION["cidade"] ?></td>
            </tr>
            <tr>
                <th>Estado:</th><td><?= $_SESSION["estado"] ?></td>
            </tr>
        </table>
    </body>
</html>