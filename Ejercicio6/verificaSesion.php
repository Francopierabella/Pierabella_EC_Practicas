
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
if (isset($_SESSION['email'])){
    echo "<h1> Bienvenido usuario de email: " . $_SESSION['email'] . "</h1>";
    echo "<a href='index.php'> Ir al ingreso  de mail </a>";
}
else{
    echo "<h1> Disculpa, No estas registrado en el sitio. </h1>";
    echo "<a href='index.php'> Ir al ingreso  de mail </a>";
}

?>
</body>
</html>