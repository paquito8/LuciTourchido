<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Obtener los datos del formulario
    $nombreCliente = $_POST["nombreCliente"];
    $horario = $_POST["horario"];
    $no_personas = $_POST["no_personas"];
    $costo = $_POST["costo"];
    $fecha = $_POST["fecha"];
    $id_lugar = $_POST["id_lugar"];

    // Consulta SQL para insertar la reserva en la base de datos
    $sql = "INSERT INTO reservacion (nombreCliente, horario, no_personas, costo , fecha, id_lugar) 
            VALUES ('$nombreCliente', '$horario', $no_personas, '$costo' , '$fecha', '$id_lugar')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        // Si la inserción fue exitosa, muestra un mensaje de éxito
        echo "¡Reserva generada exitosamente!";
        header("Location: index.php?reserva_exitosa=1");
        exit;        
    } else {
        // Si ocurrió un error durante la inserción, muestra el mensaje de error
        echo "Error al generar la reserva: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
} else {
    // Si no se ha enviado el formulario, redirige a la página de reservaciones
    header("Location: reservacion.php");
    exit; // Asegura que el script se detenga después de la redirección
}
?>
