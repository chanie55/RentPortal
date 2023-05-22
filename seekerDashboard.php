<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");							
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min5.css" rel="stylesheet">

    <style>
        <?php
            include "css/seekerDashboard.css"
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
                    </div>
                    <div class = "profile-user">
                        <?php 
                            $email = $_REQUEST['email'];
                            $query = mysqli_query($conn, "SELECT user.email, CONCAT(firstName,' ',lastName) AS fullName FROM userinfo JOIN user ON user.id = userinfo.id WHERE email = '$email'");
                            while($row=mysqli_fetch_array($query))
								{
							?>
                        <img src="images/user.png" class="user-pic" onclick="toggleMenu()">

                        <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="images/user.png">
                                <h4><?php echo $row['fullName']; ?></h4>
                            </div> 
                            <hr>
                             
                            <a href="seekerUserProfile.php?email=<?php echo $row['email']; ?>" class="sub-menu-link">
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
                        <?php } ?>
                    </div>      
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Search Start -->
        <div class="container-xxl search">
            <div class="container wow fadeIn" data-wow-delay="0.1s" style="padding: 20px; margin-top: 8%; opacity: 0.98">
                    <h2 class="first">Find A</h2>
                    <h2 class="second">Property Today!</h2>
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                <option selected disabled value="">Property Type</option>
                                <?php
                                    include "dbconn.php";
                            
                                    $brgy_query = "SELECT property FROM propertytype";
                                    $r = mysqli_query($conn, $brgy_query);

                                    while ($row = mysqli_fetch_array($r)) {
                                    ?>
                                        <option > <?php echo $row['property']; ?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                <option selected disabled value="">Location</option>
                                <?php
                                    include "dbconn.php";
                            
                                    $brgy_query = "SELECT barangay FROM useraddress";
                                    $r = mysqli_query($conn, $brgy_query);

                                    while ($row = mysqli_fetch_array($r)) {
                                    ?>
                                        <option > <?php echo $row['barangay']; ?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>Here are the list of posted properties in the portal</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                                    <?php 
								                
                                        $query=mysqli_query($conn,"SELECT *,propertyaddress.addresscode FROM property JOIN propertyaddress ON property.propertyaddress = propertyaddress.addresscode");
										    while($row=mysqli_fetch_array($query))
										    {
								    ?>
									
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="seekerViewProperty.php?property_ID=<?php echo $row['property_ID'];?>&addresscode=<?php echo $row['addresscode']; ?>"><img class="img-fluid" src="images/sample.jpg" alt=""/></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;"><?php echo $row['propertytype'];?></div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">&#8369 <?php echo $row['monthlyrate'];?></h5>
                                        <a class="d-block h5 mb-2" href="seekerViewProperty.php?property_ID=<?php echo $row['property_ID'];?>&addresscode=<?php echo $row['addresscode']; ?>"><?php echo $row['propertyname'];?></a>
                                        <p><i class="bx bxs-map me-2" style = "color: #5D59AF;"></i></i><?php echo $row['propertyaddress'];?></p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="bx bxs-door-open me-2" style = "color: #5D59AF;"></i></i><?php echo $row['availablerooms'];?> Available Rooms</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="bx bxs-bed me-2" style = "color: #5D59AF;"></i><?php echo $row['bed'];?> Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="bx bxs-bath me-2" style = "color: #5D59AF;"></i>Bath - </i><?php echo $row['bathroom'];?></small>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>          
                </div>
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