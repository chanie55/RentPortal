<?php 
    include "dbconn.php";

    if(isset($_POST['add_FAQ'])) {
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $sql = "INSERT INTO faq (question, answer)
                    VALUES ('$question', '$answer')";
        $result = mysqli_query($conn, $sql);

        if ($result === TRUE) {
            header("Location: FAQ.php?msg=FAQ successfully added!");
        } else {
            echo "Failed";
        }
    }
?>