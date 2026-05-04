<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Etapas</title>
    </head>
    <body>
        <h1>Cadastro</h1>
        <form action="etapa2.php" method="POST">
            <fieldset>
                <legend>Etapa 1</legend>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <button>Avançar</button>
            </fieldset>
        </form>
    </body>
</html>