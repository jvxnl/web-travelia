<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Error de Registro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .error-container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }
    h1 {
      color: #ff0000;
      font-size: 24px;
      margin-bottom: 10px;
    }
    p {
      color: #555;
      font-size: 16px;
      margin-bottom: 20px;
    }
    a {
      color: #fff;
      background-color: #ff0000;
      border-radius: 3px;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    a:hover {
      background-color: #cc0000;
    }
  </style>
</head>
<?php
  require_once('conexion.php');

  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
  $sql = "SELECT * FROM usuarios WHERE nombre='$nombre' OR email='$email'";
  $resultado = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($resultado) > 0) {
      echo '<div class="error-container">';
      echo 'El nombre o email ya están registrados. Por favor, ingresa un nombre o email diferente. <a href="registro.html">Volver página</a>';
      echo '<script> setTimeout(function() { window.location.href = "registro.html"; }, 4000); </script>';
  } else {
      $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$pass')";
      if (mysqli_query($conexion, $sql)) {
          header("Location: index.html");
          exit;
      } else {
          echo '<div class="alert alert-danger" role="alert"> Error al registrar el usuario: ' . mysqli_error($conexion) . ' </div>';
      }
  }
  mysqli_close($conexion);
?>
