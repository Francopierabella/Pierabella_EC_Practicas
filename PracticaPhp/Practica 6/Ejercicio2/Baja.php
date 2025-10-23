<?php 
$mensaje="";
include "ConsultaSQL.php";
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sqlBaja = "DELETE FROM ciudades WHERE id = $id";
    $resultadoBaja = consultaSQL($sqlBaja);
    if($resultadoBaja){
        $mensaje = "capital borrada correctamente.";
    }
    else{
        $mensaje = "Error al borrar la capital.";
    }
}
echo $mensaje."<br>";
?>
<a href="Listado.php">Volver</a>