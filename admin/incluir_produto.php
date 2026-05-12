<?php
require("conexao.php");
    // recebemos os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $descricao = htmlspecialchars($_POST["descricao"]);
    $preco = floatval(htmlspecialchars($_POST["preco"]));
    $promocao = intval($_POST["promocao"]);
    $lancamento = intval($_POST["lancamento"]);

    $sql = "INSERT INTO produtos (nome, descricao, preco, promocao, lancamento) " . "VALUES (:nome, :desc, :preco, :promocao, :lanc)";
 
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":desc", $descricao);
    $comando->bindParam(":preco", $preco); 
    $comando->bindParam(":promocao", $promocao);
    $comando->bindParam(":lanc", $lancamento);
?>