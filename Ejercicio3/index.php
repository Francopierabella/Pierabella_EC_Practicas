
<?php
//Crear un formulario que solicite la carga del nombre de usuario. 
// Cuando se presione un botón crear una cookie para dicho usuario.
//  Luego cada vez que ingrese al formulario mostrar el último nombre de usuario ingresado. 




session_start();

if(isset($_POST['usuario']) && !empty(trim($_POST['usuario']))){
    $nombreUsuario =  trim($_POST['usuario']);
    setcookie("usuario",$nombreUsuario,time() + 86400 * 2);
}
$ultimoUsuario = isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : "";
if (!empty($ultimoUsuario)){
    echo "<p> Ultimo usuario ingresado: " . $ultimoUsuario;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        nombre de Usuario: <input type="text" name="usuario">
        <button type="submit">Guardar usuario</button> 
    </form>
    
</body>
</html>