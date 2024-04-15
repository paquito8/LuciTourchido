<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (debes cambiar los valores según tu configuración)
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

    // Obtener el usuario y la contraseña enviados desde el formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar las credenciales en la base de datos
    $sql = "SELECT * FROM usuario WHERE Correo = '$correo' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    // Si se encuentra una coincidencia
    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso, redireccionar a la página de inicio
        session_start(); // Iniciar sesión
        $row = $result->fetch_assoc();
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['edad'] = $row['Edad'];
        $_SESSION['correo'] = $row['Correo'];
        $_SESSION['rol'] = $row['idRole'];
        header("Location: index.php");
        exit(); // Importante: asegúrate de salir del script después de redireccionar
    } else {
        // Usuario o contraseña incorrectos, redireccionar al formulario de inicio de sesión con un mensaje de error
        header("Location: login.php?error=1");
        exit(); // Importante: asegúrate de salir del script después de redireccionar
    }

    // Cerrar conexión a la base de datos
    $conn->close();
}
?>
