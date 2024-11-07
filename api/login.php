<?php
include 'assets/conn.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $query = $conn->query($sql);

    if ($query->num_rows < 1) {
        $_SESSION['sa-error'] = "Usuario no encontrado";
    } else {
        $row = $query->fetch_assoc();
        if ($row['password'] != $password) {
            $_SESSION['sa-error'] = "Contraseña incorrecta";
        } else {
            $_SESSION['username'] = $username;
            header('Location: home.php');
            exit();
        }
    }
    header('Location: index.php');
    exit();
} else {
    $_SESSION['sa-error'] = "Ingresar Credenciales";
}
