<?php 
    include "dbconn.php";

    $userid = $_POST['userid'];

    $sql = "SELECT *,reservation.date, reservation.amount, reservation.status, userinfo.firstname, CONCAT(firstName,' ', lastName) AS fullName FROM property JOIN reservation ON reservation.property_ID = property.property_ID
                JOIN user ON user.user_ID = reservation.user_ID JOIN userinfo ON userinfo.userInfo_ID = user.userInfo_ID WHERE user.user_ID = '$userid'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <table width = '100%' bordered = '0'>
            <tr> 
                <td width = "100"><p> Proof of Payment</p><img src = "<?php echo "images/proof/".$row['proof']; ?>" style = "width: 250px; height: 330px;">
                <td style = "padding: 10px;"> 
                    <p> Name : <?php echo $row['fullName']; ?></p>
                    <p> Email : <?php echo $row['email']; ?></p>
                    <p> Contact : <?php echo $row['contact']; ?></p>
                    <p> Property Listing : <?php echo $row['title']; ?></p>
                    <p> Amount : <?php echo $row['amount']; ?></p>
                    <p> Mode of Payment : <?php echo $row['mop']; ?></p>
                    <p> Status : <?php echo $row['status']; ?></p>
                </td>
            </tr> 

        </table>
        <form method = "POST" action = "confirmres.php"> 
            <input type = "hidden" name = "useremail" value = "<?php echo $row['email']; ?>"/>
            <input type = "hidden" name = "id" value = "<?php echo $row['user_ID']; ?>"/> 
            <input type = "hidden" name = "id" value = "<?php echo $row['title']; ?>"/>
            <a href="confirmres.php"><button type="submit" name = "okay" class="btn btn-primary">Confirm</button></a>
            <a href="#"><button type="submit" class="btn btn-secondary" name = "no" data-dismiss="modal">Cancel</button></a>
        </form>
    <?php } ?>

    