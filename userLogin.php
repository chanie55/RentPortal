<?php
include "dbconn.php";

if(isset($_POST['email']) && isset($_POST['password'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: login.php?error=Email is required");
      
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $pass && $row['userLevel_ID'] == 1 && $row['status'] == 1) {
                    $_SESSION['email'] = $row['email'];
                    header("Location: adminDashboard.php");
                    exit();
                } else if ($row['email'] === $email && $row['password'] === $pass && $row['userLevel_ID'] == 2 && $row['status'] == 1) {
                    $_SESSION['email'] = $row['email'];
                    header("Location: ownerDashboard.php");
                    exit();
                } if ($row['email'] === $email && $row['password'] === $pass && $row['userLevel_ID'] == 3 && $row['status'] == 1) {
                    $_SESSION['email'] = $row['email'];
                    header("Location: seekerDashboard.php");
                    exit();
                } else {
                    header("Location: login.php?error=No Permission to Login");
                    exit();
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