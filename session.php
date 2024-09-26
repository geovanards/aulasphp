<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>

    <?php
    session_start();

    $_SESSION['contador'] = 0;

    echo "<h1>página inicial <br>";

    echo "Contador iniciado. Valor: " . $_SESSION['contador'] . "<br>";
    
    echo "<button><a href='teste02.php'>Proxima Pagina</a></button>";

    




    ?>



</head>
<body>
    
</body>
</html>
