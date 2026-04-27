<?php 
    session_start(); //iniciar sessão
    $_SESSION["usuario"] = $_GET["user"]; //metodo para guardar variaves na sessão
    $_SESSION["cidade"] = $_GET["cidade"];
?>
<h1>
    Bem-Vindo, <?= $_SESSION["usuario"] ?>,
    da cidade de <?= $_SESSION["cidade"] ?></h1>! 
<p>
    <a href="com_sessao2.php">Clique aqui</a>
    para continuar neste site.
</p>