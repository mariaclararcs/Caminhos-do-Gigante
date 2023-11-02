<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css" type="text/css" />
    <title>Mapa</title>
</head>
<body>
    <style>
        .map{
            height: 400px;
            width: 100%;
        }
    </style>

    <h2>Você está aqui</h2>
    <p></p>
    <div id="map" class="map"></div>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
    <script>
        function renderizarMapa(latitude, longitude){
            var map = new ol.Map({
                target: 'map',
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM()
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat([longitude, latitude]),
                    zoom: 14
                })
            });
        }

        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(position){
                document.querySelector('p').innerHTML = "Latitude = " + position.coords.latitude + " Longitude = " + position.coords.longitude;
                renderizarMapa(position.coords.latitude, position.coords.longitude);
            })
        }
    </script>
</body>
</html>
