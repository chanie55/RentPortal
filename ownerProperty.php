<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Post Property</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/ownerProperty.css">
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
                        <a href="adminDashboard.php" class="dashboard"><i class="bx bxs-home"></i><span>Dashboard</span></a>
                    </li>
		
		            <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block"> </li>
				    </div>
			
                    <li class="active">
                        <a href = "ownerProperty.php">
					    <i class="bx bxs-user"></i><span>Post Property</span></a>
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

                <!--- Form -->
                <form class="needs-validation" novalidate>
                <div class="container">
            <div class="content">
                <div class="form-row">
                <div class="form-row col-md-7 mb-3">
                            <label for="validationCustom"> Property Name </label>
                            <input type="text" name = "propertyname" class="form-control" id="validationCustom" required>
                        </div>
                        
                        <div class="col">
                            <label for="validationCustom00">Property Type</label>
                            <select class="form-control">
                            <option>Residential</option>
                            <option>Commercial</option>
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
                            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" required>
                        </div>
                </div>
                        

                    <div class="form-row">
                        <div class="col mb-3">
                            <label for="validationCustom01"> Address </label>
                            <a href = "viewmap.php"><i class = "bx bxs-edit-location"> </i></a>
                            <input type="text" name = "address" class="form-control" id="validationCustom01" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input type="email" name = "email" class="form-control" id="validationCustom02" required>
                        <div class = "invalid-feedback"> 
                                Invalid email address
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Contact</label>
                            <input type="number" name = "contact" pattern = "[0-9]{11}" class="form-control" id="validationCustom03" required>
                            <div class = "invalid-feedback"> 
                                Contact must be 11 digits
                            </div>
                        </div> 
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Montly Rate</label>
                            <input type="text" name = "monthlyrate" class="form-control" id="validationCustom04" required>
                        </div>

                        <div class="col">
                            <label for="validationCustom05">Total Rooms</label>
                            <input type="text" name = "totalrooms" pattern = "[0-9]{11}" class="form-control" id="validationCustom05" required>
                        </div> 

                        <div class="col">
                            <label>Room Type</label>
                            <select class="form-control">
                            <option>...</option>
                            <option>...</option>
                            </select>
                            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                        <label>Bed Type</label>
                            <select class="form-control">
                            <option>...</option>
                            <option>...</option>
                            </select>
                            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" required>
                        </div>

                        <div class="col">
                        <label>Kitchen Type</label>
                            <select class="form-control">
                            <option>...</option>
                            <option>...</option>
                            </select>
                            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" required>
                        </div>

                        <div class="col">
                        <label>Comfortroom Type</label>
                            <select class="form-control">
                            <option>...</option>
                            <option>...</option>
                            </select>
                            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" required>
                        </div>
                        
                        <div class="col">
                        <label for="validationCustom06">Landmark</label>
                        <input type="text" name = "landmark"  class="form-control" id="validationCustom06" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom07"> Description </label>
                            <textarea type="text" name = "description" class="form-control" id="validationCustom07" required></textarea>
                        </div>
                    </div>

                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> Photos of Property </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                        </form>

                    <button class="form-btn btn btn-cancel cancel" onclick="closeAdd()">Cancel</button>
                <button class="form-btn btn btn-primary" onclick="" name = "submit-tenant">Add</button>

							
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


