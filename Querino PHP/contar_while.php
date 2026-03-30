<?php 
    $final = intval($_GET["final"]);
    $contador = 1;
    /*Adicione no form_while.html um campo para o número inicial.
    Mude o código PHP para contar do número inicial fornecido até o final.
    Acrescente as seguintes validações (usando if):
        - Não conte se o número inicial for maior que o final
        - Não conte se a quantidade de contagens (número final menos o número inicial for superior a 1000)
        */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>While no PHP</title>
    </head>
    <body>
        <h1>Contando de <?= $contador ?> a <?= $final ?></h1>
        <?php
        while ($contador <= $final) {
            echo "$contador <br/>";
            $contador++;
        }
        ?>
    </body>
</html>