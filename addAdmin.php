<?php
include "dbconn.php";

if (isset($_POST['submit-admin'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO userinfo(firstname, lastname, email, contact)
             VALUES ('$first_name', '$last_name', '$email', '$contact')";

    $result = mysqli_query($conn, $sql);
    $userID = mysqli_insert_id($conn);

    if($result === TRUE) {
        $sql2 = "INSERT INTO user(username, password, userInfo_ID, status, userLevel_ID)
                VALUES ('$user_name', '$password', '$userID', 1, 1)";
        $result2 = mysqli_query($conn, $sql2);
        
        header("Location: manageAdmin.php?msg=User added successfully");
    } else {
        echo "Failed" ;
    }
}
?>