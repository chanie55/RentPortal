<?php
include "dbconn.php";

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $age = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $barangay = $_POST['barangay'];
    $stpurok = $_POST['stpurok'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $length = strlen ($contact);

    $user_data = 'username='. $user_name. '&firstname='. $first_name. '&lastname='. $last_name. '&email='. $email. '&contact='. $contact. '&age='. $age.  '&gender='. $gender.  '&address='. $address;

    $uname = "SELECT username FROM user WHERE username = '$user_name'";
    $uname_query = mysqli_query($conn, $uname);

    $em = "SELECT email FROM userinfo WHERE email = '$email'";
    $em_query = mysqli_query($conn, $em);

    $pw = "SELECT password FROM user WHERE password = '$password'";
    $pw_query = mysqli_query($conn, $pw);
    
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: registerSeeker.php?error=Invalid email address&$user_data");

    } else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        header("Location: registerSeeker.php?error=Your password is weak. Try again.&$user_data");

    } else if ($_POST["password"] !== $_POST["password2"]) {
        header("Location: registerSeeker.php?error=Password do not match. Try again.&$user_data");

    } else if (mysqli_num_rows($uname_query) > 0) {
        header("Location: registerSeeker.php?error=Username is already taken&$user_data");

    } else if (mysqli_num_rows($em_query) > 0) {
        header("Location: registerSeeker.php?error=Email is already taken&$user_data");

    } else if (mysqli_num_rows($pw_query) > 0) {
        header("Location: registerSeeker.php?error=Password already exists&$user_data");

    } else {
        $sql = "INSERT INTO userinfo(firstname, lastname, email, contact, age, address, gender)
             VALUES ('$first_name', '$last_name', '$email', '$contact', , '$age', , '$address', , '$gender')";

        $result = mysqli_query($conn, $sql);
        $userID = mysqli_insert_id($conn);

        if($result === TRUE) {
            $sql2 = "INSERT INTO user(username, password, userInfo_ID, status, userLevel_ID)
                VALUES ('$email', '$password', '$userID', 1, 3)";
            $result2 = mysqli_query($conn, $sql2);
            header("Location: registerSeeker.php?msg=Your account has been registered");
        } else {
            echo "Failed" ;
        }
    }   
}
?>