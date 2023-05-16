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
            include "css/seekerPage.css"
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
                        <a href="aboutUs.php" class="nav-item nav-link">About</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                    <div class = "dropdown">
                        <button class="btn btn-primary dropdown-toggle" type = "button" data-bs-toggle = "dropdown" data-toggle = "dropdown" aria-expanded = "false" style = "background: #5D59AF; color: white;">Register</button>
                        <ul class = "dropdown-menu">
                            <li> <a class = "dropdown-item" href = "registerSeeker.php"> Seeker </a></li>
                            <li> <a class = "dropdown-item" href = "registerOwner.php"> Owner </a></li>
                        </ul>
                    </div>      
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4"> Find a property today </h1>
                    <p class="animated fadeIn mb-4 pb-2"> Search the property at your choice </p>
                </div>
            </div>
        </div>
         Header End -->

        <!-- Search Start -->
        <div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; background: white;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-2 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-2 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-2 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn border-0 w-100 py-3" style = "background: #402950; color: white;">Search</button>
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
                            <h1 class="mb-3">Top Properties</h1>
                            <p>Below are some of the available properties for rent.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="seekerViewProperty.php"><img class="img-fluid" src="images/sample.jpg" alt=""></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;">Apartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="images/sample.jpg" alt=""></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;">Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="images/sample.jpg" alt=""></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;">Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="images/sample.jpg" alt=""></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;">Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="images/sample.jpg" alt=""></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;">Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="images/sample.jpg" alt=""></a>
                                        <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style = "background: #5D59AF;">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style = "color: #5D59AF;">Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3" style = "color: #5D59AF;">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn py-3 px-5" href="" style = "background: #5D59AF; color: white;">Browse More Property</a>
                            </div>
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
        <a href="#" class="btn btn-lg btn-lg-square back-to-top" style = "background: #5D59AF;"><i class="bx bx-chevron-up"></i></a>
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
</body>

</html>