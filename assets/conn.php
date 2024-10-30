<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "umg");

$conn->set_charset("utf8");

if ($conn->connect_error) {
    die($conn->connect_error);
}
