<?php
$host = 'localhost';
$db = 'test';
$user = 'root';
$password = '';

$conexion = mysqli_connect($host, $user, $password, $db);

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>
