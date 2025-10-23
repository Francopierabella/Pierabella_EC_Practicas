<?php
function consultaSQL($par1){
    $conexion = mysqli_connect("localhost","root","","capitales");
    $resultado = mysqli_query($conexion,$par1);
    mysqli_close($conexion);
    return $resultado;
}

function consultaSQLCiudadRepetida($par1){
    $conexion = mysqli_connect("localhost","root","","capitales");
    $resultado = mysqli_query($conexion,$par1);
    $value= false;
    $filas=[];
    if($resultado){
        while($fila = mysqli_fetch_assoc($resultado)){
            $filas[] = $fila;
        }
    }
    if(count($filas)>0){
        $value=true;
    }
    mysqli_close($conexion);
    return $value;
}

?>