<?php include("header.php")?>
<?php
session_start(); // Iniciar sesión si aún no está iniciada

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
    
    // Verificar si hay una sesión activa
    if(isset($_SESSION['nombre'])) {
        // Si hay una sesión activa, mostrar los datos del usuario
        $nombre = $_SESSION['nombre'];
        $edad = $_SESSION['edad'];
        $correo = $_SESSION['correo'];
        $rol = $_SESSION['rol'];
        
        $sql = "SELECT id_usuario, nombre, Edad, Correo FROM usuario";
        $result = $conn->query($sql);
        // Agregar var_dump para verificar el contenido de los datos recuperados de la base de datos
        $row = $result->fetch_assoc();
    } else {
        // Si no hay una sesión activa, redirigir al usuario a la página de inicio de sesión
        header("Location: ./login.php");
        exit(); // Asegura que el script se detenga después de redirigir al usuario
    }
?>

    <div class="text-center">
        <img src="./img/Logo.png" class="rounded" alt="" width="250px">
    </div>
    <h1 class="text-center">Hola <?php echo $nombre; ?></h1>
    <div class="text-center">
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?></p>
        <p><strong>Correo:</strong> <?php echo $correo ?></p>
    </div>

<?php include("footer.php")?>