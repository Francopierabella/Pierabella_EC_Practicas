<?php
    include "ej2.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
if (isset($contador)){
    if($contador == 1){
        echo "<h1> BIENVENIDO POR PRIMERA VEZ </h1>";

    }
    else{
        echo "<h1> Hola de nuevo. Has visitado " . $contador . " veces la pagina";
    }
}
?>
</body>
</html>
