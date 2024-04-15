<?php include("header.php")?>

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

        // Consulta SQL para obtener los destinos del bosque
        $sql = "SELECT * FROM lugar WHERE categoria = 'bosque'";
        $result = $conn->query($sql);

        // Si hay resultados
        if ($result->num_rows > 0) {
          // Iterar sobre cada fila de resultados
          while($row = $result->fetch_assoc()) { 


            $nombre_imagen = $row['imagen_lugar'];
            $ruta_imagen = "" . $nombre_imagen;
            echo '<div class="col-md-4">';
            echo '<div class="card">';
            // Mostrar la imagen
            echo '<img src="' . $ruta_imagen . '" class="img-fluid" style="max-width: 200px; margin: 0 auto;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["nombre"] . '</h5>';
            echo '<p class="card-text">' . $row["descripcion"] . '</p>';
            echo '</div>';

              // Agregar el botón Ver Más
            echo '<div class="col-md-12 text-center">';
            ?>
            <a href="VerMasInformacion.php?id_lugar=<?php echo $row['id_lugar'] ?>">Ver más</a>
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