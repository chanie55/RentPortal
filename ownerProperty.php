<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Post Property</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/ownerProperty.css"
            ?>
        </style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
    
    <div class="wrapper">
        <div class="body-overlay"></div>

            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><i class='bx bxs-building-house'></i><span>Rentin</span></h3>
                </div>

                <ul class="list-unstyled components">
			        <li>
                        <a href="ownerDashboard.php" class="dashboard"><i class="bx bxs-home"></i><span>Dashboard</span></a>
                    </li>
		
		            <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block"> </li>
				    </div>
			
                    <li class="dropdown">
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-folder-open"></i><span>Property</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                            <li>
                                <a href="ownerProperty.php">Post Property</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					            <i class=""></i><span>Manage Inclusions</span></a>

                                <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                                    <li>
                                        <a href="ownerRoom.php">Room</a>
                                    </li> 
                                    <li>
                                        <a href="ownerKitchen.php">Kitchen</a>
                                    </li>
                                    <li>
                                        <a href="ownerCR.php">Comfort Room</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                
                    <li>
                        <a href = "ownerVisit.php">
					    <i class="bx bxs-edit-location"></i><span>Visit Schedule</span></a>
                    </li>

                    <li>
                    <a href = "#">
					    <i class="bx bxs-calendar-exclamation"></i><span>Reservation</span></a>
                    </li>

                    <li>
                    <a href = "FAQ.php">
					    <i class="bx bxs-message-rounded-add"></i><span>FAQ</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-bar-chart-alt-2"></i><span>Reports</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                            <li>
                                <a href="#">Property List</a>
                            </li>
                        </ul>
                    </li>
               </ul>   
            </nav>
		
		

            <!-- Page Content  -->
            <div id="content">
		
		        <div class="top-navbar">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="bx bx-menu-alt-left"></span>
                        </button>
					    <a class="navbar-brand" href="#"> Post Property </a>
					
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">   
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="bx bx-user-circle"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Edit Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Logout</a>
                                        </li>      
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </nav>
	            </div>

                <div class = "main-content">

                    <div class = "containers" style = "margin-top: 10px;">
                        <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                            <h4 class = "text-left"> Add Property Details </h4>
                            <br>
                            <br>
                        </div>
                        <!--- Form -->
                        
                            <div class="container">
            <div class="content">
                <form method = "post" action = "addProperty.php" class="needs-validation" novalidate>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Property Name</label>
                                <?php if (isset($_GET['propertyname'])) { ?>
                                    <input required type = "text" 
                                    name = "propertyname" 
                                    class="form-control" 
                                    id="validationCustom01"
                                    value = "<?php echo $_GET['propertyname']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                    name = "propertyname" 
                                    class="form-control"
                                    id="validationCustom01"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                Please provide your property name
                                </div>
                        </div>

                        <div class="col-md-6 mb-3">    
                            <label for="validationCustom02">Property Type </label>
                            <select class="custom-select" id="validationCustom02" name = "property" required> 
                            <option selected disabled value="">Choose...</option>
                                                <?php
                                                    include "dbconn.php";
                            
                                                    $name_query = "SELECT property FROM propertytype";
                                                    $r = mysqli_query($conn, $name_query);

                                                    while ($row = mysqli_fetch_array($r)) {
                                                    ?>
                                                    <option> <?php echo $row['property']; ?></option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>
                                <div class = "invalid-feedback"> 
                                Please select a property type
                                </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Address</label>
                            <a href = "viewmap.php"><i class = "bx bxs-edit-location"> </i></a>
                                <?php if (isset($_GET['address'])) { ?>
                                    <input required type = "text" 
                                    name = "address" 
                                    class="form-control" 
                                    id="validationCustom03"
                                    value = "<?php echo $_GET['address']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                    name = "address" 
                                    class="form-control"
                                    id="validationCustom03"><br>
                                <?php } ?>
                            <div class = "invalid-feedback"> 
                                Please provide your property address
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Email</label>
                                <?php if (isset($_GET['email'])) { ?>
                                    <input required type = "email" 
                                    name = "email" 
                                    class="form-control" 
                                    id="validationCustom01"
                                    value = "<?php echo $_GET['email']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "email" 
                                    name = "email" 
                                    class="form-control"
                                    id="validationCustom01"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                Please provide your email
                                </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Contact</label>
                                <?php if (isset($_GET['contact'])) { ?>
                                    <input required type = "number"
                                    name = "contact"
                                    pattern = "[0-9]{11}" 
                                    class="form-control" 
                                    id="validationCustom01"
                                    value = "<?php echo $_GET['contact']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "number" 
                                    name = "contact" 
                                    pattern = "[0-9]{11}" 
                                    class="form-control"
                                    id="validationCustom01"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                Please provide your property name
                                </div>
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Monthly Rate</label>
                                <?php if (isset($_GET['rate'])) { ?>
                                    <input required type = "number" 
                                    name = "rate" 
                                    class="form-control"
                                    id="validationCustom06"
                                    value = "<?php echo $_GET['rate']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "number" 
                                    name = "rate" 
                                    class="form-control"
                                    id="stpurok"><br>
                                <?php } ?>
                            <div class = "invalid-feedback"> 
                                Please provide the monthly rate
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Total Rooms</label>
                                <?php if (isset($_GET['totalrooms'])) { ?>
                                    <input required type = "number" 
                                    name = "totalrooms" 
                                    class="form-control"
                                    id="validationCustom06"
                                    value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "number" 
                                    name = "totalrooms" 
                                    class="form-control"
                                    id="validationCustom06"><br>
                                <?php } ?>
                            <div class = "invalid-feedback"> 
                                Contact must be 11 digits
                            </div>
                        </div> 

                        <div class="col-md-4 mb-3">    
                            <label for="validationCustom02">Room Type </label>
                            <select class="custom-select" id="validationCustom02" name = "roomtype" required> 
                            <option selected disabled value="">Choose...</option>
                                            </select>
                                <div class = "invalid-feedback"> 
                                Please select a room type
                                </div>
                        </div>
                    </div>

                        <div class="form-row">
                        <div class="col-md-4 mb-3">    
                            <label for="validationCustom02">Bed Type </label>
                            <select class="custom-select" id="validationCustom02" name = "bedtype" required> 
                            <option selected disabled value="">Choose...</option>
                                            </select>
                                <div class = "invalid-feedback"> 
                                Please select a bed type
                                </div>
                        </div>

                        <div class="col-md-4 mb-3">    
                            <label for="validationCustom02">Kitchen Inclusion </label>
                            <select class="custom-select" id="validationCustom02" name = "kitchentype" required> 
                            <option selected disabled value="">Choose...</option>
                                            </select>
                                <div class = "invalid-feedback"> 
                                Please choose kitchen inclusion
                                </div>
                        </div>

                        <div class="col-md-4 mb-3">    
                            <label for="validationCustom02">Comfort Room Inclusion </label>
                            <select class="custom-select" id="validationCustom02" name = "crtype" required> 
                            <option selected disabled value="">Choose...</option>
                                            </select>
                                <div class = "invalid-feedback"> 
                                Please choose comfort room inclusion
                                </div>
                        </div>
                        </div>

                        <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom07"> Description </label>
                                            <textarea type="text" name = "description" class="form-control" id="validationCustom07" required></textarea>
                                        </div>
                                    </div>

                                   
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1"> Photos of Property </label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>

                        <button class="btn btn-primary" type="submit" name = "submit-property">Add</button>
                        <br><br>
                    </div>
                    
                    
                </form>


                            

                            
                        </div>
                    </div>   
                </div>             
							
				<footer class="footer">
                    <div class="container-fluid">
				        <div class="row">
				            <div class="col-md-6">
				                <p class="copyright d-flex justify-content-end"> 
                                &copy 2023 Design by Rentin Portal | STI College General Santos
                                </p>
				            </div>
				        </div>
				    </div>
                </footer>
					
			</div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });      
   </script>

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


  </body>
</html>


