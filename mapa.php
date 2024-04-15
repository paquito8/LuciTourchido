<?php include("header.php")?>

    <link rel="stylesheet" href="./css/mapa.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        button.boton {
            padding: 10px;
            background-color: #ffffff;
            color: rgb(58,50, 54);
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Para quitar el subrayado */
        }
  </style>
    <h1 class="titulo">Ubica tu destino</h1>
    <form class="text-center">
        <label for="nombre">Ingrese el nombre de su destino:</label>
        <input type="text" id="nombre" placeholder="Las Vigas Tlaxcala" required>
        <button type="button" onclick="actualizarMapa()" class="boton"><img src="./img/buscar.png" alt="" width="50px">Buscar destino</button>
    </form>
    <div id="mapa"></div>

    <!-- Aquí colocamos el script al final del cuerpo para asegurar que el DOM esté completamente cargado -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="./js/script.js"></script>
    
<?php include("footer.php")?>
