<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($host, $user, $password, $db_name);

if ($conn->conect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>