<?php
$port = 'localhost';
$user = 'root';
$pass = '';
$db = 'prueba';

$conn = mysqli_connect($port, $user, $pass, $db);
if($conn->connect_error){
    echo 'Conexion fallida';
} 

?>