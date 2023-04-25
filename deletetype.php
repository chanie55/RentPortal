<?php 
    include "dbconn.php";
    $id = $_GET['propertyType_ID'];

    if (isset($_GET['propertyType_ID'])) {
        $delete = mysqli_query($conn, "DELETE FROM propertytype WHERE propertyType_ID = $id");
        header ("Location: propertyCategory.php?type deleted");
    } else {
        echo "FAILED";
    }

?>

