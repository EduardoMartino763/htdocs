<?php
    $produtos = [
        "Notebook" => 2000,
        "Mouse" => 30,
        "Tablet" => 200
    ];

    $produto_escolhido = $_GET["produto"];
    $quantidade = intval($_GET["quantidade"]);
    $preco_produto = $produtos[$produto_escolhido];
    $total = $preco_produto * $quantidade;

    if ($total > 500) {
        $total = $total - $total * 0.1;
    }
?>

<p>
    Comprando <?= $quantidade ?> <?= $produto_escolhido ?>(s) você pagará R$ <?= number_format($total, 2, ",")  ?>
</p>