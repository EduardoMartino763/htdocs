<?php
require("conexao.php");

$id = intval(htmlspecialchars($_POST["id"]));
$nome = htmlspecialchars($_POST["nome"]);
$descricao = htmlspecialchars($_POST["descricao"]);
$preco = floatval(htmlspecialchars($_POST["preco"]));
$promocao = intval(htmlspecialchars($_POST["promocao"]));
$lancamento = intval(htmlspecialchars($_POST["lancamento"]));

$sql = "UPDATE produtos SET nome = :nome, descricao = :desc, "
. "preco = :preco, promocao = :promo,lancamento = :lanc "
. " WHERE id = :id";

$comando = $pdo->prepare("$sql");
$comando->bindParam(":nome", $nome);
$comando->bindParam(":desc", $descricao);
$comando->bindParam(":preco", $preco);
$comando->bindParam(":promo", $promocao);
$comando->bindParam(":lanc", $lancamento);
$comando->bindParam(":id", $id);

$sucesso = $comando->execute();
if ($sucesso) {
    header("Location: listar_produtos.php");
}
?>
<h1 style="color: red;">FALHA NA ALTERAÇÃO DO PRODUTO</h1>