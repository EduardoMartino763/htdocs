<?php
    session_start();

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "admin" && $senha == "1234") {
        $_SESSION["logado"] = $nome;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <?php if (isset($_SESSION["logado"])) { ?>
            <h1>Bem-Vindo(a) ao site, <?= $_SESSION["logado"] ?></h1>
        <?php } else { ?>
            <h1 style="color: red">Acesso Inválido</h1>
       <?php } ?>
    </body>
</html>