<?php
  // Conexión a la base de datos (debes cambiar los valores)
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lucitour";

  // Crear conexión
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar conexión
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Inicio de sesión</title>
  <style>
    /* Estilos CSS adicionales para la imagen */
    header img {
      max-width: 100px; /* Ajusta el ancho máximo de la imagen */
      height: auto; /* Permite que la altura se ajuste automáticamente */
      vertical-align: middle; /* Centra verticalmente la imagen */
    }
  </style>
</head>
<body>
  <header>
    <h1><img src="./img/logo.png" alt="Logo"> LuciTour</h1>
  </header>
  <main>
    <form action="validar_login.php" method="post">
      <label for="Correo">Correo:</label>
      <input type="text" id="corre" name="correo" required>
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>
      <button type="submit">Ingresar</button>
    </form>
    <?php
    // Verificar si hay un error de inicio de sesión
    if (isset($_GET["error"]) && $_GET["error"] == 1) {
      echo "<p class='error'>Usuario o contraseña incorrectos.</p>";
    }
    ?>
  </main>
</body>
</html>
