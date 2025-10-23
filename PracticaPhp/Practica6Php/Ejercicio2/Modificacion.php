<?php
include "ConsultaSQL.php";
if(isset($_GET['id'])){
    $mensaje="";
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM ciudades WHERE id = $id";
    $resultadoSelect = consultaSQL($sqlSelect);
    if($idCiudad = mysqli_fetch_array($resultadoSelect)){
        $ciudad = $idCiudad['ciudad'];
        $pais = $idCiudad['pais'];
        $habitantes = $idCiudad['habitantes'];
        $superficie = $idCiudad['superficie'];
        $tieneMetro = $idCiudad['tieneMetro'];
        if(!empty($_POST['ciudad']) && !empty($_POST['pais']) && !empty($_POST['habitantes']) && !empty($_POST['superficie'])){
            $ciudadNueva = $_POST['ciudad'];
            $paisNueva = $_POST['pais'];
            $habitantesNueva = $_POST['habitantes'];
            $superficieNueva = $_POST['superficie'];
            $tieneMetroNueva = $_POST['tieneMetro'];
            if(!isset($tieneMetroNueva)){
                $tieneMetroNueva = 0;
            }
            $sqlUpdate = "UPDATE ciudades SET ciudad='$ciudadNueva', pais='$paisNueva', habitantes='$habitantesNueva', superficie='$superficieNueva', tieneMetro='$tieneMetroNueva' WHERE id=$id";
            $resultadoUpdate = consultaSQL($sqlUpdate);
            if($resultadoUpdate){
                $mensaje = "Capital modificada correctamente.";
                header("Location: Listado.php");
            }
            else{
                $mensaje = "Error al modificar la capital.";
            }
        }
    }
    else{
        echo "No se encontro la capital.";
        exit;
    }
}
else{
    header("Location: Listado.php");
    exit;
}
?>
<form action="" method="POST" style="margin-top:20px;">
    <input type="hidden" name="tipo" value="modificacion">
    Ciudad: <input type="text" name="ciudad" required><br>
    Pais: <input type="text" name="pais" required><br>
    Habitantes: <input type="number" name="habitantes" required><br>
    Superficie: <input type="number" name="superficie" required><br>
    Tiene metro? <input type="checkbox" name="tieneMetro" value="1"> <br>
    <input type="submit" value="Registrarse"><br>
    <?= $mensaje; ?><br>
    <a href="index.html">Volver</a>