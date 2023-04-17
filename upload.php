<?php
include "dbconn";

    if (isset($_POST['submit-image' && isset($_FILES['my_image'])])){

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
                    $sql = "INSERT INTO image(image_url, type, user_ID) 
                        VALUES ('$fileNameNew', 'Business Permit', '$userID')";
                    mysqli_query($conn, $sql);
                    header ("Location: registerOwner.php?uploadsuccess");
                    } else if ($documents === "DTI") {
                        $sql = "INSERT INTO image(image_url, type, user_ID) 
                            VALUES ('$fileNameNew', 'DTI', '$userID')";
                        mysqli_query($conn, $sql);
                        header ("Location: registerOwner.php?uploadsuccess");
                    } else if ($documents === "065 BIR") {
                        $sql = "INSERT INTO image(image_url, type, user_ID) 
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

?>