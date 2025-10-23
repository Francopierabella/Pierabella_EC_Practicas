<?php 
session_start();

if (!empty($_POST['estilo'])){
    $estilo = $_POST['estilo'];
    $_SESSION['estilo'] = $estilo;
    setcookie("estilo",$estilo,time()+ 86400 * 30);
    header("Location:index.php");
}
else{
    echo "no se selecciono ningun estilo";
}
?>