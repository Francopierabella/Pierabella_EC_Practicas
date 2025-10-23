
<?php 
// HAGO CAMBIos
if(isset($_POST['borrar'])){

    header("Location: periodico.php");
    setcookie("eleccion","",time() - 3600);
    exit();
}

?>

<form action="" method="post">
    <button type="submit" name="borrar">Eliminar Cookie</button>
</form>