<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa de Google Maps</title>
  <style>
    /* Agrega cualquier estilo adicional que necesites */
    .mapa-container {
      border-radius: 10px; /* Esquinas redondeadas */
      overflow: hidden; /* Oculta cualquier desbordamiento */
      width: 350px; /* Ancho del contenedor del mapa */
      height: 350px; /* Altura del contenedor del mapa */
    }
  </style>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h2 class="titulo-enlace titulos">Ubicación de los lugares</h2>
  <div class="container">
    <!-- <input id="search-input" type="text" placeholder="Buscar lugares"> -->
    <div class="mapa-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30121.70092621782!2d-98.27528389257064!3d19.316578114346107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd96a7e30900b%3A0x72cb50aa9d5d00c8!2sTlaxcala%20de%20Xicoht%C3%A9ncatl%2C%20Tlax.!5e0!3m2!1ses-419!2smx!4v1713127155849!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <script>
    function initMap() {
      const map = new google.maps.Map(
        document.getElementById("map") as HTMLElement,
        {
          zoom: 3,
          center: { lat: -28.024, lng: 140.887 },
        }
      );

      const infoWindow = new google.maps.InfoWindow({
        content: "",
        disableAutoPan: true,
      });

      // Create an array of alphabetical characters used to label the markers.
      const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

      // Add some markers to the map.
      const markers = locations.map((position, i) => {
        const label = labels[i % labels.length];
        const marker = new google.maps.Marker({
          position,
          label,
        });

        // markers can only be keyboard focusable when they have click listeners
        // open info window when marker is clicked
        marker.addListener("click", () => {
          infoWindow.setContent(label);
          infoWindow.open(map, marker);
        });

        return marker;
      });

      // Add a marker clusterer to manage the markers.
      new MarkerClusterer({ markers, map });
    }

    const locations = [
      { lat: -31.56391, lng: 147.154312 },
      { lat: -33.718234, lng: 150.363181 },
      { lat: -33.727111, lng: 150.371124 },
      { lat: -33.848588, lng: 151.209834 },
      { lat: -33.851702, lng: 151.216968 },
      { lat: -34.671264, lng: 150.863657 },
      { lat: -35.304724, lng: 148.662905 },
      { lat: -36.817685, lng: 175.699196 },
      { lat: -36.828611, lng: 175.790222 },
      { lat: -37.75, lng: 145.116667 },
      { lat: -37.759859, lng: 145.128708 },
      { lat: -37.765015, lng: 145.133858 },
      { lat: -37.770104, lng: 145.143299 },
      { lat: -37.7737, lng: 145.145187 },
      { lat: -37.774785, lng: 145.137978 },
      { lat: -37.819616, lng: 144.968119 },
      { lat: -38.330766, lng: 144.695692 },
      { lat: -39.927193, lng: 175.053218 },
      { lat: -41.330162, lng: 174.865694 },
      { lat: -42.734358, lng: 147.439506 },
      { lat: -42.734358, lng: 147.501315 },
      { lat: -42.735258, lng: 147.438 },
      { lat: -43.999792, lng: 170.463352 },
    ];

    declare global {
      interface Window {
        initMap: () => void;
      }
    }
    window.initMap = initMap;
  </script>
  <!-- Incluir la API de Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap"></script>
</body>
</html>