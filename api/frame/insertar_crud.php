<?php include 'conn.php';?>
<?php

$crud = $_POST['crud'];
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

if ($crud == 'create') {
    $sql = "INSERT INTO datos(id, nombre, apellido, correo) VALUES ('$id', '$nombre', '$apellido', '$correo')";
    if ($conn->query($sql)) {
        echo 'Dato Correctamente';
    } else {
        echo 'No se inserto el dato';
    }
}

