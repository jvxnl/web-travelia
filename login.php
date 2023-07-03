<?php
    require_once 'conexion.php';
    
    $username = $_POST['nombre'];
    $password = $_POST['password'];
    $query = "SELECT `nombre`, `password` FROM `usuarios` WHERE nombre='$username' AND password='$password'";
    $result = $conexion->query($query);
    if ($result->num_rows > 0) {
        header("Location: index.html");
            exit;
    } else {
        echo 'Inicio de sesión fallido. Verifica tu usuario y contraseña.';
    }
    $conexion->close();
?>
