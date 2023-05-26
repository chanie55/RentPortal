<?php
include "dbconn.php";

$status = $_GET['status'];
$owneremail = $_GET['owneremail'];
$email = $_GET['email'];

$query = "UPDATE user SET status = $status WHERE email = '$owneremail'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: manageOwner.php?msg=Owner status updated successfully");
} else {
    echo "Failed" ;
}

?>