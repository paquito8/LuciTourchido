<?php include("header.php")?>
<style>
        a.enlace {
            padding: 10px;
            background-color: rgb(58,50, 54);
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Para quitar el subrayado */
        }
  </style>
<main>
  <div class="container">
    <div class="row">
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

      // Consulta SQL para obtener los destinos del desierto
      $sql = "SELECT * FROM lugar WHERE categoria = 'desierto'";
      $result = $conn->query($sql);

      // Si hay resultados
      if ($result->num_rows > 0) {
        // Iterar sobre cada fila de resultados
        while($row = $result->fetch_assoc()) { 

          $nombre_imagen = $row['imagen_lugar'];
          $ruta_imagen = "" . $nombre_imagen;
          echo '<div class="col-md-4 mb-4">'; // Agregamos la clase mb-4 para el margen inferior
          echo '<div class="card p-3">';
          // Mostrar la imagen
          echo '<img src="' . $ruta_imagen . '" class="img-fluid" style="max-width: 200px; margin: 0 auto;">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . $row["nombre"] . '</h5>';
          echo '<p class="card-text">' . $row["descripcion"] . '</p>';
          echo '</div>';

            // Agregar el botón Ver Más
          echo '<div class="col-md-12 text-center">';
          ?>
          <a href="VerMasInformacion.php?id_lugar=<?php echo $row['id_lugar'] ?>" class="enlace btn btn-sm">Ver más</a>
          <?php
          echo '</div>';

          echo '</div>';
          echo '</div>';
        }
      } else {
        echo "No se encontraron destinos.";
      }
      $conn->close();
      ?>
    </div>
  </div>
</main>

<?php include("footer.php"); ?>
