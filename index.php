<?php
if(isset($_GET['reserva_exitosa']) && $_GET['reserva_exitosa'] == 1) {
    echo "<div class='mensaje-exito'>¡Reserva realizada con éxito!</div>";
}
?>



<?php include("header.php")?>

  <main>
    <div class="opciones dos-columnas">
      <div class="opcion">
        <a href="./bosque.php">
          <img src="./img/bosque.png" alt="Bosque" class="icono">
        </a>
        <a href="./bosque.php">
          <span class="btn btn-transparente">Bosque</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Lago.php">
          <img src="./img/lago.png" alt="Lago" class="icono">
        </a>
        <a href="./Lago.php">
          <span class="btn btn-transparente" >Lago</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Zona_arqueologica.php">
          <img src="./img/zona_arqueologica.png" alt="Zona Arqueológica" class="icono">
        </a>
        <a href="./Zona_arqueologica.php">
          <span class="btn btn-transparente" >Arqueológica</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Museo.php">
          <img src="./img/museo.png" alt="Museo" class="icono">
        </a>
        <a href="./Museo.php">
          <span class="btn btn-transparente" >Museo</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Desierto.php">
          <img src="./img/desierto.png" alt="Desierto" class="icono">
        </a>
        <a href="./Desierto.php">
          <span class="btn btn-transparente" >Desierto</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./cascadas.php">
          <img src="./img/cascada.png" alt="Cascada" class="icono">
        </a>
        <a href="./cascadas.php">
          <span class="btn btn-transparente" >Cascada</span>
        </a>
      </div>
      <div class="opcion">
        <a href="./Jardin.php">
          <img src="./img/jardin.png" alt="Jardín" class="icono">
        </a>
        <a href="./Jardin.php">
          <span class="btn btn-transparente" >Jardín</span>
        </a>
      </div>
        <div class="opcion">
          <a href="reservacion.php">
            <img src="./img/mapa.png" alt="Cerrar Sesión" class="icono2">
          </a>
          <a href="login.php">
            <span class="btn btn-transparente" >Reservar</span>
          </a>
        </div>
        <div class="opcion">
        <a href="./mapa.php">
          <img src="./img/mapaBueno.png" alt="Mapa" class="icono">
        </a>
        <a href="./mapa.php">
          <span class="btn btn-transparente" >Mapa</span>
        </a>
      </div>
      <div class="opcion">
        <a href="login.php">
          <img src="./img/boton.png" alt="Cerrar Sesión" class="icono2">
        </a>
        <a href="login.php">
          <span class="btn btn-transparente" >Salir</span>
        </a>
      </div>
    </div>
  </main>


  <?php include("footer.php"); ?>
