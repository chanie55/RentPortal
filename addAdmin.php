<?php
include "dbconn.php";

if (isset($_POST['submit-admin'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $hashed_pw = password_hash($password, PASSWORD_DEFAULT);
    

    $sql = "INSERT INTO userinfo(firstname, lastname, contact, gender)
             VALUES ('$first_name', '$last_name', '$contact', '$gender')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $lastid = mysqli_insert_id($conn);
            if ($lastid) {
                $userID = "AD-".$lastid;
                $query = "UPDATE userinfo SET userinfo_ID = '".$userID."' WHERE id = '".$lastid."'";
                $res = mysqli_query($conn, $query);

                if($result === TRUE) {
                    $sql2 = "INSERT INTO user(email, password, userInfo_ID, status, userLevel_ID)
                        VALUES ('$email', '$hashed_pw', '$userID', 1, 1)";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                        $userlastid = mysqli_insert_id($conn);
                        if ($userlastid) {
                            $userid = "UID_00".$userlastid;
                            $query2 = "UPDATE user SET user_ID = '".$userid."' WHERE id = '".$userlastid."'";
                            $res2 = mysqli_query($conn, $query2);
                        }
                    }
        
        header("Location: manageAdmin.php?msg=User added successfully");
    } else {
        echo "Failed" ;
    }
}
        }
}
?>


//addFAQ.php
<?php 
    include "dbconn.php";

    if(isset($_POST['add_FAQ'])) {
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $sql = "INSERT INTO faq (question, answer)
                    VALUES ('$question', '$answer')";
        $result = mysqli_query($conn, $sql);

        if ($result === TRUE) {
            header("Location: FAQ.php?msg=FAQ successfully added!");
        } else {
            echo "Failed";
        }
    }
?>
