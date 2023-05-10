<?php
include "dbconn.php";

if (isset($_POST['submit-owner'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $dob = date('Y-m-d', strtotime($_POST['birthdate']));
    $age = date('Y') - substr($dob, 0 ,4);
        if (strtotime(date('Y-m-d')) - strtotime(date('Y') . substr($dob, 4, 6)) < 0) {
            $age--;
        }
    $gender = $_POST['gender'];
    $barangay = $_POST['barangay'];
    $stpurok = $_POST['stpurok'];
    $password = $_POST['password'];
    $hashed_pw = password_hash($password, PASSWORD_DEFAULT);
    $password2 = $_POST['password2'];
    $docu = $_POST['document'];
    $length = strlen ($contact);

    $user_data = 'username='. $user_name. '&firstname='. $first_name. '&lastname='. $last_name. '&email='. $email. '&contact='. $contact. '&birthdate='. $dob.  '&gender='. $gender.  '&address='. $address;
    $address = $stpurok .', '. $barangay .', '. 'General Santos City';

    $em = "SELECT email FROM user WHERE email = '$email'";
    $em_query = mysqli_query($conn, $em);

    $pw = "SELECT password FROM user WHERE password = '$password'";
    $pw_query = mysqli_query($conn, $pw);
    
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: registerOwner.php?error=Invalid email address&$user_data");

    } else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        header("Location: registerOwner.php?error=Your password is weak. Try again.&$user_data");

    } else if ($_POST["password"] !== $_POST["password2"]) {
        header("Location: registerOwner.php?error=Password do not match. Try again.&$user_data");

    } else if (mysqli_num_rows($em_query) > 0) {
        header("Location: registerOwner.php?error=Email is already taken&$user_data");

    } else if (mysqli_num_rows($pw_query) > 0) {
        header("Location: registerOwner.php?error=Password already exists&$user_data");
    } else {

        $sql = "INSERT INTO userinfo(firstname, lastname, contact, dob, age, address, gender)
        VALUES ('$first_name', '$last_name', '$contact', '$dob', '$age', '$address', '$gender')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $lastid = mysqli_insert_id($conn);
            if ($lastid) {
                $userID = "OW-".$lastid;
                $query = "UPDATE userinfo SET userinfo_ID = '".$userID."' WHERE id = '".$lastid."'";
                $res = mysqli_query($conn, $query);

                if($result === TRUE) {
                    $sql2 = "INSERT INTO user(email, password, userInfo_ID, status, userLevel_ID)
                        VALUES ('$email', '$hashed_pw', '$userID', 0, 2)";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                        $userlastid = mysqli_insert_id($conn);
                        if ($userlastid) {
                            $userid = "UID_00".$userlastid;
                            $query2 = "UPDATE user SET user_ID = '".$userid."' WHERE id = '".$userlastid."'";
                            $res2 = mysqli_query($conn, $query2);

                            //documents
                            if (isset($_FILES['document-image'])) {
                                $img_name = $_FILES['document-image']['name'];
                                $img_size = $_FILES['document-image']['size'];
                                $tmp_name = $_FILES['document-image']['tmp_name'];
                                $error = $_FILES['document-image']['error'];
            
                                if ($error === 0) {
                                    if ($img_size > 125000) {
                                        $message = "Sorry, your file is too large";
                                        header("Location: registerOwner.php?error=$message");
                                    } else {
                                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                        $img_ex_loc = strtolower($img_ex);
            
                                        $allowed_ex = array ("jpg", "jpeg", "png", "pdf");
            
                                        if (in_array($img_ex_loc, $allowed_ex)) {
                                            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_loc;
                                            $img_upload_path = './images/'.$new_img_name;
                                            move_uploaded_file($tmp_name, $img_upload_path);
            
                                            //into the database
                                            $image_query = "INSERT INTO images(image_url, type, user_ID) VALUES ('$new_img_name', '$docu', '$userid')";
                                            $image_result = mysqli_query($conn, $image_query);
                                            
                                            if ($result2 === TRUE) {
                                                //valid-id
                            if (isset($_FILES['valid-id'])) {
                                $img_name = $_FILES['valid-id']['name'];
                                $img_size = $_FILES['valid-id']['size'];
                                $tmp_name = $_FILES['valid-id']['tmp_name'];
                                $error = $_FILES['valid-id']['error'];
            
                                if ($error === 0) {
                                    if ($img_size > 125000) {
                                        $message = "Sorry, your file is too large";
                                        header("Location: registerOwner.php?error=$message");
                                    } else {
                                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                        $img_ex_loc = strtolower($img_ex);
            
                                        $allowed_ex = array ("jpg", "jpeg", "png", "pdf");
            
                                        if (in_array($img_ex_loc, $allowed_ex)) {
                                            $new_img_name = uniqid("ID-", true).'.'.$img_ex_loc;
                                            $img_upload_path = './images/'.$new_img_name;
                                            move_uploaded_file($tmp_name, $img_upload_path);
            
                                            //into the database
                                            $image_query = "INSERT INTO images(image_url, type, user_ID) VALUES ('$new_img_name', 'Valid ID', '$userid')";
                                            mysqli_query($conn, $image_query);
                                            header("Location: registerOwner.php?Successfully added");
                                        } else {
                                            $message = "You cannot upload files of this type";
                                            header("Location: registerOwner.php?error=$message");
                                        }
                                    }
                                } else {
                                    $message = "unknown error occured";
                                    header("Location: registerOwner.php?error=$message");
                                }
                            } else {
                                header("Location: registerOwner.php?failed");
                            }
                                            }
                                        } else {
                                            $message = "You cannot upload files of this type";
                                            header("Location: registerOwner.php?error=$message");
                                        }
                                    }
                                } else {
                                    $message = "unknown error occured";
                                    header("Location: registerOwner.php?error=$message");
                                }
                            } else {
                                header("Location: registerOwner.php?failed");
                            }

                            

                        }
                    }
            } 
            header("Location: registerOwner.php?msg=Personal Data has been saved");
        
        } else {
            echo "Failed" ;
        }
    }
}
}

?>