<?php
include "dbconn.php";

if (isset($_POST['submit-type'])) {
    $type = $_POST['type'];
    $select = $_POST['select-type'];

    
    if ($select === "Property" ) {
        $room_sql = "INSERT INTO propertytype(property) VALUES ('$type')";
        $result = mysqli_query($conn, $room_sql);
        header ("Location: property.php?type added");
    } else if ($select === "Room" ) {
        $room_sql = "INSERT INTO room(room_Type, status) VALUES ('$type', 1)";
        $result = mysqli_query($conn, $room_sql);
        header ("Location: property.php?type added");
    } else if ($select === "Bed" ) {
        $room_sql = "INSERT INTO bed(bed_Type) VALUES ('$type')";
        $result = mysqli_query($conn, $room_sql);
        header ("Location: property.php?type added");
    } else if ($select === "Kitchen" ) {
        $room_sql = "INSERT INTO kitchen(kitchen_Type) VALUES ('$type')";
        $result = mysqli_query($conn, $room_sql);
        header ("Location: property.php?type added");
    } else if ($select === "Comfort Room" ) {
        $room_sql = "INSERT INTO cr(cr_Type) VALUES ('$type')";
        $result = mysqli_query($conn, $room_sql);
        header ("Location: property.php?type added");
    } else {
        header ("Location: property.php?error saving data");
    }
} else {
        echo "Failed" ;
    }

?>