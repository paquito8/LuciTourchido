<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Bosque</title>
</head>
<body>
  <header>
    <h1>Bosque</h1>
  </header>
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
        $sql = "SELECT * FROM lugar WHERE categoria = 'Arqueologica'";
        $result = $conn->query($sql);

        // Si hay resultados
        if ($result->num_rows > 0) {
          // Iterar sobre cada fila de resultados
          while($row = $result->fetch_assoc()) {


            $nombre_imagen = $row['imagen_lugar'];
            $ruta_imagen = "./img/" . $nombre_imagen;
            echo '<div class="col-md-4">';
            echo '<div class="card">';
            // Mostrar la imagen
            echo '<img src="' . $ruta_imagen . '" class="img-fluid" style="max-width: 200px; margin: 0 auto;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["nombre"] . '</h5>';
            echo '<p class="card-text">' . $row["descripcion"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
          // Agregar el botón Ver Más
          echo '<div class="col-md-12 text-center">';
          echo '<a href="VerMasInformacion.php" class="btn btn-primary">Ver Más</a>';
          echo '</div>';
        } else {
          echo "No se encontraron destinos.";
        }
        $conn->close();
        ?>
      </div>
    </div>
  </main>


  <?php include("footer.php"); ?>