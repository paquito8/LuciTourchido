<?php include("header.php"); ?>

<div class="container">
    <h1 class="mt-5">Reservaciones Registradas</h1>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre Cliente</th>
                    <th>Horario</th>
                    <th>No. Personas</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                </tr>
            </thead>
            <tbody>
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

                // Consulta SQL para obtener las reservaciones registradas
                $sql = "SELECT reservacion.*, lugar.nombre AS nombre_lugar FROM reservacion INNER JOIN lugar ON reservacion.id_lugar = lugar.id_lugar";
                $resultado = $conn->query($sql);

                // Verificar si se encontraron reservaciones
                if ($resultado->num_rows > 0) {
                    // Mostrar las reservaciones
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['nombreCliente'] . "</td>";
                        echo "<td>" . $fila['horario'] . "</td>";
                        echo "<td>" . $fila['no_personas'] . "</td>";
                        echo "<td>" . $fila['costo'] . "</td>";
                        echo "<td>" . $fila['fecha'] . "</td>";
                        echo "<td>" . $fila['nombre_lugar'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    // Si no se encontraron reservaciones, mostrar un mensaje
                    echo "<tr><td colspan='7'>No se encontraron reservaciones.</td></tr>";
                }

                // Cerrar la conexión a la base de datos
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("footer.php"); ?>
