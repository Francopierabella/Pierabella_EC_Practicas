<?php 
if(!empty($_GET['idElimnar'])){
    $idEliminar = $_GET['idElimnar'];
    header("Location: Baja.php?id=$idEliminar");
}
if(!empty($_GET['idEditar'])){
    $idEditar = $_GET['idEditar'];
    header("Location: Modificacion.php?id=$idEditar");
}

    include 'ConsultaSql.php';
    echo "<table>
        <tr class='titulo'>
            <th>Id</th>
            <th>Ciudad</th>
            <th>Pais</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
            <th>Acciones</th>
        </tr>";
$consulta = "SELECT * FROM ciudades";
$resultado = consultaSQL($consulta);
if(!empty($resultado)):
while($ciudades = mysqli_fetch_array($resultado)){
?>
            <tr>
                <td><?= $ciudades['id']?></td>
                <td><?= $ciudades['ciudad']?></td>
                <td><?= $ciudades['pais']?></td>
                <td><?= $ciudades['habitantes']?></td>
                <td><?= $ciudades['superficie']?></td>
                <td><?= $ciudades['tieneMetro']?></td>
                <td> <a href="?idElimnar=<?= $ciudades['id']?>">Borr</a> <a href="?idEditar=<?= $ciudades['id']?>">Mod</a></td>
            </tr>
<?php
        }
echo "</table>";
    endif;
?>
<style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                width: 100%;
            }
            th, td {
                padding: 5px;
                text-align: left;    
            }
            .titulo{
                background-color: lightgray;
            } 
</style>