<?php
session_start();
include "dbconn.php";

use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

function send_password_reset($get_name,$get_email,$token)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "anya.sc30@gmail.com";
        $mail->Password = "igicgkctmoucexit";
        $mail->SMTPSecure = 'ssl';
        $mail->Port= 465;

        $mail->setFrom('anya.sc30@gmail.com', $get_name);

        $mail->addAddress($get_email);

        $mail->isHTML(true);
        $mail->Subject = "Reset Password Rent.In Notification";

        $message = "
				<p><b> Hello! </b> </p>
				<p> You are receiving this email because we received  a password reset request for your account. </p>
				<br>
				<br>
				<a href='http://localhost/RentPortal/resetpw.php?token=$token&email=$get_email'> Click Me </a>
				";
                 
        $mail->Body = $message;

        $mail->send();

}


if(isset($_POST['pw-reset']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM user where email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run) > 0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE user SET verify_token='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if($update_token_run)
        {
            send_password_reset($get_name,$get_email,$token);
            $_SESSION['status'] = "We emailed you a password reset link";
            header("Location: resetpw.php");
            exit(0); 
        }
        else
        {
            $_SESSION['status'] = "Something went wrong. #1";
            header("Location: resetpw.php");
            exit(0); 
        }
    }
    else
    {
        $_SESSION['status'] = "No Email Found";
        header("Location: resetpw.php");
        exit(0);
    }
}

if(isset($_POST['password_update']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    
    $token = mysqli_real_escape_string($con, $_POST['password_token']);

    if(!empty($token))
    {

    }
    else
    {
        $_SESSION['status'] = "No token available";
        header("Location: resetpw.php");
        exit(0);
    }
}

?>