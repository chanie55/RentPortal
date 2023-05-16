<?php
include "dbconn.php";

if (isset($_POST['submit-seeker'])) {
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
        header("Location: registerSeeker.php?error=Invalid email address&$user_data");

    } else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        header("Location: registerSeeker.php?error=Your password is weak. Try again.&$user_data");

    } else if ($_POST["password"] !== $_POST["password2"]) {
        header("Location: registerSeeker.php?error=Password do not match. Try again.&$user_data");

    } else if (mysqli_num_rows($em_query) > 0) {
        header("Location: registerSeeker.php?error=Email is already taken&$user_data");

    } else if (mysqli_num_rows($pw_query) > 0) {
        header("Location: registerSeeker.php?error=Password already exists&$user_data");

    } else {
        $sql = "INSERT INTO userinfo(firstname, lastname, contact, dob, age, address, gender)
             VALUES ('$first_name', '$last_name', '$contact', '$dob', '$age', '$address', '$gender')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $lastid = mysqli_insert_id($conn);
            if ($lastid) {
                $userID = "SE-".$lastid;
                $query = "UPDATE userinfo SET userinfo_ID = '".$userID."' WHERE id = '".$lastid."'";
                $res = mysqli_query($conn, $query);

                if($result === TRUE) {
                    $sql2 = "INSERT INTO user(email, password, userInfo_ID, status, userLevel_ID)
                        VALUES ('$email', '$hashed_pw', '$userID', 1, 3)";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                        $userlastid = mysqli_insert_id($conn);
                        if ($userlastid) {
                            $userid = "UID_00".$userlastid;
                            $query2 = "UPDATE user SET user_ID = '".$userid."' WHERE id = '".$userlastid."'";
                            $res2 = mysqli_query($conn, $query2);

                            if (isset($_FILES['id'])) {
                                foreach ($_FILES['id']['tmp_name'] as $key => $value) {
                                    $img_name = $_FILES['id']['name'][$key];
                                    $tmp_name = $_FILES['id']['tmp_name'][$key];
                
                                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                    $img_ex_loc = strtolower($img_ex);
                    

                                    //MODIFY
                                    $allowed_ex = array ("jpg", "jpeg", "png", "gif");
                
                                    if (in_array($img_ex_loc, $allowed_ex)) {
                                        $new_img_name = uniqid("ID-", true).'.'.$img_ex_loc;
                                        $img_upload_path = './images/'.$new_img_name;
                                        move_uploaded_file($tmp_name, $img_upload_path);
                
                                        //into the database
                                        $image_query = "INSERT INTO images(image_url, type, user_ID) VALUES ('$new_img_name', 'Valid ID', '$userid')";
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
                            } else {
                                header("Location: registerSeeker.php?failed");
                            }
                        }
                    }
                    header("Location: registerSeeker.php?msg=Your account has been registered");
                } else {
                    echo "Failed" ;
                }
            }
        }
        
        
    }   
?>