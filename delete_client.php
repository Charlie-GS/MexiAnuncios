<?php
include 'connection.php';

$id = $_POST['id_cliente'];


$sql = "DELETE FROM clientes WHERE id_cliente = '$id'";
$query = mysqli_query($conexion, $sql);

if ($conexion->query($sql)) {
    header("Location: crudVendedor.php");
}
?>