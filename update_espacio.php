<?php
include 'connection.php';

$id = $_POST['id_espacio'];
$size = $_POST["dimensiones"];
$status = $_POST["disponibilidad"];
$price = $_POST["precio"];

$sql = "UPDATE espacio_public SET precio = '$price' WHERE id_espacio = '$id'";
$query = mysqli_query($conexion, $sql);

if ($conexion->query($sql)) {
    header("Location: crudLinea1.php");
}
?>