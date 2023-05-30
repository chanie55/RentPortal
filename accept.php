<?php 
    include "dbconn.php";

    $userid = $_POST['userid'];

    $sql = "SELECT * FROM user WHERE user_ID = '$userid'";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                                                                
        <form method = "POST" action = "sendEmail.php"> 
            <p> Are you sure you want to accept this user? </p>
            <input type = "hidden" name = "email" value = "<?php echo $row['email']; ?>"/>

            <a href=""><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
            <a href="sendEmail.php?"><button type="submit" class="btn btn-primary">Confirm</button></a>
        </form>
        <?php
       }
?>