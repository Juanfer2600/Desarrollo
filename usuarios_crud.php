<?php include 'assets/conn.php'; 

$crud = $_POST['crud'];
$username = $_POST['username'];
$password = $_POST['password'];
$roles = $_POST['roles'];

if($crud == 'create'){
    $sql = "INSERT INTO users (username, password, user_type) VALUES ('$username', '$password', '$roles')";
    if ($conn->query($sql)) {
        echo "Guardado";
    } else {
        echo "Error";
    }
} elseif($crud == 'edit'){
    $id = $_POST['id'];
    $sql = "UPDATE users SET username = '$username', password = '$password', user_type = '$roles' WHERE id = '$id'";
    if ($conn->query($sql)) {
        echo "Actualizado";
    } else {
        echo "Error";
    }
} elseif($crud == 'delete'){
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    if ($conn->query($sql)) {
        echo "Eliminado";
    } else {
        echo "Error";
    }
}

header('location: usuarios.php');

?>