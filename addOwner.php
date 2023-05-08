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
    $allDocument = implode(",", $docu);
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
                        VALUES ('$email', '$password', '$userID', 0, 2)";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                        $userlastid = mysqli_insert_id($conn);
                        if ($userlastid) {
                            $userid = "UID_00".$userlastid;
                            $query2 = "UPDATE user SET user_ID = '".$userid."' WHERE id = '".$userlastid."'";
                            $res2 = mysqli_query($conn, $query2);
                        }

                        if (isset($_FILES['file']['name'])) {
                            $totalFiles = count($_FILES['file']['name']);
                            $userID = mysqli_insert_id($conn);
                            $filesArray = array();
            
                            for($i = 0; $i < $totalFiles; $i++) {
                                $fileName = $_FILES['file']['name'][$i];
                                $fileTmpName = $_FILES['file']['tmp_name'][$i];
            
                                $imageExtension = explode('.', $fileName);
            
                                $name = $imageExtension[0];
                                $imageExtension = strtolower(end($imageExtension));
            
                                $newFileName = $name . " - " . uniqid();
                                $newFileName .= '.' . $imageExtension;
            
                                move_uploaded_file($fileTmpName, './images/' . $newFileName);
                                $filesArray[] = $newFileName;
                            }
            
                            $filesArray = json_encode($filesArray);
                            $query = "INSERT INTO images(image_url, type, user_ID) 
                                        VALUES ('$fileNameNew', '$allDocument', '$userID')";
                            mysqli_query($conn, $sql);
                            header ("Location: registerOwner.php?uploadsuccess");
                    }
            
            

                
                /*
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];
                $userID = mysqli_insert_id($conn);
                $documents = $_POST['documents'];
        
                $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
                $fileActualExt = strtolower($fileExt);
        
                $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
                if (in_array($fileActualExt, $allowed)){
                    if($fileError === 0){
                        if ($fileSize < 1000000){
                            $fileNameNew = uniqid($user_name, true).'.'.$fileActualExt;
                            $fileDestination = './images/'.$fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            $image_base64 = base64_encode(file_get_contents($fileName));
                            $image = 'data:image/'.$fileActualExt.';base64,'.$image_base64;
        
                            $sql = "INSERT INTO images(image_url, type, user_ID) 
                                VALUES ('$fileNameNew', '$allDocument', '$userID')";
                            mysqli_query($conn, $sql);
                            header ("Location: registerOwner.php?uploadsuccess");
                           
                        }
                        else{
                            echo "Your file is to big!";
                        }
                    }
                    else{
                        echo "There was an error uploading your file!";
                    }
                }
                else
                {
                    echo "You cannot upload  files of this type!";
                }*/
            } 
            header("Location: registerOwner.php?msg=Personal Data has been saved");
        
        } else {
            echo "Failed" ;
        }
    }
}
}
}
?>