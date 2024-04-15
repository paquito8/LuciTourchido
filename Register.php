<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
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
    <form action="menu.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="Edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="12" max="99">
        <label for="usuario">Correo:</label>
        <input type="text" id="correo" name="correo" required>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <label for="rol">Role</label>
        <select name="rol" id="rol">
            <option value="1">Administrador</option>
            <option value="2">Viajero</option>
        </select>
        <button type="submit">Registrar</button>
    </form>
  </main>
</body>
</html>
    