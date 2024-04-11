<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estacion = $_POST['estacion'];

    $sqlEspacios = "SELECT * FROM espacio_public WHERE estacionn_mexi = '$estacion' AND disponibilidad = 'Disponible'";
    $resultEspacios = mysqli_query($conexion, $sqlEspacios);
    $espacios = array();
    while ($rowEspacio = mysqli_fetch_assoc($resultEspacios)) {
        $espacios[] = $rowEspacio;
    }

    echo json_encode(array('espacios' => $espacios));
}

?>
