<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
if(!isset($_SESSION['email']))
{
	header("location:userLogin.php");
} 

    if(isset($_POST['submit-res'])) {
        $uid= $_SESSION['user_ID'];
        $email = $_SESSION['email'];
        $amount = $_POST['amount'];
        $mop = $_POST['mod'];
        $payday = date('Y-m-d', strtotime($_POST['payday']));

        $query = "INSERT INTO reservation (user_ID, amount, mop) VALUES ('$uid', '$amount', '$mop')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            header ("Location: seekerReserveNow.php?email=$email&saved");
        } else {
            echo "failed";
        }
    }
?>