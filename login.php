<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Inicio de sesión</title>
  <style>
    /* Estilos CSS adicionales para la imagen */
    header img {
      max-width: 100px; /* Ajusta el ancho máximo de la imagen */
      height: auto; /* Permite que la altura se ajuste automáticamente */
      vertical-align: middle; /* Centra verticalmente la imagen */
    }
  </style>
  <style>
    a.enlace {
      padding: 10px;
      background-color: #2ecc71;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none; /* Para quitar el subrayado */
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
      <br>
      <a href="./Register.php" class="enlace text-center">Registrarse</a>
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
