<?php 
    include "dbconn.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $id = $_GET['userInfo_ID'];

    $email = "SELECT email FROM userinfo WHERE userinfo_ID = $id";
    $result = mysqli_query($conn, $email);

    if (isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $message = '<div>
				<p><b> Hello! </b> </p>
				<p> We are Rentin Portal. We are here to inform you that your registration request to our portal has
                been accepted. </p>
				<br>
				
				<br>
				<p>You may now login your account. God bless and Have a Great Day! </p>
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

        echo " <script> alert ('Sent Email'); document.location.href = 'manageOwner.php'; </script>";
        
    }

?>