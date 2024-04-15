



<?php include("header.php"); ?>

<div class="container">
    <h1 class="mt-5">Generar Reservación</h1>
    <form action="procesar_reservacion.php" method="POST">
        <div class="form-group">
            <label for="nombreCliente">Nombre del Cliente:</label>
            <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" required>
        </div>
        <div class="form-group">
            <label for="lugar">Lugar:</label>
            <select class="form-control" id="lugar" name="id_lugar" required>
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

                // Consulta SQL para obtener todos los lugares
                $sql = "SELECT id_lugar, nombre FROM lugar";
                $resultado = $conn->query($sql);

                // Verificar si se encontraron resultados
                if ($resultado->num_rows > 0) {
                    // Mostrar las opciones de lugar en un ciclo
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<option value='" . $row["id_lugar"] . "'>" . $row["nombre"] . "</option>";
                    }
                }

                // Cerrar la conexión a la base de datos
                $conn->close();
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="horario">Horario:</label>
            <input type="text" class="form-control" id="horario" name="horario" readonly>
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input type="text" class="form-control" id="costo" name="costo" readonly>
        </div>
        <div class="form-group">
            <label for="no_personas">Número de Personas:</label>
            <input type="number" class="form-control" id="no_personas" name="no_personas" min="1" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <button type="submit" class="btn btn-primary">Generar Reservación</button>
    </form>
</div>

<script>
    // Función para obtener el horario y el costo del lugar seleccionado
    document.getElementById('lugar').addEventListener('change', function() {
        var lugarId = this.value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                document.getElementById('horario').value = data.horario;
                document.getElementById('costo').value = data.costo;
            }
        };
        xhr.open('GET', 'obtener_info_lugar.php?id_lugar=' + lugarId, true);
        xhr.send();
    });
</script>

<?php include("footer.php"); ?>
