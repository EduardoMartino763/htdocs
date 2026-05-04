<?php
session_start();

$_SESSION["nome"] = htmlspecialchars($_POST["nome"]);
$_SESSION["email"] = htmlspecialchars($_POST["email"]);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>etapa 2</title>
    </head>
    <body>
        <h1>Etapa 2</h1>
        <form method="POST" action="etapa3.php">
            <fieldset>
                <legend>Etapa 2</legend>
                <div>
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" required>
                </div>
                <div>
                    <label for="estado">Estado:</label>
                    <select type="text" name="estado" id="estado">
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Minas Gerais</option>
                    <option selected>São Paulo</option>
                    </select>
                </div>
                <button>Avançar</button>
            </fieldset>
        </form>
    </body>
</html>