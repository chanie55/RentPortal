<?php
include "dbconn.php";

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $uname = "SELECT username FROM user WHERE username = '$user_name'";
    $uname_query = mysqli_query($conn, $uname);

    $em = "SELECT email FROM userinfo WHERE email = '$email'";
    $em_query = mysqli_query($conn, $em);

    $pw = "SELECT password FROM user WHERE password = '$password'";
    $pw_query = mysqli_query($conn, $pw);
    
    if (mysqli_num_rows($uname_query) > 0) {
        header("Location: registerSeeker.php?error=Username is already taken");

    } else if (mysqli_num_rows($em_query) > 0) {
        header("Location: registerSeeker.php?error=Email is already taken");

    } else if (mysqli_num_rows($pw_query) > 0) {
        header("Location: registerSeeker.php?error=Password already exists");

    } else {
        $sql = "INSERT INTO userinfo(firstname, lastname, email, contact)
             VALUES ('$first_name', '$last_name', '$email', '$contact')";

        $result = mysqli_query($conn, $sql);
        $userID = mysqli_insert_id($conn);

        if($result === TRUE) {
            $sql2 = "INSERT INTO user(username, password, userInfo_ID, status, userLevel_ID)
                VALUES ('$user_name', '$password', '$userID', 1, 3)";
            $result2 = mysqli_query($conn, $sql2);
        
            header("Location: registerSeeker.php?msg=Your account has been registered");
        } else {
            echo "Failed" ;
        }
    }   
}
?>