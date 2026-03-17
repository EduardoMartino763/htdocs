<?php
    // recebemos e tratamos os dados do formulário antes de usá-los com o htmlspecialchars

    $nome = strtoupper(htmlspecialchars($_POST["nome"]));
    $email = htmlspecialchars($_POST["email"]);
    $cidade = strtolower(htmlspecialchars($_POST["cidade"]));
    $estado = htmlspecialchars($_POST["estado"]);
    $data = htmlspecialchars($_POST["nascimento"]);
    // tratamos a data para que ela fique no formato dia/mes/ano
    $dataFormatada = date("d/m/y", strtotime($data));
    // tratamos a senha fazendo uma "criptografia" com o hash md5
    $senha = md5(htmlspecialchars($_POST["senha"]));
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
                <th>SENHA</th>
            </tr>
            <tr>
                <td><?= $nome ?></td>
                <td><?= $email ?></td>
                <td><?= $cidade ?></td>
                <td><?= $estado ?></td>
                <td><?= $dataFormatada ?></td>
                <td><?= $senha ?></td>
            </tr>
        </table>
    </body>
</html>