<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['nombre']) && isset($_SESSION['clave'])){
        echo "<p> nombre: " . $_SESSION['nombre']. "</p>";
        echo "<p> clave: " . $_SESSION['clave']. "</p>";

    }

    ?>
</body>
</html>