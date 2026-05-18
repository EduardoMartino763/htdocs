<?php
require("conexao.php");

// recebemos o id passado pelo clique no link "Excluir"  (método GET)
$id = intval(htmlspecialchars($_GET["id"]));

$sql = "DELETE FROM produtos WHERE id = ;id";
$comando = $pdo->prepare($sql);
$comando->bindParam(":id", $id);
$sucesso = $comando->execute();

if ($sucesso) {
    // se a exclusão teve sucesso, redirecionaremos para a listagem
    header("Location: listar_produtos.php");
}

?>
<h1 style="color: red;">FALHA NA EXCLUSÃO DO PRODUTO</h1>