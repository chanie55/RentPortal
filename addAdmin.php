<?php
include "dbconn.php";

if (isset($_POST['submit-admin'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO tbl_user(username, password, userLevel_ID)
                VALUES ('$user_name', '$password', '1')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        $sql2 = "INSERT INTO tbl_userinfo(firstname, lastname, email)
                VALUES ('$first_name', '$last_name', '$email')";
        $result2 = mysqli_query($conn, $sql2);
        
        header("Location: manageAdmin.php?msg=User added successfully");
    } else {
        echo "Failed" ;
    }
}
?>