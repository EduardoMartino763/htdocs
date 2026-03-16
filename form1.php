<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Forms com PHP</title>
    </head>
    <body>
        <h1>Forms com PHP</h1>
        <form action="cumprimentar.php">
            <div>
                <label for="nome">Qual é o seu nome? </label>
                <input type="text" nome="nome" id="nome">
            </div>
            <div>
                <label for="idade">Quantos anos você tem?</label>
                <input type="number" name="idade" id="idade">
            </div>
            <button>Enviar</button>
        </form>
    </body>
</html>