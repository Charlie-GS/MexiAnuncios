<?php
ob_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Ventas</title>
</head>

<body>
    <img style="height: 40px; width: 210px;" src="http://localhost/Nova/Nova/assets/img/logo-mexi.jpg">
    <h1>Reporte de ventas mensual</h1>
    <table class="table table-striped table-hover" style="border: 3px black solid;">
        <thead style="border-bottom: 3px black solid;">
            <tr>
                <th style="padding-left: 30px; font-size: 25px">Mes</th>
                <th style="padding-left: 30px; font-size: 25px"><b>Espacios vendidos</b></th>
                <th style="padding-left: 30px; font-size: 25px">Total</th>
            </tr>
        </thead>
        <tbody>


<?php
$sql = "SELECT MONTH(fecha_inicio) AS mes, 
COUNT(*) AS total_rentas, 
SUM(espacios.precio) AS total_dinero 
FROM clientes 
JOIN espacio_public AS espacios ON clientes.num_espacio = espacios.id_espacio 
GROUP BY mes 
ORDER BY mes ASC";
$result = mysqli_query($conexion, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td style="padding-left: 30px; font-size: 20px"><b><?php echo obtenerNombreMes($row['mes']); ?></b></td>
        <td style="padding-left: 50px; font-size: 20px"><b><?php echo $row['total_rentas']; ?></b></td>
        <td style="padding-left: 30px; font-size: 20px"><b><?php echo '$' . $row['total_dinero']; ?></b></td>
    </tr>
<?php
}
?>

        </tbody>
    </table>
</body>

</html>

<?php
$html = ob_get_clean();

require_once 'libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml("$html");

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream('reportes_.pdf', array("Attachment" => true));

// Función para obtener el nombre del mes a partir de su número
function obtenerNombreMes($mesNumero)
{
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    return $meses[intval($mesNumero) - 1];
}
?>