<?php
include "dbconn.php";

$status = $_GET['status'];
$id = $_GET['id'];

$query = "UPDATE user SET status = $status WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: userList.php?msg=User status updated successfully");
} else {
    echo "Failed" ;
}

?>