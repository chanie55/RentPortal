<?php 
    include "dbconn.php";
    $id = $_GET['kitchen_ID'];

    if (isset($_GET['kitchen_ID'])) {
        $delete = mysqli_query($conn, "DELETE FROM kitchen WHERE kitchen_ID = $id");
        header ("Location: property.php?type deleted");
    } else {
        echo "FAILED";
    }

?>