<?php
// Conexión a la base de datos (reemplaza estos valores con los de tu base de datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lucitour";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Obtener el ID del lugar de la solicitud AJAX
$id_lugar = $_GET['id_lugar'];

// Consulta SQL para obtener la información del lugar
$sql = "SELECT horario, costo FROM lugar WHERE id_lugar = $id_lugar";
$resultado = $conn->query($sql);

// Verificar si se encontró el lugar
if ($resultado->num_rows > 0) {
    // Obtener los datos del lugar
    $fila = $resultado->fetch_assoc();
    $horario = $fila["horario"];
    $costo = $fila["costo"];

    // Crear un array asociativo con la información del lugar
    $info_lugar = array(
        "horario" => $horario,
        "costo" => $costo
    );

    // Devolver la información del lugar en formato JSON
    echo json_encode($info_lugar);
} else {
    // Si no se encontró el lugar, devolver un mensaje de error
    echo "Error: No se encontró la información del lugar.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
