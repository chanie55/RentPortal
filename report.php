<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale+1">
        <title> Print </title>
        <style type="text/css" media="print">
            @media print{
                .noprint, .noprint *{
                    display: none; !important;
                }
            }
        </style>
         <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body onload="print()">
    <div class="container">
        <center>
            <h3> User List </h3>
        <hr>
        </center>
        <table id="ready" class="table table-striped table-hover table-bordered">
        <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "dbconn.php";
                    $sql = mysqli_query($conn, "SELECT userinfo.id, user.email, user.userLevel_ID, user.status, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.id = user.id");
                    

                    while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td> 
                                            <?php 
                                                if ($row['userLevel_ID'] == 1){
                                                    echo "Admin";
                                                } else if ($row['userLevel_ID'] == 2){
                                                    echo "Owner";
                                                } if ($row['userLevel_ID'] == 3){
                                                    echo "Seeker";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if ($row['status'] == 1) {
                                                    echo '<p> <a href = "userstatus.php?id='.$row['id'].'&status=0"> active </a> </p>';
                                                } else {
                                                    echo '<p> <a href = "userstatus.php?id='.$row['id'].'&status=1"> inactive </a> </p>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                </tbody>
        </table>
                        </div>

    </body>
</html>