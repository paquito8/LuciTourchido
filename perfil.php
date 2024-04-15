<?php
// Inicia la sesión si aún no se ha iniciado
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    // Si el usuario no ha iniciado sesión, redirige al usuario al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos (reemplaza estos valores con los de tu base de datos)
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "basededatos";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Obtén el ID de usuario de la sesión
$id_usuario = $_SESSION['id_usuario'];

// Consulta SQL para obtener los datos del usuario
$sql = "SELECT * FROM usuarios WHERE Id_usuario = $id_usuario";
$resultado = $conn->query($sql);

// Verifica si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Muestra los datos del usuario
    while ($fila = $resultado->fetch_assoc()) {
        $nombre = $fila["nombre"];
        $edad = $fila["Edad"];
        $correo = $fila["Correo"];
    }
} else {
    // Si no se encontraron resultados, muestra un mensaje de error
    echo "No se encontraron datos del usuario.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>

<?php include("header.php"); ?>

<div class="container">
    <h1 class="mt-5">Perfil de Usuario</h1>

    <p>ID de Usuario: <?php echo $id_usuario; ?></p>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Edad: <?php echo $edad; ?></p>
    <p>Correo Electrónico: <?php echo $correo; ?></p>

    <h2 class="mt-5">Cambiar Contraseña</h2>
    <form action="cambiar_contrasena.php" method="post">
        <div class="form-group">
            <label for="contrasena_actual">Contraseña Actual:</label>
            <input type="password" class="form-control" id="contrasena_actual" name="contrasena_actual" required>
        </div>
        <div class="form-group">
            <label for="nueva_contrasena">Nueva Contraseña:</label>
            <input type="password" class="form-control" id="nueva_contrasena" name="nueva_contrasena" required>
        </div>
        <div class="form-group">
            <label for="confirmar_contrasena">Confirmar Nueva Contraseña:</label>
            <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required>
        </div>
        <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
    </form>
</div>

<?php include("footer.php"); ?>
