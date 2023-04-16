<?php
include "dbconn.php";

if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=Username is required");
      
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $uname && $row['password'] === $pass && $row['userLevel_ID'] == 1 && $row['status'] == 1) {
                    $_SESSION['username'] = $row['username'];
                    header("Location: adminDashboard.php");
                    exit();
                } else if ($row['username'] === $uname && $row['password'] === $pass && $row['userLevel_ID'] == 2 && $row['status'] == 1) {
                    $_SESSION['username'] = $row['username'];
                    header("Location: ownerDashboard.php");
                    exit();
                } if ($row['username'] === $uname && $row['password'] === $pass && $row['userLevel_ID'] == 3 && $row['status'] == 1) {
                    $_SESSION['username'] = $row['username'];
                    header("Location: seekerDashboard.php");
                    exit();
                } else {
                    header("Location: login.php?error=No Permission to Login");
                    exit();
                }

            } else {
            header("Location: login.php?error=Incorrect username or password");
            exit();
        }

    }

} else {
    header("Location: login.php");
    exit();
}

?>