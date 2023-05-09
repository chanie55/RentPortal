<?php
include "dbconn.php";
            if (isset($_FILES['document-image']) && isset($_POST['submit'])) {
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
                            $image_query = "INSERT INTO images(image_url, type, user_ID) VALUES ('$new_img_name', '$documents', '$userID')";
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
                header("Location: img-test.php?failed");
            }
            ?>