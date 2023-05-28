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
        $email = $_SESSION['email'];
        $bname = $_POST['bname'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $available = $_POST['availablerooms'];
        $monthlyrate = $_POST['rate'];
        $dailyrate = $_POST['drate'];
        $aircon = $_POST['aircon'];
        $user_ID = $_SESSION['user_ID'];
        $kitchentype = $_POST['kitchen'];
        $bathtype = $_POST['bath'];
        $bedtype = $_POST['bedtype'];
        $bed = $_POST['bed'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];

        $code = rand(1, 99999);
        $prop_ID = "RES_".$code;
        $bname_ID = mysqli_query($conn, "SELECT bname_ID FROM businessname WHERE bname = '$bname'");

        if (mysqli_num_rows($bname_ID) == TRUE) {
            $row = mysqli_fetch_assoc($bname_ID);
            $_SESSION['bname_ID'] = $row['bname_ID'];
            $id = $_SESSION['bname_ID'];

            $query = "INSERT INTO property(property_ID, bname_ID, title, description,  bedtype, availablerooms, monthlyrate, dailyrate, bed, kitchen, bathroom, aircon, dimension)
                    VALUES ('$prop_ID', '$id', '$title', '$description', '$bedtype', '$available', '$monthlyrate', '$dailyrate', '$bed', '$kitchentype', '$bathtype', '$aircon', '$dimension')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $addcode = rand(1, 99999);
                $add_ID = "ADRS_".$addcode;
    
                $addressquery = "INSERT INTO propertyaddress(addresscode, lat, lng) VALUES ('$add_ID', '$lat', '$lng')";
                $res = mysqli_query($conn, $addressquery);
                if ($res) {
                    $updateprop = mysqli_query($conn, "UPDATE property SET propertyaddress = '".$add_ID."' WHERE property_ID = '".$prop_ID."'");
                }

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
    }

?>