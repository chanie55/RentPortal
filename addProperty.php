<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
if(!isset($_SESSION['email']))
{
	header("location:userLogin.php");
} 
?>

<?php
include "dbconn.php";


    if (isset($_POST['submit-property'])) {
        $name = $_POST['propertyname'];
        $type = $_POST['property'];
        $description = $_POST['description'];
        $total = $_POST['totalrooms'];
        $available = $_POST['availablerooms'];
        $monthlyrate = $_POST['rate'];
        $dailyrate = $_POST['drate'];
        $aircon = $_POST['aircon'];
        $user_ID = $_SESSION['user_ID'];
        $roomtype = $_POST['roomtype'];
        $kitchentype = $_POST['kitchen'];
        $bathtype = $_POST['bath'];
        $bed = $_POST['bed'];

        $code = rand(1, 99999);
        $prop_ID = "PROP_".$code;

        $query = "INSERT INTO property(property_ID, propertyname, description,  propertytype, roomtype, totalrooms, availablerooms, monthlyrate, dailyrate, bed, kitchen, bathroom, aircon, user_ID)
                    VALUES ('$prop_ID', '$name', '$description', '$type', '$roomtype', '$total', '$available', '$monthlyrate', '$dailyrate', '$bed', '$kitchentype', '$bathtype', '$aircon', '$user_ID')";
        $result = mysqli_query($conn, $query);

        if ($result) {

            //Room Images

            if (isset($_FILES['image'])) {
                foreach ($_FILES['image']['tmp_name'] as $key => $value) {
                    $img_name = $_FILES['image']['name'][$key];
                    $tmp_name = $_FILES['image']['tmp_name'][$key];

                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_loc = strtolower($img_ex);
    
                    $allowed_ex = array ("jpg", "jpeg", "png", "gif");

                    if (in_array($img_ex_loc, $allowed_ex)) {
                        $new_img_name = uniqid("PROPIMG-", true).'.'.$img_ex_loc;
                        $img_upload_path = './images/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        //into the database
                        $image_query = "INSERT INTO images(image_url, type, user_ID) VALUES ('$new_img_name', 'Property Image', '$prop_ID')";
                        mysqli_query($conn, $image_query);
                        header("Location: ownerProperty.php?Successfully added");
                    } else {
                        $message = "You cannot upload files of this type";
                        header("Location: ownerProperty.php?error=$message");
                    }
            }   
            header ("Location: ownerProperty.php?saved");
            } else {
            echo "failed";
            }
        }
    }

?>