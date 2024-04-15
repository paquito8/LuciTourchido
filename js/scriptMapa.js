// script.js
var map = L.map('mapa').setView([19.0414, -98.2063], 8); // Centrado en Puebla

// Capa base de OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Función para actualizar el mapa
function actualizarMapa() {
    var nombre = document.getElementById('nombre').value;
    obtenerCoordenadas(nombre);
}

// Función para obtener coordenadas basadas en el nombre del lugar
function obtenerCoordenadas(nombre) {
    // Llamada AJAX al servicio de geocodificación de OpenStreetMap (Nominatim)
    var url = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(nombre);

    fetch(url)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.length > 0) {
                var latitud = parseFloat(data[0].lat);
                var longitud = parseFloat(data[0].lon);
                actualizarMapaConCoordenadas(latitud, longitud);
            } else {
                
            }
        })
        .catch(function(error) {
            console.error('Error al obtener coordenadas:', error);
        });
}

var marker; // Variable global para almacenar el marcador

function actualizarMapaConCoordenadas(latitud, longitud) {
    console.log("Nuevas coordenadas recibidas:", latitud, longitud); // Rastrear la llamada a la función

    map.setView([latitud, longitud], 12); // Zoom a nivel 12 (ajústalo según necesites)

    // Eliminar marcador existente, si lo hay
    if (marker) {
        map.removeLayer(marker);
    }

    // Añadir el nuevo marcador
    marker = L.marker([latitud, longitud]).addTo(map);
}