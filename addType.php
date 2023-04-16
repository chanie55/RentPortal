<?php
include "dbconn.php";

if (isset($_POST['submit-type'])) {
    $counter = 1;
    $type = $_POST['type'];
    $select = $_POST['select-type'];

    
    if ($select === "Kitchen" ) {
        $room_sql = "INSERT INTO kitchen(kitchen_Type) VALUES ('$type')";
        $result = mysqli_query($conn, $room_sql);
    }
} else {
        echo "Failed" ;
    }

?>