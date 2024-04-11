<?php
include 'connection.php';

$id = $_POST['id_cliente'];


$sql = "UPDATE espacio_public SET dimensiones = '$size', disponibilidad='$status', precio = '$price' WHERE id_espacio = '$id'";
$query = mysqli_query($conexion, $sql);

if ($conexion->query($sql)) {
    header("Location: crudLinea1.php");
}
?>