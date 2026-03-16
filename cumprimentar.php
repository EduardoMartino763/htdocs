<?php
    $nome = $_GET["nome"];
    $idade = intval($_GET["idade"]);
    $diasVividos = $idade * 365;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Recebendo dados do form</title>
    </head>
    <h1>Recebendo dados do Form em PHP</h1>

    <p>
        Prazer com conhecê-lo(a),<?= $nome?>!
        você já viveu pelo menos <?= $diasVividos ?> dia(s).
    </p>

</html>