<?php
include "dbconn.php";

if(isset($_POST['login-submit'])){

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
        $sql = "SELECT * FROM tbl_user WHERE userName = '$uname' AND password = '$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                if ($row['userName'] === $uname && $row['password'] === $pass) {
                    $_SESSION['userName'] = $row['userName'];
                    header("Location: adminDashboard.php");
                    exit();
                } else {
                    header("Location: login.php?error=Incorrect username or password");
                    exit();
                }

        } else {
            header("Location: login.php?error=Incorrect username or password");
            exit();
        }

    }

} else {
    header("Location: adminDashboard.php");
    exit();
}

?>