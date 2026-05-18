<?php
    require("conexao.php");

    $id = intval(htmlspecialchars($_GET["id"]));

    $sql = "SELECT * FROM produtos WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindParam(":id", $id);
    $comando->execute();
    $produto = $comando->fetch(); //retorna os dados do produto consultado
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Incluir Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Fatec Shop - Área administrativa</h1>
    <h2>Incluir Produto</h2>
    <form action="alterar_produto.php">
        <div>
            <label for="nome">Nome do produto</label>
            <input type="text" id="nome" value="<?= $produto["nome"] ?>" name="nome" size="50" maxlength="50">
            |
            <input type="hidden" name="id" value="<?= $id ?>">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="5" cols="50" maxlength="255" required><?= $produto["descricao"] ?></textarea>
        </div>
        <div>
            <label for="preco">Preço: R$</label>
            <input type="number" value="<?= $produto["preco"] ?>" id="preco" name="preco" step="any" min="0" required>
        </div>
        <div>
            <label for="promocao">Em promoção</label>
            <select name="promocao" id="promocao" required>
                <option value="0" <?= $produto["promocao"] ? "selected" : ""?>>Não</option>
                <option value="1" <?= $produto["promocao"] ? "selected" : ""?>>Sim</option>
            </select>
        </div>
        <div>
            <label for="lancamento ">É lançamento?</label>
            <select name="lancamento " id="lancamento" required>
                <option value="0" <?= $produto["lancamento"] ? "selected" : ""?>>Não</option>
                <option value="1" <?= $produto["lancamento"] ? "selected" : ""?>>Sim</option>
            </select>
        </div>
        <div>
            <button id="botao">Cadastrar</button>
        </div>
    </form>
</body>

</html>