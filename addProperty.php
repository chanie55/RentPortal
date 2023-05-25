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
        $email = $_REQUEST['email'];
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
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];

        $code = rand(1, 99999);
        $prop_ID = "RES_".$code;

        $query = "INSERT INTO property(property_ID, propertyname, description,  propertytype, roomtype, totalrooms, availablerooms, monthlyrate, dailyrate, bed, kitchen, bathroom, aircon, dimension, user_ID)
                    VALUES ('$prop_ID', '$name', '$description', '$type', '$roomtype', '$total', '$available', '$monthlyrate', '$dailyrate', '$bed', '$kitchentype', '$bathtype', '$aircon', '$dimension', '$user_ID')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $addcode = rand(1, 99999);
            $add_ID = "ADRS_".$addcode;

            $addressquery = "INSERT INTO propertyaddress(addresscode, lat, lng) VALUES ('$add_ID', '$lat', '$lng')";
            $res = mysqli_query($conn, $addressquery);
            if ($res) {
                $updateprop = mysqli_query($conn, "UPDATE property SET propertyaddress = '".$add_ID."' WHERE property_ID = '".$prop_ID."'");
            }
            


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
            header ("Location: ownerProperty.php");
            } else {
            echo "failed";
            }
        }
    }

?>