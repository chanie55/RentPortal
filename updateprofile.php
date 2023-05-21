<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
if(!isset($_SESSION['email']))
{
	header("location:userLogin.php");
} 

    if(isset($_POST['update-profile'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];

        $query = "UPDATE userinfo,user JOIN user ON userinfo.userinfo_ID = user.userInfo_ID SET userinfo.firstname = '.$firstname.', user.email = '$email', WHERE user.email = '$email'";
        $result = mysqli_query($conn, $query);
            if ($result) {
                header ("Location: seekerDashboard.php?email=$email");
            } else {
                echo "failed";
            }
    }


?>