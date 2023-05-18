<doctype html>
<html> 
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Map</title>

        <link href="css/bootstrap.min5.css" rel="stylesheet">
	    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <style> 
            #map {
                width: 100%;
                height: 100vh;
            }

            .leaflet-popup-content {
                width: 250px;
            }
        </style>
    </head>

    <body> 
        <div id = "map">
        </div>
        
    
    </body>

</html>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="./leaflet_data/point.js"> </script>

    <script> 
        var map = L.map('map').setView([6.1164, 125.1716], 13);

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        //pin location
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            var popup = `<form action = "pinAddress.php" method = "POST">
                            <div class = "form-group"> 
                                <label for = "name"> Property Name </label>
                                <input type = "text" name = "name" class = "form-control" placeholder = "">
                            </div>
                            <input type = "hidden" name = "lat" value = "${lat}">
                            <input type = "hidden" name = "lng" value = "${lng}">
                            <br>
                            <button type = "submit" class = "btn btn-primary" name = "submit-address"> Submit </button>
                        </form>`;

            var singleMarker = L.marker([lat, lng], { icon: myMarker, draggable: true }).bindPopup(popup);
            singleMarker.addTo(map)
        })

        var myMarker = L.icon({
            iconUrl: 'images/red_marker.png',
            iconSize: [40,40]
        });

        /*
        var singleMarker = L.marker([6.1164, 125.1716], { icon: myMarker, draggable: true });
        var popup = singleMarker.bindPopup('This is my location.' + singleMarker.getLatLng()).openPopup();
        popup.addTo(map);*/

        //search location
        L.Control.geocoder().addTo(map);

        //var pointData = L.geoJSON(pointJson).addTo(map);
    </script>
