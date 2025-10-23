<?php 
session_start();
if(isset($_COOKIE['estilo'])){
    $estilo = $_COOKIE['estilo'];
}

elseif(isset($_SESSION['estilo'])){
    $estilo = $_SESSION['estilo'];
}
else{
    $estilo = 'rojo'; 
    // estilo por defecto 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" estilos/<?php echo $estilo ?>.css">
    <title>Document</title>
</head>
<body>
    <form action="seleccionarEstilo.php" method="post">
    <select name="estilo" id="est">
        <option value="verde"><?php if($estilo == 'verde')echo "Actual: "?> verde</option>
        <option value="rojo"><?php if($estilo == 'rojo')echo "Actual: "?> rojo</option>
        <option value="azul"><?php if($estilo == 'azul')echo "Actual: "?> azul</option>
    </select>
    <input type="submit" value="Aplicar estilos">
    </form>
</body>
</html>