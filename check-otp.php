<?php 
    include "dbconn.php";

    if(isset($_POST['check-otp'])) {
        $otp_code = $_POST['otp'];
        $check_code = "SELECT * FROM user WHERE verificationcode = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if ($code_res) {
            $update_status = mysqli_query($conn, "UPDATE user SET is_verified = 1 WHERE verificationcode = $code");
            echo " <script> alert ('Email has been verified'); document.location.href = 'seekerPage.php'; </script>";
        } else 
            echo "Failed";
    } else {
        echo "Failed";
    }

?>