<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

    include "dbconn.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    

    if (isset($_POST['okay'])) {
        $email = $_POST['useremail'];
        $uid = $_POST['id'];

        $mail = new PHPMailer(true);

        $message = '<div>
				<p><b> Hello! </b> </p>
				<p> This is Rent.in Portal. We are here to inform you that your reservation has been acknowledge. Kindly
                contact the owner for confirmation. Thank You! </p>
				<br>
				</div>';

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "anya.sc30@gmail.com";
        $mail->Password = "igicgkctmoucexit";
        $mail->SMTPSecure = 'ssl';
        $mail->Port= 465;

        $mail->setFrom('anya.sc30@gmail.com');

        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = "Rentin Registration";
        $mail->Body = $message;

        $mail->send();

        echo " <script> alert ('Email Confirmation has been sent'); document.location.href = 'reservation.php'; </script>";
       
        

        
        
    }

?>