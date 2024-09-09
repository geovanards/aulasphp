<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="aula.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Formulário</h2>
    
    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"])) { 
        $number1 = htmlspecialchars($_POST["num1"]);
        $number2 = htmlspecialchars($_POST["num2"]);
        $soma = $number1 + $number2;

        echo "<p>Soma: $soma</p>";
    }
    ?>
    
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>

