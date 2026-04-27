<?php
    session_start();
    session_destroy(); 

    /*
    Se quisermos eliminar uma informação especifica dentro da sessão, basta remover do array $_SESSION o dado
    armazenado em uma chave especifica usando a função unset().
    Exemplo:

    unset($_SESSION["cidade"]);

    Como verificar se uma variavel/valor foi definido na sessão?
    Use a função isset() do PHP, que retorna True se o valor existe
    Exemplo:

        if (isset($_SESSION["logado"])) {
            // usuário já fez o login
        } else {
            // usuário NÃO FEZ o login
            }
    */
?>
<h1>Você saiu com sucesso!</h1>