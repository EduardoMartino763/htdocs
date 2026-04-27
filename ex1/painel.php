<?php 
    session_start();

    if (!isset ($_SESSION["logado"])) {
        // variável de sessão NÃO setada: usuário não fez o login (o ! inverte o IF)
        // redirecionamos ele para o form.html
        header("Location: form.html");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>painel</title>
    </head>
    <body>
        <h1>Painel Principal</h1>
        <h2>Menu</h2>
        <p>Acessando como <?= $_SESSION["logado"]; ?></p>
        <ul>
            <li>Cadastrar</li>
            <li>Consultar</li>
        </ul>
        <a href="sair.php">Sair</a>
    </body>
    </html>