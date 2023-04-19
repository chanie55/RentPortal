<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "rentportal";

$conn = mysqli_connect($host, $user, $password, $db);
mysqli_select_db($conn, $db);