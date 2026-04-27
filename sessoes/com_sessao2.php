<?php session_start(); ?>
<h1>
    Que bom que você ainda está conosco, <?= $_SESSION["usuario"] ?>, da cidade de <?= $_SESSION["cidade"] ?>!
</h1>
<p>
    <a href="com_sessao3.php">Clique para sair (logout)</a>
</p>