<?php 
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);

    if($email == "correto123@gmail.com" && $senha == 1234) {
        $css = "color: green";
        $mensagem = "Bem-Vindo"; 
    } else {
        $css = "color: red";
        $mensagem = "Acesso Negado!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
    </head>
    <body>
        <h1>RESULTADO</h1>
        <h2 style="<?= $css ?>"><?= $mensagem ?></h2>
    </body>
</html>