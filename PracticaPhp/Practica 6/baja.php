<?Php
include "ConsultaSQL.php";
if(!empty($_POST['id'])){
    $consulta = "DELETE FROM ciudades WHERE id = ". $_POST['id'];
    $resultado = ConsultaSql($consulta);
    if($resultado){
        echo "Se ha eliminado la ciudad";
    } else {
        echo "No se ha podido eliminar la ciudad";
    }
}

?>

<form action="" method="post">
    ID a eliminar: <input type="number" name="id">
</form>