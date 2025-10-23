<?php

function ConsultaSql($consulta){
    $conexion = mysqli_connect("localhost","root","","ciudades");
    $resultado = mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    return $resultado;
}