<?php 
    include "dbconn.php";
    $id = $_GET['propertyType_ID'];

    if (isset($_GET['propertyType_ID'])) {
        $delete = mysqli_query($conn, "DELETE FROM propertytype WHERE propertyType_ID = $id");
        header ("Location: propertyCategory.php?type deleted");
    } else {
        echo "FAILED";
    }

    $id = $_GET['room_ID'];

    if (isset($_GET['room_ID'])) {
        $delete = mysqli_query($conn, "DELETE FROM room WHERE room_ID = $id");
        header ("Location: incRoom.php?type deleted");
    } else {
        echo "FAILED";
    }

    $id = $_GET['kitchen_ID'];

    if (isset($_GET['kitchen_ID'])) {
        $delete = mysqli_query($conn, "DELETE FROM kitchen WHERE kitchen_ID = $id");
        header ("Location: incKitchen.php?type deleted");
    } else {
        echo "FAILED";
    }

    $id = $_GET['cr_ID'];

    if (isset($_GET['cr_ID'])) {
        $delete = mysqli_query($conn, "DELETE FROM cr WHERE cr_ID = $id");
        header ("Location: incCR.php?type deleted");
    } else {
        echo "FAILED";
    }

?>

