<?php 
    include "dbconn.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $owneremail = $_POST['email'];

    if (isset($_POST['email'])) {
        $mail = new PHPMailer(true);

        $message = '<div>
				<p><b> Hello! </b> </p>
				<p> This is Rent.in Portal. We are here to inform you that your registration request to our portal has
                been denied. Please make sure to fill out the necessary requirements. </p>
				<br>
				
				<br>
				<p>Try registering again. </p>
                <a href="https://localhost/RentPortal/registerOwner.php"> Register Here </a>
				</div>';

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "anya.sc30@gmail.com";
        $mail->Password = "igicgkctmoucexit";
        $mail->SMTPSecure = 'ssl';
        $mail->Port= 465;

        $mail->setFrom('anya.sc30@gmail.com');

        $mail->addAddress($owneremail);

        $mail->isHTML(true);
        $mail->Subject = "Rentin Registration";
        $mail->Body = $message;

        $mail->send();

        $upstatus = mysqli_query($conn, "UPDATE user SET status = 'Inactive' WHERE email = '$owneremail'");
        echo " <script> alert ('User registration has been denied'); document.location.href = 'manageOwner.php'; </script>";
        
    }

?>