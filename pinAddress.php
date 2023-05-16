<?php 
    include "dbconn.php";

    if (isset($_POST['submit-address'])) {
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];

        $query = "INSERT INTO propertyaddress (lat, lng) VALUES ('$lat', '$lng')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: viewmap.php?saved");
        } else {
            echo "failed";
        }
    }
?>