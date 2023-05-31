<?php 
session_start();

require_once('dbconn.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./ownerVisit.php') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);
$uid = $_SESSION['user_ID'];
$pid = $_POST['pid'];

if(empty($id)){
    $sql = "INSERT INTO schedule_list (start_datetime, end_datetime, user_ID, status, property_ID) VALUES ('$start_datetime','$end_datetime', '$uid', 'Pending', '$pid')";
}else{
   // $sql = "UPDATE `schedule_list` set  `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
   $sql = "INSERT INTO schedule_list (start_datetime, end_datetime, user_ID, status, property_ID) VALUES ('$start_datetime','$end_datetime', '$uid', 'Pending', '$pid')";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./useractivity.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>