<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");							
?>

<doctype html5>
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
        var map = L.map('map').setView([6.1164, 125.1716], 15);

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        map.locate({setView: true, maxzoom:20}) 
        .on('locationfound', function(e){
            var marker = L.marker([e.latitude, e.longitude]).bindPopup('Your are here :)');
            var circle = L.circle([e.latitude, e.longitude], e.accuracy/2, {
                weight: 1,
                color: 'blue',
                fillColor: '#cacaca',
                fillOpacity: 0.2
            });
            map.addLayer(marker);
            map.addLayer(circle);
        })
       .on('locationerror', function(e){
            console.log(e);
            alert("Location access denied.");
        });

        
        //pin location
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            var popup = `<form action = "" method = "POST">
                            <div class = "form-group"> 
                                <label for = "name"> Property Name </label>
                                <input type = "text" name = "name" class = "form-control" placeholder = "">
                            </div>
                            <input type = "hidden" name = "lat" value = "${lat}">
                            <input type = "hidden" name = "lng" value = "${lng}">
                            <br>
                            <a href = "ownerProperty.php?lat=${lat}&lng=${lng}><button type = "button" class = "btn btn-primary"> Submit </button></a>
                        </form>`;

            var singleMarker = L.marker([lat, lng], { icon: myMarker, draggable: true }).bindPopup(popup);
            singleMarker.addTo(map)

            var geocodeService = L.esri.Geocoding.geocodeService();
            geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
    L.marker(result.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
  });
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

        $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=47.217954&lon=-1.552918', function(data){
    console.log(data.address.road);
});
    </script>
