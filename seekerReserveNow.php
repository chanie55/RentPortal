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
    <link href="seekerReservePage.css" rel="stylesheet">

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
        <div class="container-xxl py-2">
            <h1 class="mb-3" style="margin-top: 30px; text-align: center;">Reservation</h1>
                <form method = "POST" action = "addReservation.php" class="needs-validation" novalidate style="margin-left: 3%;">
                    <div class="form-row col-md d-flex justify-content-center align-items-center">

                    <?php 
                    include "dbconn.php";
                  $email = $_REQUEST['email'];
                  $query = mysqli_query($conn, "SELECT *,userinfo.firstName, userinfo.lastName, user.email, CONCAT(firstName,' ',lastName) AS fullName FROM userinfo JOIN user ON user.id = userinfo.id WHERE email = '$email'");
                  while($row=mysqli_fetch_array($query))
								{
							?>
                        <div class="col-md-3 mb-3 px-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" name = "firstname" id="validationCustom01" value="<?php echo $row['firstname'];?>" required>
                            <div class="invalid-feedback">
                                Please provide your first name
                                </div>
                        </div>
                        <div class="col-md-3 mb-3 px-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" name = "lastname" id="validationCustom02" value="<?php echo $row['lastname'];?>" required>
                            <div class="invalid-feedback">
                                Please provide your last name
                                </div>
                        </div>
                    </div>
                    <div class="form-row col-md d-flex justify-content-center align-items-center">
                        <div class="col-md-3 mb-3 px-3">
                            <label for="validationCustomUsername">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name = "email" id="validationCustomUsername" value="<?php echo $row['email'];?>" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                Please provide email address.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3 px-3">
                            <label for="validationCustom03">Contact</label>
                            <input type="text" class="form-control" name = "contact" value="<?php echo $row['contact'];?>" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid contact.
                            </div>
                        </div>
                    </div>
                    <div class="form-row col-md d-flex justify-content-center align-items-center">
                        <div class="col-md-3 mb-3 px-3">
                                <label for="validationCustom05">Amount</label>
                                <input type="text" class="form-control" name = "amount" id="validationCustom05" required>
                            <div class="invalid-feedback">
                            Please provide a valid amount.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3 px-3">
                            <label for="validationCustom04">Mode of Payment</label>
                            <select class="custom-select" name = "mod" id="paymentSelect" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">Gcash </option>
                                <option value="2">Payment in Person </option>
                            </select>   
                            <div class="invalid-feedback">
                                Please select a mode of payment.
                            </div>
                        </div>
                    </div>

                    <div class="form-row col-md d-flex justify-content-center align-items-center">
                        <div id="payGcash" class="col-md-3 mb-3 paymentHide">
                            <label> Attach Gcash Receipt</label>
                            <input type = "file" name = "document-image" style="border: solid gray 1px; padding: 6px; width: 80%; border-radius: 4px"/>
                        </div>
                    </div>
                    
                    <div class="form-row col-md d-flex justify-content-center align-items-center">
                        <div id="payPerson" class="col-md-2 mb-3 paymentHide">
                                <label for="datepicker">Day to Pay</label>
                                    <?php if (isset($_GET['payday'])) { ?>
                                        <input required type = "date" 
                                        name = "payday" 
                                        class="form-control" 
                                        width = "276"
                                        min = "2023-01-01"
                                        id="datepicker"><br>
                                    <?php } else { ?>
                                        <input required type = "date" 
                                        name = "payday" 
                                        class="form-control"
                                        min = "2023-01-01"
                                        id="datepicker"><br>
                                    <?php } ?>
                                <div class = "invalid-feedback"> 
                                    Invalid input
                                </div>
                            </div>
                        </div>

                    <div class="form-row col-md d-flex justify-content-center align-items-center">
                        <div class="col-md-3 mb-3 px-3">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                            <label class="form-check-label" for="invalidCheck">
                                Agree to <a href="https://www.facebook.com" target="_blank">terms</a> and <a href="" target="_blank">conditions</a> 
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="form-row col-md d-flex justify-content-center align-items-center">
                        <div class="mt-3">
                            <button class="btn btn-primary" name = "submit-res" type="submit">Submit form</button>
                        </div>
                    </div>
                </form>

                <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                    });
                }, false);
                })();
                </script>
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

    <!-- Payment Selection -->
    <script>

        var sel = document.getElementById("paymentSelect");
        var gcash = document.getElementById("payGcash");
        var person = document.getElementById("payPerson");

        sel.addEventListener("change", function(){
            var val = sel.value;
            if(val == "1"){
                gcash.classList.remove("paymentHide");
                person.classList.add("paymentHide");
                person.classList.remove("paymentDisplay");
                gcash.classList.add("paymentDisplay");
            }
            else if(val == "2"){
                person.classList.remove("paymentHide");
                gcash.classList.add("paymentHide");
                gcash.classList.remove("paymentDisplay");
                person.classList.add("paymentDisplay");
            }
        });
    </script>

</body>

</html>