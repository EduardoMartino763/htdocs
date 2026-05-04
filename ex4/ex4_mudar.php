<?php
session_start();

if (isset($_GET["btn_claro"])) {
    $_SESSION["tema"] = "claro";
} else {
    $_SESSION["tema"] = "escuro";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Página inicial de tema</title>
        <link href="estilos.css" rel="stylesheet">
    </head>
    <body class="<?= $_SESSION["tema"] ?>">
        <h1>Página inicial com tema PHP</h1>
        <p>Teste do tema da Página</p>
        <h2>Não gostou? Clique aqui</h2>
        <p><a href="ex4.php">Voltar ao início</a></p>
    </body>
</html>