<?php
include "dbconn.php";

if (isset($_POST['submit-owner'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    

    $sql = "INSERT INTO userinfo(firstname, lastname, email, contact)
             VALUES ('$first_name', '$last_name', '$email', '$contact')";

    $result = mysqli_query($conn, $sql);
    $userID = mysqli_insert_id($conn);

    if($result === TRUE) {
        $sql2 = "INSERT INTO user(username, password, userInfo_ID, status, userLevel_ID)
                VALUES ('$user_name', '$password', '$userID', 0, 3)";
        $result2 = mysqli_query($conn, $sql2);
        
            if (isset($_FILES['my_image'])) {

                $fileName = $_FILES['my_image']['name'];
                $fileTmpName = $_FILES['my_image']['tmp_name'];
                $fileSize = $_FILES['my_image']['size'];
                $fileError = $_FILES['my_image']['error'];
                $fileType = $_FILES['my_image']['type'];
                $userID = mysqli_insert_id($conn);
                $documents = $_POST['documents'];
        
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
        
                $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
                if (in_array($fileActualExt, $allowed)){
                    if($fileError === 0){
                        if ($fileSize < 1000000){
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                            $fileDestination = 'upload/'.$fileNameNew;
        
                            if ($documents === "Business Permit") {
                            $sql = "INSERT INTO images(image_url, type, user_ID) 
                                VALUES ('$fileNameNew', 'Business Permit', '$userID')";
                            mysqli_query($conn, $sql);
                            header ("Location: registerOwner.php?uploadsuccess");
                            } else if ($documents === "DTI") {
                                $sql = "INSERT INTO images(image_url, type, user_ID) 
                                    VALUES ('$fileNameNew', 'DTI', '$userID')";
                                mysqli_query($conn, $sql);
                                header ("Location: registerOwner.php?uploadsuccess");
                            } else if ($documents === "065 BIR") {
                                $sql = "INSERT INTO images(image_url, type, user_ID) 
                                    VALUES ('$fileNameNew', '065 BIR', '$userID')";
                                mysqli_query($conn, $sql);
                                header ("Location: registerOwner.php?uploadsuccess");
                            } else {
                                echo "Failed";
                            }
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
                }
            }
            header("Location: pendingOwner.php?msg=Register has been saved");
        } else {
            echo "Failed" ;
        }
}
?>