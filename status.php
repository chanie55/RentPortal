<?php
include "dbconn.php";

$status = $_GET['status'];
$id = $_GET['userInfo_ID'];

$query = "UPDATE user SET status = $status WHERE userInfo_ID = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: manageAdmin.php?msg=User status updated successfully");
} else {
    echo "Failed" ;
}

?>