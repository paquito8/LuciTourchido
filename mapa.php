<?php include("header.php")?>
    <h1 class="titulo">Ubica tu destino</h1>
    <form class="text-center">
        <label for="nombre">Ingrese el nombre de su destino:</label>
        <input type="text" id="nombre" placeholder="Las Vigas Tlaxcala" required>
        <button type="button" onclick="actualizarMapa()">Actualizar Mapa</button>
    </form>
    <div id="mapa">
        
    </div>

    <!-- Aquí colocamos el script al final del cuerpo para asegurar que el DOM esté completamente cargado -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="../js/script.js"></script>
    
<?php include("footer.php")?>
