<doctype html>
<html> 
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Map</title>

	    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <style> 
            #map {
                width: 100%;
                height: 100vh;
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

        var myMarker = L.icon({
            iconUrl: 'images/red_marker.png',
            iconSize: [40,40]
        });

        /*
        var singleMarker = L.marker([6.1164, 125.1716], { icon: myMarker, draggable: true });
        var popup = singleMarker.bindPopup('This is my location. ' + singleMarker.getLatLng()).openPopup();
        popup.addTo(map);*/
        <?php
        include "dbconn.php";

        $mapa = "SELECT *,property.propertyname FROM propertyaddress JOIN property ON propertyaddress.addresscode = property.propertyaddress";

        $dbquery = mysqli_query($conn,$mapa);

        $geojson = array('type' => 'FeatureCollection', 'features' => array());

        while($row = mysqli_fetch_assoc($dbquery)){

            $marker = array(
                'type' => 'Feature',
                'properties' => array(
                'title' => $row['propertyname'],
                'marker-color' => '#f00',
                'marker-size' => 'small'
            ),
                'geometry' => array(
                'type' => 'Point',
                'coordinates' => array(
                    $row['lng'],
                    $row['lat']
                    )
                )
            );

            array_push($geojson['features'], $marker);
        }
?>
  
  var geoJson = <?php echo json_encode($geojson,JSON_NUMERIC_CHECK); ?>;

// Pass features and a custom factory function to the map

        var pointData = L.geoJSON(geoJson, {
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.title).openPopup();
            }
        }).addTo(map);


        
    </script>