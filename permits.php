<?php 
    include "dbconn.php";

    $userid = $_POST['userid'];

    $sql = "SELECT images.image_url FROM images JOIN user ON images.user_ID = user.user_ID ";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                                                                
        <img src = "<?php echo "images/permits/".$row['image_url']; ?>" width = "470px" height = "500px"> </td>
        <?php
       }
?>