<?php
include "dbconn.php";

    if (isset($_POST['submit-property'])) {
        $name = $_POST['propertyname'];
        $type = $_POST['property'];
        $availability = $_POST['availability'];
        $description = $_POST['description'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $total = $_POST['totalrooms'];
        $available = $_POST['availablerooms'];
        $monthlyrate = $_POST['rate'];
        $aircon = $_POST['aircon'];
        $roomtype = $_POST['roomtype'];
        $kitchentype = $_POST['kitchentype'];
        $bathtype = $_POST['bathtype'];
        $userid = $_POST['id'];

        $code = rand(1, 99999);
        $prop_ID = "PROP_".$code;

        $query = "INSERT INTO property(property_ID, propertyname, description, availability, propertytype)
                    VALUES ('$prop_ID', '$name', '$description', '$availability', '$type')";
        $result = mysqli_query($conn, $query);

        if ($result) {
                $roomquery = "INSERT INTO room (roomtype, totalrooms, availablerooms, monthlyrate, kitchen, bathroom, aircon, property_ID)
                                VALUES ('$roomtype', '$total', '$available', '$monthlyrate', '$kitchentype', '$bathtype', '$aircon', '$prop_ID')";
                $result3 = mysqli_query($conn, $roomquery);

            //Property Images

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