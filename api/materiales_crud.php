<?php
include 'assets/conn.php';

$crud = $_POST['crud'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];

if ($crud == 'create') {
    $sql = "INSERT INTO materiales (codigo, nombre, direccion, tipo, cantidad, estado) VALUES ('$codigo', '$nombre', '$direccion', '$tipo', '$cantidad', '$estado')";
    if ($conn->query($sql)) {
        echo "Guardado";
    } else {
        echo "Error";
    }
} elseif($crud == 'update') {
    $id = $_POST['id'];
    $sql = "UPDATE materiales SET codigo = '$codigo', nombre = '$nombre', direccion = '$direccion', tipo = '$tipo', cantidad = '$cantidad', estado = '$estado' WHERE id = '$id'";
    if ($conn->query($sql)) {
        echo "Actualizado";
    } else {
        echo "Error";
    }
} elseif($crud == 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM materiales WHERE id = '$id'";
    if ($conn->query($sql)) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}

header('location: materiales.php');
