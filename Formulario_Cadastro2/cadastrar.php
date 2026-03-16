<?php
    // recebemos e tratamos os dados do formulário antes de usá-los

    $nome = strtoupper(htmlspecialchars($_GET["nome"]));
    $email = htmlspecialchars($_GET["email"]);
    $cidade = strtolower(htmlspecialchars($_GET["cidade"]));
    $estado = htmlspecialchars($_GET["estado"]);
    $data = htmlspecialchars($_GET["nascimento"]);
    // tratamos a data para que ela fique no formato dia/mes/ano
    $dataFormatada = date("d/m/y", strtotime($data));
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
                <th>ESTADO</th>
                <th>NASCIMENTO</th>
                <th>DATA</th>
            </tr>
            <tr>
                <td><?= $nome ?></td>
                <td><?= $email ?></td>
                <td><?= $cidade ?></td>
                <td><?= $estado ?></td>
                <td><?= $nascimento ?></td>
                <td><?= $dataFormatada ?></td>
            </tr>
        </table>
    </body>
</html>