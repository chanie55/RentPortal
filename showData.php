<?php 
    include "dbconn.php";

    $owner_name = $_GET["email"];
    $result = mysqli_query($conn, "SELECT * FROM userinfo WHERE email = $owner_name");

    $data = mysqli_fetch_object($result);
    echo json_encode($data);
?>