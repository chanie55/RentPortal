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
        $mop = $_POST['mop'];


        $query = "INSERT INTO reservation (user_ID, amount, status, mop) VALUES ('$uid', '$amount', 'Pending', '$mop')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            header ("Location: seekerReserveNow.php&saved");
        } else {
            echo "failed";
        }

        
    }
?>