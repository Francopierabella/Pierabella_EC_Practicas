<?php
include "ConsultaSQL.php";
if(!empty($_POST['id']) && !empty($_POST['Nombre']) && !empty($_POST['Pais'])){
    $id =$_POST['id'];
    $nombre = $_POST['Nombre'];
    $pais = $_POST['Pais'];
    $consulta = "INSERT INTO ciudades(id, nombre,pais) VALUES ($id,$nombre,$pais)";
    $resultado = ConsultaSql($consulta);
    if($resultado){
        echo "Se ha registrado la ciudad";
    } else {
        echo "No se ha podido registrar la ciudad";
    }
}
?>

<form action="" method="post">
    <label for="id">ID: </label> <input type="number" id="id" name="id">
    <label for="Nombre">Nombre: </label> <input type="text" id="Nombre" name="Nombre">
    <label for="Pais">Pais: </label> <input type="text" id="Pais" name="Pais">
    ...
</form>