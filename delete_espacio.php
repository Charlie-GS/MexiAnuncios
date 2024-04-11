<?php
include 'connection.php';

$id = $_POST['id_espacio'];


$sql = "DELETE FROM espacio_public WHERE id_espacio = '$id'";
$query = mysqli_query($conexion, $sql);

if ($conexion->query($sql)) {
    header("Location: crudLinea1.php");
}
?>