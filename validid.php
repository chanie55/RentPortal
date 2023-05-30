<?php 
    include "dbconn.php";

    $userid = $_POST['userid'];

    $sql = "SELECT images.image_url FROM images WHERE user_ID = '$userid' AND type = 'Valid ID'";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                                                                
        <img src = "<?php echo "images/validid/".$row['image_url']; ?>" width = "470px" height = "500px">
        <?php
       }
?>
