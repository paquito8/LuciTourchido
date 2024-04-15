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
                alert('No se encontraron coordenadas para el lugar especificado.');
            }
        })
        .catch(function(error) {
            console.error('Error al obtener coordenadas:', error);
        });
}

// Función para actualizar el mapa con nuevas coordenadas
function actualizarMapaConCoordenadas(latitud, longitud) {
    map.setView([latitud, longitud], 12); // Zoom a nivel 12 (ajústalo según necesites)

    // Eliminar marcadores anteriores, si los hay
    map.eachLayer(function(layer) {
        if (layer instanceof L.Marker) {
            map.removeLayer(layer);
        }
    });

    // Añadir marcador en la nueva ubicación
    L.marker([latitud, longitud]).addTo(map);
}

// Llamar a la función para actualizar el mapa con una ubicación predefinida en Puebla
actualizarMapa('Puebla, Puebla, Mexico');
