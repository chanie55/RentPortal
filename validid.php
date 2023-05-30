<?php 
    include "dbconn.php";

    $userid = $_POST['userid'];
    echo $userid;

    $sql = "SELECT images.image_url FROM images WHERE user_ID = '$userid'";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                                                                
        <span> <img src = "<?php echo "images/validid/".$row['image_url']; ?>" width = "470px" height = "500px"> </span>
        <?php
       }
?>
