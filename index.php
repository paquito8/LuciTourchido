<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>¿Dónde iremos?</title>
</head>
<body>
  <header>
    <a href="menu.php" class="titulo-enlace"><h1>¿Dónde iremos?</h1></a>
  </header>
  <main>
    <div class="opciones dos-columnas">
      <div class="opcion">
        <a href="./Vistas/bosque.php">
          <img src="./img/bosque.png" alt="Bosque" class="icono">
        </a>
        <a href="./Vistas/bosque.php">
          <span class="btn btn-transparente">Bosque</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/Lago.php">
          <img src="./img/lago.png" alt="Lago" class="icono">
        </a>
        <a href="./Vistas/Lago.php">
          <span class="btn btn-transparente" >Lago</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/Zona_arqueologica.php">
          <img src="./img/zona_arqueologica.png" alt="Zona Arqueológica" class="icono">
        </a>
        <a href="./Vistas/Zona_arqueologica.php">
          <span class="btn btn-transparente" >Arqueológica</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/Museo.php">
          <img src="./img/museo.png" alt="Museo" class="icono">
        </a>
        <a href="./Vistas/Museo.php">
          <span class="btn btn-transparente" >Museo</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/Desierto.php">
          <img src="./img/desierto.png" alt="Desierto" class="icono">
        </a>
        <a href="./Vistas/Desierto.php">
          <span class="btn btn-transparente" >Desierto</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/cascadas.php">
          <img src="./img/cascada.png" alt="Cascada" class="icono">
        </a>
        <a href="./Vistas/cascadas.php">
          <span class="btn btn-transparente" >Cascada</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/Jardin.php">
          <img src="./img/jardin.png" alt="Jardín" class="icono">
        </a>
        <a href="./Vistas/Jardin.php">
          <span class="btn btn-transparente" >Jardín</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/Favoritos.php">
          <img src="./img/favoritos.png" alt="Favoritos" class="icono">
        </a>
        <a href="./Vistas/Favoritos.php">
          <span class="btn btn-transparente" >Favoritos</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Vistas/mapa.php">
          <img src="./img/mapaBueno.png" alt="Mapa" class="icono">
        </a>
        <a href="./Vistas/mapa.php">
          <span class="btn btn-transparente" >Mapa</span>
        </a>
      </div>
      <div class="opcion">
        <a href="cerrar_sesion.php">
          <img src="./img/boton.png" alt="Cerrar Sesión" class="icono2">
        </a>
        <a href="cerrar_sesion.php">
          <span class="btn btn-transparente" >Salir</span>
        </a>
      </div>
    </div>
  </main>


  <?php include("footer.php"); ?>
