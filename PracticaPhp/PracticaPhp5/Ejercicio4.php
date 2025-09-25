<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
    ?>
    <br>
    <a href="contador.php">Otra pagina</a>
</body>
</html>
