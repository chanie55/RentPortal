<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
if(!isset($_SESSION['email']))
{
	header("location:userLogin.php");
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentin Web Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min5.css" rel="stylesheet">

    <style>
        <?php
            include "css/useractivity.css"
        ?>
    </style>

</head>


<body>
<div class="container-xxl bg-white p-0">
 

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <h1 class="m-0" style = "color: #5D59AF;">Rentin</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="seekerDashboard.php" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                    </div>
                    <div class = "profile-user">
                        <img src="images/user1.png" class="user-pic" onclick="toggleMenu()">

                        <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="images/user1.png">
                                <h4>James Aldrino</h4>
                            </div> 
                            <hr>
                             
                            <a href="seekerUserProfile.php" class="sub-menu-link">
                                <img src="images/profile.png">
                                <p>Edit Profile</p>
                                <span>></span>
                            </a>
                            <a href="index.php" class="sub-menu-link">
                                <img src="images/logout1.png">
                                <p>Logout</p>
                                <span>></span>
                            </a>
                        </div>
                        </div>
                    </div>      
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Search Start 
        <div class="container-xxl search">
        <div class="container wow fadeIn" data-wow-delay="0.1s" style="padding: 20px; margin-top: 8%; opacity: 0.98">
                <div class="row g-2">
                    <h2 class="first">Find A Property Today!</h2>
                </div>
            </div>
        </div>
         Search End -->

        <br>
        <!-- Property List Start -->
        <div class="container-xxl py-1">
            <div class="container">
                <h1 class="mb-3">Reservations</h1>
                <p> You have made 1 reservation today </p>

                <div class="">
                        <div class=""> 
                            <table class="table table-striped table-hover table-bordered" style = "font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Property Listing</th>
                                        <th>Amount Paid</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "dbconn.php";
                                        $uid = $_SESSION['user_ID'];
                            
                                        if(isset($_GET['page']) && $_GET['page'] !== "") {
                                            $page = $_GET['page'];
                                        } else {
                                            $page = 1;
                                        }

                                        $limit = 4;
                                        $offset = ($page - 1) * $limit;

                                        $previous = $page - 1;
                                        $next = $page + 1;

                                        $sql = "SELECT *,reservation.date, reservation.amount, reservation.status, userinfo.firstname FROM property JOIN reservation ON reservation.property_ID = property.property_ID
                                                    JOIN user ON user.user_ID = reservation.user_ID JOIN userinfo ON userinfo.userInfo_ID = user.userInfo_ID WHERE user.user_ID = '$uid' LIMIT $offset, $limit";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                                <tr class = "data-row"> 
                                                    <td> <?php echo $row['date'] ?> </td>
                                                    <td> <?php echo $row['title'] ?> </td>
                                                    <td> <?php echo $row['amount'] ?> </td> 
                                                    <td> <?php echo $row['status'] ?> </td>
                                                </tr>

                                                 
                                            <?php
                                        }
                                    ?> 
                                </tbody>    
                            </table>
                            <div class="clearfix">
                
                            <ul class="pagination">
                                <?php
            
                                    $query =  "SELECT COUNT(*) FROM reservation";
                                    $result_count = mysqli_query($conn, $query);
                                    $records = mysqli_fetch_row($result_count);
                                    $total_records = $records[0];

                                    $total_pages = ceil($total_records / $limit);
                                    $link = "";

                                ?>
        

                                <?php
                                    if ($page >= 2) {
                                        echo "<li class = 'page-item'>
                                        <a class = 'page-link' href = 'reservation.php?page=".($page-1)."'> 
                                        <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                                    }

                                    for ($counter = 1; $counter <= $total_pages; $counter++){
                                        if ($counter == $page) {
                                            $link .= "<li class = 'page-item active'>
                                            <a class = 'page-link' href= 'reservation?page="
                                                .$counter."'>".$counter." </a></li>";
                                        } else {
                                            $link .= "<li class = 'page-item'>
                                                <a class = 'page-link' href='reservation.php?page=".$counter."'> ".$counter." </a> </li>";
                                        }
                                    };

                                    echo $link;

                                    if($page < $total_pages) {
                                        echo "<li class = 'page-item'>
                                        <a class = 'page-link' href='reservation.php?page=".($page+1)."'>
                                        <i class = 'bx bxs-chevron-right'></i> </a></li>";
                                    }
                                ?>
                            </ul>
                            <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
                            </div>
                        </div> 
                    </div>    
            </div>
        </div>
        <!-- Property List End -->
<br>
<br>
                <!-- Property List Start -->
                <div class="container-xxl py-1">
            <div class="container">
                <h1 class="mb-3">Scheduled Visit</h1>
                <p> You have scheduled a visit today </p>

                <div class="">
                        <div class=""> 
                            <table class="table table-striped table-hover table-bordered" style = "font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Property Listing</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "dbconn.php";
                                        $uid = $_SESSION['user_ID'];
                            
                                        if(isset($_GET['page']) && $_GET['page'] !== "") {
                                            $page = $_GET['page'];
                                        } else {
                                            $page = 1;
                                        }

                                        $limit = 4;
                                        $offset = ($page - 1) * $limit;

                                        $previous = $page - 1;
                                        $next = $page + 1;

                                        $sql = "SELECT * FROM schedule_list JOIN property ON property.property_ID = schedule_list.property_ID WHERE schedule_list.user_ID = '$uid' LIMIT $offset, $limit";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                                <tr class = "data-row"> 
                                                    <td> <?php echo $row['start_datetime'] ?> </td>
                                                    <td> <?php echo $row['end_datetime'] ?> </td>
                                                    <td> <?php echo $row['title'] ?> </td> 
                                                    <td> <?php echo $row['status'] ?> </td>
                                                </tr>

                                                 
                                            <?php
                                        }
                                    ?> 
                                </tbody>    
                            </table>
                            <div class="clearfix">
                
                            <ul class="pagination">
                                <?php
            
                                    $query =  "SELECT COUNT(*) FROM reservation";
                                    $result_count = mysqli_query($conn, $query);
                                    $records = mysqli_fetch_row($result_count);
                                    $total_records = $records[0];

                                    $total_pages = ceil($total_records / $limit);
                                    $link = "";

                                ?>
        

                                <?php
                                    if ($page >= 2) {
                                        echo "<li class = 'page-item'>
                                        <a class = 'page-link' href = 'reservation.php?page=".($page-1)."'> 
                                        <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                                    }

                                    for ($counter = 1; $counter <= $total_pages; $counter++){
                                        if ($counter == $page) {
                                            $link .= "<li class = 'page-item active'>
                                            <a class = 'page-link' href= 'reservation?page="
                                                .$counter."'>".$counter." </a></li>";
                                        } else {
                                            $link .= "<li class = 'page-item'>
                                                <a class = 'page-link' href='reservation.php?page=".$counter."'> ".$counter." </a> </li>";
                                        }
                                    };

                                    echo $link;

                                    if($page < $total_pages) {
                                        echo "<li class = 'page-item'>
                                        <a class = 'page-link' href='reservation.php?page=".($page+1)."'>
                                        <i class = 'bx bxs-chevron-right'></i> </a></li>";
                                    }
                                ?>
                            </ul>
                            <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
                            </div>
                        </div> 
                    </div>      
            </div>
        </div>
        <!-- Property List End -->

       <!-- Footer Start 
       <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Rentin Portal</a>, All Right Reserved. 
							

							Designed By <a class="border-bottom" href="">Rentin Portal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

    </script>
</body>

</html>