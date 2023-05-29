<?php 
    include "dbconn.php";

    if (isset($_POST['submit-about'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "INSERT INTO aboutus (title, content)
                    VALUES ('$title', '$content')";
        $result = mysqli_query($conn, $sql);

        if ($result === TRUE) {
            header("Location: ownerAboutUs.php?msg=Successfully added!");
        } else {
            echo "Failed";
        }
    }
//okay
?>