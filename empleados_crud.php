<?php
include 'assets/conn.php';

$crud = $_POST['crud'];
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'] ;
$proyectos = empty($_POST['proyectos']) ? 'N/A' : $_POST['proyectos'];
$tareas = empty($_POST['tareas']) ? 'N/A' : $_POST['tareas'];
$materiales = empty($_POST['materiales']) ? 'N/A' : $_POST['materiales'];

if($crud == 'create'){
    $sql = "INSERT INTO empleados (fecha, nombre, proyectos, tareas, materiales) VALUES ('$fecha', '$nombre', '$proyectos', '$tareas', '$materiales')";
    if($conn->query($sql)){
        echo "Guardado";
    } else {
        echo "Error";
    }
} elseif($crud == 'edit'){
    $id = $_POST['id'];
    $sql = "UPDATE empleados SET fecha = '$fecha', nombre = '$nombre', proyectos = '$proyectos', tareas = '$tareas', materiales = '$materiales' WHERE id = '$id'";
    if($conn->query($sql)){
        echo "Actualizado";
    } else {
        echo "Error";
    }
} elseif($crud == 'delete'){
    $id = $_POST['id'];
    $sql = "DELETE FROM empleados WHERE id = '$id'";
    if($conn->query($sql)){
        echo "Eliminado";
    } else {
        echo "Error";
    }
} else{
    echo "Error";
}

header('location: empleados.php');
