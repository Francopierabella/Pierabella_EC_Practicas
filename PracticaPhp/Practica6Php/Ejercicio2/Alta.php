<?php
include "ConsultaSQL.php";
$mensaje="";
if(!empty($_POST['ciudad']) && !empty($_POST['pais']) && !empty($_POST['habitantes']) && !empty($_POST['superficie'])){
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = $_POST['tieneMetro'];
    if(!isset($tieneMetro)){
        $tieneMetro = 0;
    }
    $sqlCiudad = "SELECT * FROM ciudades WHERE ciudad = '$ciudad'";
    $resultadoCiudad = consultaSQLCiudadRepetida($sqlCiudad);
    if(!$resultadoCiudad){
        $sql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad','$pais','$habitantes','$superficie','$tieneMetro')";
        $resultado = consultaSQL($sql);
        if($resultado){
            $mensaje = "Capital registrada correctamente.";
        }
        else{
            $mensaje = "Error al registrar la capital.";
        }
    }
    elseif($resultadoCiudad){
        $mensaje = "La capital ya esta registrada.";
    }
    else{
        $mensaje = "Error al registrar la capital.";
    }
}
?>
<form action="" method="POST" style="margin-top:20px;">
    <input type="hidden" name="tipo" value="alta">
    Ciudad: <input type="text" name="ciudad" required><br>
    Pais: <input type="text" name="pais" required><br>
    Habitantes: <input type="number" name="habitantes" required><br>
    Superficie: <input type="number" name="superficie" required><br>
    Tiene metro? <input type="checkbox" name="tieneMetro" value="1"> <br>
    <input type="submit" value="Registrarse"><br>
    <?= $mensaje; ?><br>
    <a href="index.html">Volver</a>
</form>