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
        $total = $_REQUEST['total'];
        $uid= $_SESSION['user_ID'];
        $email = $_SESSION['email'];
        $amount = $_POST['amount'];
        $mop = $_POST['mop'];

        if (isset($_FILES['proof'])) {
            $img_name = $_FILES['proof']['name'];
            $img_size = $_FILES['proof']['size'];
            $tmp_name = $_FILES['proof']['tmp_name'];
            $error = $_FILES['proof']['error'];

            if ($error === 0) {
                if ($img_size > 1250000) {
                    $message = "Sorry, your file is too large";
                    header("Location: seekerReserveNow.php?error=$message");
                } else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_loc = strtolower($img_ex);

                    $allowed_ex = array ("jpg", "jpeg", "png", "pdf");

                    if (in_array($img_ex_loc, $allowed_ex)) {
                        $new_img_name = uniqid("PROOF-", true).'.'.$img_ex_loc;
                        $img_upload_path = 'images/proof/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        //into the database
                        $image_query = "INSERT INTO images(image_url, type, user_ID) VALUES ('$new_img_name', 'Proof of Payment', '$uid')";
                        $image_result = mysqli_query($conn, $image_query);

                        $query = "INSERT INTO reservation (user_ID, amount, status, mop) VALUES ('$uid', '$amount', 'Pending', '$mop')";
                        $res = mysqli_query($conn, $query);
                        header("Location: seekerReserveNow.php?Successfully added");
                    } else {
                        $message = "You cannot upload files of this type";
                        header("Location: seekerReserveNow.php?error=$message");
                    }
                }     
                header ("Location: seekerReserveNow.php?total=$total&saved");
            } else {
            echo "failed";
            }
        } else {
            echo "failed";
        }
    } else {
        echo "failed";
    }
?>