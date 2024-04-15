<?php include("header.php");?>
<?php
// Conexión a la base de datos (reemplaza estos valores con los de tu base de datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lucitour";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Verifica si se proporcionó un ID de lugar válido en la URL
if (isset($_GET['id_lugar']) && is_numeric($_GET['id_lugar'])) {
    // Obtén el ID del lugar de la URL
    $id_lugar = $_GET['id_lugar'];

    // Consulta SQL para obtener la información del lugar con el ID proporcionado
    $sql = "SELECT * FROM lugar WHERE id_lugar = $id_lugar";
    $resultado = $conn->query($sql);

    // Verifica si se encontró el lugar
    if ($resultado->num_rows > 0) {
        // Muestra la información del lugar
        $fila = $resultado->fetch_assoc();
        $nombre = $fila["nombre"];
        $descripcion = $fila["descripcion"];
        $direccion = $fila["direccion"];
        $horario = $fila["horario"];
        $temporada = $fila["temporada"];
        $costo = $fila["costo"];
        $categoria = $fila["categoria"];
        $imagen_lugar = $fila["imagen_lugar"];
?>
        <!-- Muestra la información detallada del lugar -->
        <div class="container">
            <h1 class="mt-5"><?php echo $nombre; ?></h1>
            <div class="card">
                <img src="<?php echo $imagen_lugar; ?>" class="card-img-top" alt="<?php echo $nombre; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nombre; ?></h5>
                    <p class="card-text"><?php echo $descripcion; ?></p>
                    <p class="card-text"><strong>Dirección:</strong> <?php echo $direccion; ?></p>
                    <p class="card-text"><strong>Horario:</strong> <?php echo $horario; ?></p>
                    <p class="card-text"><strong>Temporada:</strong> <?php echo $temporada; ?></p>
                    <p class="card-text"><strong>Costo:</strong> <?php echo $costo; ?></p>
                    <p class="card-text"><strong>Categoría:</strong> <?php echo $categoria; ?></p>
                </div>
            </div>
        </div>
<?php
    } else {
        // Si no se encontró el lugar, muestra un mensaje de error
        echo "No se encontró el lugar solicitado.";
    }
} else {
    // Si no se proporcionó un ID de lugar válido en la URL, muestra un mensaje de error
    echo "ID de lugar no válido.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>


<?php include("footer.php");?>
