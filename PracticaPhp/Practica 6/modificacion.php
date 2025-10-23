<?php
include "ConsultaSQL.php";
if(!empty($_POST['id'])){
    $consulta = "SELECT FROM ciudades WHERE id = " . $_POST['id'];
    $resultado = ConsultaSql($consulta);
    if($resultado){
        $nombreNuevo = $_POST['nombre'];
        $paisNuevo = $_POST['pais'];
        $consulta = " UPDATE ciudades SET nombre = '$nombreNuevo', pais = '$paisNuevo' WHERE id = ". $_POST['id'];
        $resultadoUpdate = ConsultaSql($consulta);
        if($resultadoUpdate){
            echo "Se ha modificado la ciudad";
        } else {
            echo "No se ha podido modificar la ciudad";
        }
    }    
}

?>


<form action="" method="post">
    Nombre nuevo: <input type="text" name="nombre" required>
    ID a modificar: <input type="number" name="id" required>
    Pais a modificar: <input type="text" name="pais" required>
</form>