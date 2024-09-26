<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
</head>
<body>
    <?php

    session_start();
    $_SERVER['contador'];

    if ( isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }

    echo "Você acessou esta página" . $_SESSION['contador'] . "vezes" . "<br>";

    echo "<button><a href='teste02.php'>Proxima Pagina</a></button>";
    ?>
</body>
</html>
