<?php
    // recebemos e tratamos os dados do formulário antes de usá-los

    $nome = strtoupper(htmlspecialchars($_GET["nome"]));
    $email = htmlspecialchars($_GET["email"]);
    $cidade = strtolower(htmlspecialchars($_GET["cidade"]));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <h1>Dados Cadastrados</h1>
        <table>
            <tr>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>CIDADE</th>
            </tr>
            <tr>
                <td><?= $nome ?></td>
                <td><?= $email ?></td>
                <td><?= $cidade ?></td>
            </tr>
        </table>
    </body>
</html>