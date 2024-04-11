<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $linea = $_POST['linea'];
    
    $sqlEstaciones = "SELECT * FROM estacion_mexi WHERE nume_linea = '$linea'";
    $resultEstaciones = mysqli_query($conexion, $sqlEstaciones);
    $estaciones = array();
    while ($rowEstacion = mysqli_fetch_assoc($resultEstaciones)) {
        $estaciones[] = $rowEstacion;
    }
    
    $sqlEspacios = "SELECT * FROM espacio_public WHERE estacionn_mexi IN (SELECT id_estacion FROM estacion_mexi WHERE nume_linea = '$linea')";
    $resultEspacios = mysqli_query($conexion, $sqlEspacios);
    $espacios = array();
    while ($rowEspacio = mysqli_fetch_assoc($resultEspacios)) {
        $espacios[] = $rowEspacio;
    }
    
    echo json_encode(array('estaciones' => $estaciones, 'espacios' => $espacios));
}
?>