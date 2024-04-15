<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-2Q7Uo1Jy3GyW2cDqOLdsLR9xQXx5jqm7yZVo2gO3MDgZJz4eVpIv0nsDvYKdSZFddQQ9ejV0Y2LHcUG7sQUb6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>LuciTour</title>
  <style>
    /* Estilo personalizado para el menú desplegable */
    .dropdown-menu {
      left: auto !important; /* Reiniciar la posición */
      right: 0; /* Posición absoluta desde la derecha */
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        LuciTour
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="bosque.php">Bosque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lago.php">Lago</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="zona_arqueologica.php">Zona Arqueológica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="museo.php">Museo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="desierto.php">Desierto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cascadas.php">Cascada</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jardin.php">Jardín</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservacion.php">Reservar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mapa.php">Mapa</a>
          </li>
        </ul>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="./img/Logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <!-- Aquí puedes incluir los datos del usuario -->
            <a class="dropdown-item" href="VerPerfil.php"><img src="./img/Logo.png" alt="" width="50px">Perfil</a>
            <a class="dropdown-item" href="mis_reservaciones.php"><img src="./img/herramientas.png" alt="" width="65px">Mis reservaciones</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
