<?php include("header.php")?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Aquí va el código de manejo del formulario
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

  // Recuperar los valores del formulario
  $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
  $edad = mysqli_real_escape_string($conn, $_POST['edad']);
  $correo = mysqli_real_escape_string($conn, $_POST['correo']);
  $contrasena = mysqli_real_escape_string($conn, $_POST['contrasena']);
  $rol = mysqli_real_escape_string($conn, $_POST['idRole']);

  // Insertar datos en la base de datos
  $sql = "INSERT INTO usuario (nombre, Edad, Correo, Contrasena, idRole) VALUES ('$nombre', '$edad', '$correo', '$contrasena', '$rol')";

  if ($conn->query($sql) === TRUE) {
      echo "Registro exitoso";
      header("Location: ./login.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Cerrar la conexión
  $conn->close();
}
?>

  <style>
    /* Estilos CSS adicionales para la imagen */
    header img {
      max-width: 100px; /* Ajusta el ancho máximo de la imagen */
      height: auto; /* Permite que la altura se ajuste automáticamente */
      vertical-align: middle; /* Centra verticalmente la imagen */
    }
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
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
  <main>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" require>
        <label for="Edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="12" max="99" require>
        <label for="usuario">Correo:</label>
        <input type="text" id="correo" name="correo" required>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <label for="rol">Role</label>
        <select name="idRole" id="idRole" require>
            <option value="2">Viajero</option>
        </select>
        <br>
        <button type="submit" class="button">Registrar</button>
        <br>
      <a href="./login.php" class="enlace text-center">Tengo cuenta</a>
    </form>
  </main>

<?php include("footer.php")?>