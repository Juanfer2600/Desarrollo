<?php
require_once 'assets/conn.php';
ob_start();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $correlativo = $id;

    $sqlcat = "SELECT * FROM catedraticos WHERE id = '$id'";
    $resultcat = $conn->query($sqlcat);
    $rowcat = $resultcat->fetch_assoc();
    $nombre = $rowcat['nombre'];
    $direccion = $rowcat['direccion'];
    $telefono = $rowcat['telefono'];
    $email = $rowcat['email'];
    $cursos = $rowcat['cursos'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Reporte</title>
    <style>
        @page {
            margin: 5px;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            font-size: 10px;
        }

        .table td,
        .table th {
            padding: 0.75rem;
        }

        .table thead th {
            vertical-align: bottom;
            background-color: #ff2323;
            border-bottom: 2px solid #595959;
            color: #FFFFFF;
        }

        .table td {
            vertical-align: middle;
            background-color: #f0f0f0;
        }

        .table-sm td,
        .table-sm th {
            padding: 0.3rem;
        }

        .table tfoot td {
            vertical-align: middle;
            background-color: #8f8834;
            color: #FFFFFF;
            font-size: 14px;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .details-table,
        .payment-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f0f0f0;
            color: #000000;
            margin-bottom: 10px;
        }

        .header-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ff2323;
            font-size: 18px;
            color: #FFFFFF;
            margin-bottom: 10px;
        }

        .header-table td {
            padding: 10px;
        }

        .details-table td,
        .payment-table td {
            padding: 10px;
            vertical-align: top;
            /* Alinear al borde superior */
        }

        .header-table img {
            width: 180px;
        }
    </style>
</head>

<body>
    <table class="header-table text-center">
        <td>
            <strong>Universidad Mariano Galvez</strong><br>
        </td>
    </table>

    <table class="details-table">
        <tr>
            <td>
                <strong>ID:</strong><br><?php echo $correlativo; ?>
            </td>
            <td>
                <strong>Nombre:</strong><br><?php echo $nombre; ?>
            </td>
            <td>
                <strong>Dirección:</strong><br><?php echo $direccion; ?>
            </td>
        </tr>
        <tr>
            <td>
                <strong>Correo:</strong><br><?php echo $email; ?>
            </td>
            <td>
                <strong>Curso Asignado:</strong><br><?php echo $cursos; ?>
            </td>
            <td>
                <strong>Teléfono:</strong><br><?php echo $telefono; ?>
            </td>
        </tr>
    </table>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM alumnos where catedratico_padre_id = '$id'";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>" . $row['nombre'] . "</td>
                                <td>" . $row['direccion'] . "</td>
                                <td class='text-center'>" . $row['telefono'] . "</td>
                                <td>" . $row['email'] . "</td>
                            </tr>
                            ";
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>

<?php
$HTML = ob_get_clean();
require_once("vendor/autoload.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$opciones = $dompdf->getOptions();
$opciones->set(array("isRemoteEnabled" => true));
$opciones->set(array("isPhpEnabled" => true));
$dompdf->setOptions($opciones);
$dompdf->loadHtml($HTML);
$dompdf->setPaper('letter', 'portrait');
$dompdf->render();
$dompdf->stream("reporte.pdf", array("Attachment" => false));
?>