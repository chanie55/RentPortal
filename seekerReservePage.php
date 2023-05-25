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
            include "seekerReservePage.css"
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
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

        <!-- Search Start -->
        <div class="container-xxl search">
        <div class="container wow fadeIn" data-wow-delay="0.1s" style="padding: 20px; margin-top: 8%; opacity: 0.98">
                <div class="row g-2">
                    <h2 class="first">Find A Property Today!</h2>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Property List Start -->
        <div class="container-xxl py-1">
            <div class="container">
                <span class="head"> Reservation Rate </span>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        include "dbconn.php";
                        $propid = $_REQUEST['prop_ID'];

                        $result = mysqli_query($conn, "SELECT monthlyrate FROM property WHERE property_ID = '$propid'"); 

                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $rate = $row['monthlyrate'];
                            $downPayment = $rate * 0.5; // Calculate 50% down payment
                            $total = $downPayment + $rate; // Calculate the total
                        } else {
                            // Handle the case when the query fails
                            $rate = "N/A";
                            $downPayment = "N/A";
                            $total = "N/A";
                        } 
                        ?>
                        <tr>
                            <th scope="row"> Property Rate </th>
                            <td> ₱<?php echo $rate ?>.00</td>
                        </tr>
                        <tr>
                            <th scope="row"> Property 50% Down Payment </th>
                            <td> ₱<?php echo $downPayment ?>.00</td>
                        </tr>
                        <tr>
                            <th scope="row"> Advance Payment for 1 month </th>
                            <td> ₱<?php echo $rate ?>.00</td>
                        </tr>
                        <tr class="table-light">
                            <th scope="row"> Total </th>
                            <td style="font-weight: bold;"> ₱<?php echo $total ?>.00 </td>
                        </tr>     
                        <?php  ?>
                    </tbody>
                    </table>

                            <?php 	 
                                include "dbconn.php";

                                $email = $_SESSION['email'];
                                $query=mysqli_query($conn,"SELECT * FROM reservationdetails");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <button class="reserveBtn" type="button" onclick="window.location.href='seekerReserveNow.php'">Reserve Now </button>
                            <p>How to Reserve?</p>
                            <h1 class="mb-3">Reservation Method</h1>
                            <h6> Reservation via Gcash </h6>
                            <ol>
                                <li> On Gcash app, select  “Send Money” </li><br>
                                <li> On the “Send Money to Gcash Account” section, select “Express Send”. </li><br>
                                <li> Input the contact number - (Your number here) (Your name here) and input <br> the amount required to pay. </li><br>
                                <li> Review the registered name and amount for validation. Click send to continue. </li><br>
                                <li> Screenshot the gcash transaction. </li><br>
                                <li> On this page, click the “Reserve Now” button </li><br>
                                <li> Fill-out the reservation form and attach your receipt. </li><br>
                            </ol>
                        </div>
                        <?php } ?>
            </div>
        </div>
        <!-- Property List End -->

       <!-- Footer Start -->
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
        <!-- Footer End -->


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