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
                    <th>Date</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Amount</th>
                    <th>Mode of Payment</th>
                    <th>Proof of Payment</th>
                    <th>Status</th>
                    <th>Date Approved</th>
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

                                                            $sql = "SELECT *, CONCAT(firstName,' ', lastName) AS fullName FROM reservation JOIN user ON reservation.user_ID = user.user_ID JOIN userinfo ON userinfo.userinfo_ID = user.userInfo_ID LIMIT $offset, $limit";
                                                            $result = mysqli_query($conn, $sql);

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <tr class = "data-row"> 
                                                                        <td> <?php echo $row['date'] ?> </td>
                                                                        <td> <?php echo $row['fullName'] ?> </td>
                                                                        <td> <?php echo $row['email'] ?> </td>
                                                                        <td> <?php echo $row['contact'] ?> </td>
                                                                        <td> <?php echo $row['amount'] ?> </td> 
                                                                        <td> <?php echo $row['mop'] ?> </td>
                                                                        <td> image </td>
                                                                        <td> status </td>
                                                                        <td> date </td>
                                                                    </tr>
                                                                <?php
                                                            }
                                                    ?> 
                                                    </tbody>
        </table>
                        </div>

    </body>
</html>