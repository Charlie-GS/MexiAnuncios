<?php
include "connection.php";

$id = null;
$size = $_POST["dimensiones"];
$status = $_POST["disponibilidad"];
$price = $_POST["precio"];
$id_estacion = $_POST["id_estacion"];
$ubicacion = $_POST['ubicacion'];

$sql = "INSERT INTO espacio_public (id_espacio, dimensiones, disponibilidad, precio, estacionn_mexi, ubicacion)VALUES('$id', '$size', '$status', '$price', '$id_estacion', '$ubicacion')";
$query = mysqli_query($conexion, $sql);

if ($query) {
    header("Location: crudLinea1.php");
}
?>