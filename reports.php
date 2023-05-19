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
            <h3> Property List </h3>
        <hr>
        </center>
        <table id="ready" class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
                        <th>Property ID</th>
                        <th>Trade Name</th>
                        <th>Property Type</th>
                        <th>Business Address</th>
                        <th>Owner Name</th>
                        <th>Owner Address</th>
                        <th>Date Posted</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "dbconn.php";
                    
                    if(isset($_GET['page']) && $_GET['page'] !== "") {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $limit = 6;
                    $offset = ($page - 1) * $limit;

                    $previous = $page - 1;
                    $next = $page + 1;

                    $sql = "SELECT userinfo.address, property.propertyname, property.propertyaddress, property.propertytype, property.date_created, property.property_ID, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.id = user.id JOIN property ON user.user_ID = property.user_ID LIMIT $offset, $limit";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr> 
                                <td> <?php echo $row['property_ID'] ?> </td>
                                <td> <?php echo $row['propertyname'] ?> </td>
                                <td> <?php echo $row['propertytype'] ?> </td>
                                <td> <?php echo $row['propertyaddress'] ?> </td>
                                <td> <?php echo $row['fullName'] ?> </td>
                                <td> <?php echo $row['address'] ?> </td>
                                <td> <?php echo $row['date_created'] ?> </td>
                            </tr>
                        <?php
                    }
                ?>
                </tbody>
        </table>
                        </div>

    </body>
</html>