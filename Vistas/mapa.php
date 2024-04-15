<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/mapa.css">
</head>
<body>
    <h1 class="titulo">Ubica tu destino</h1>
    <form class="text-center">
        <label for="nombre">Ingrese el nombre de su destino:</label>
        <input type="text" id="nombre" placeholder="Las Vigas Tlaxcala" required>
        <button type="button" onclick="actualizarMapa()">Actualizar Mapa</button>
    </form>
    <div id="mapa"></div>

    <!-- Aquí colocamos el script al final del cuerpo para asegurar que el DOM esté completamente cargado -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="../js/script.js"></script>
</body>
</html>
