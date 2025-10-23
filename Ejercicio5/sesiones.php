<?php 
session_start();

if(!empty($_POST['nombre'])&& !empty($_POST['clave'])){
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $_SESSION['nombre'] = $nombre;
    $_SESSION['clave'] = $clave;
    header("Location: muestra.php");
}

?>