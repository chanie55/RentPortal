<?php
session_start();
include "dbconn.php";

if(isset($_REQUEST['email']) && isset($_POST['password'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_REQUEST['email']);
    $pass = validate($_POST['password']);
    $hashed_pw = password_hash($pass, PASSWORD_DEFAULT);

    if (empty($email)) {
        header("Location: login.php?error=Email is required");
      
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                if ($row['email'] !== $email){
                    header("Location: login.php?error=No Permission to Login");
                } else {
                    if (password_verify($pass, $hashed_pw)) {
                        $_SESSION['user_ID'] = $row['user_ID'];
                        $_SESSION['email'] = $row['email'];
                        if ($row['userLevel_ID'] == 1 && $row['status'] == 'Active') {
                            header("Location: adminDashboard.php");
                            exit();
                        } else if ($row['userLevel_ID'] == 2 && $row['status'] == 'Active') {
                            header("Location: ownerDashboard.php");
                            exit();
                        } else if ($row['userLevel_ID'] == 3 && $row['status'] == 'Active') {
                            header("Location: seekerDashboard.php");
                            exit();
                        }
                        
                    }
                }
            } else {
            header("Location: login.php?error=Incorrect email or password");
            exit();
        }
    }

} else {
    header("Location: login.php");
    exit();
}

?>