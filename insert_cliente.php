<?php
include "connection.php";

$id = null;
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$linea = $_POST["linea"];
$id_estacion = $_POST["estacion"];
$espacio = $_POST['espacios'];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];

$sqlEstacion = "SELECT nom_estacion FROM estacion_mexi WHERE id_estacion = '$id_estacion'";
$resultEstacion = mysqli_query($conexion, $sqlEstacion);
$rowEstacion = mysqli_fetch_assoc($resultEstacion);
$nombre_estacion = $rowEstacion['nom_estacion'];

$sql = "INSERT INTO clientes (id_cliente, nombre_razon, apellidos, correo, telefono, linea, estacion, num_espacio, fecha_inicio, fecha_fin) VALUES ('$id', '$nombre', '$apellidos', '$correo', '$telefono','$linea', '$nombre_estacion', '$espacio', '$fecha_inicio', '$fecha_fin')";
$query = mysqli_query($conexion, $sql);

if ($query) {
    $sqlUpdateEspacio = "UPDATE espacio_public SET disponibilidad = 'Ocupado' WHERE id_espacio = '$espacio'";
    $queryUpdateEspacio = mysqli_query($conexion, $sqlUpdateEspacio);
    
    if ($queryUpdateEspacio) {
        header("Location: crudVendedor.php");
    } else {
        echo "Error al actualizar el estado del espacio publicitario: " . mysqli_error($conexion);
    }
}


?>
