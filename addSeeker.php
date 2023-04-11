<?php
include "dbconn.php";

if (isset($_POST['submit-admin'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];    

    $sql = "INSERT INTO tbl_user(firstName, lastName, emailAdd, password, userName)
                VALUES ('$first_name', '$last_name', '$email', '$password', '$user_name')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: manageAdmin.php?msg=User added successfully");
    } else {
        echo "Failed" ;
    }
}
?>