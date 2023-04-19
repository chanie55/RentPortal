<?php 
    include "dbconn.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/scr/Exception.php';
    require 'phpmailer/scr/PHPMailer.php';
    require 'phpmailer/scr/SMTP.php';

    if (isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "anya.sc30@gmail.com";
        $mail->Password = "atematet27";
        $mail->SMTPSecure = 'ssl';
        $mail->Port= 465;

        $mail->setFrom('anya.sc30@gmail.com');

        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];

        $mail->send();

        echo " <script> alert ('Sent Email'); document.location.href = 'manageOwner.php'; </script>";
        
    }

?>