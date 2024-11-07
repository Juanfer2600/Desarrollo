<?php
include 'assets/conn.php';

$crud = $_POST['crud'];
$fecha_inicio = $_POST['fecha_inicio'];
$nombre = $_POST['nombre'];
$descripcion = empty($_POST['descripcion']) ? 'N/A' : $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$estado = $_POST['estado'];
$presupuesto = $_POST['presupuesto'];
$fecha_fin = $_POST['fecha_fin'];

if($crud == 'create'){
    $sql = "INSERT INTO proyectos (fecha_inicio, nombre, descripcion, estado, presupuesto, ubicacion, fecha_fin) VALUES ('$fecha_inicio', '$nombre', '$descripcion', '$estado', '$presupuesto', '$ubicacion', '$fecha_fin')";
    $conn->query($sql);

} elseif($crud == 'edit'){
    $id = $_POST['id'];
    $sql = "UPDATE proyectos SET fecha_inicio = '$fecha_inicio', nombre = '$nombre', descripcion = '$descripcion', estado = '$estado', presupuesto = '$presupuesto', ubicacion = '$ubicacion', fecha_fin = '$fecha_fin' WHERE id = '$id'";
    $conn->query($sql);

} elseif($crud == 'delete'){
    $id = $_POST['id'];
    $sql = "DELETE FROM proyectos WHERE id = '$id'";
    $conn->query($sql);
}

header('location: proyectos.php');

