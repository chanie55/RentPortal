<?php
session_start();
include "dbconn.php"; 
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Manage User</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/manageAdmin.css"
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
                        <a href="adminDashboard.php" class="dashboard"><i class="bx bxs-home"></i><span>Dashboard</span></a>
                    </li>
		
		            <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block"> </li>
				    </div>
			
                    <li class="active" id="manageUserDropdown">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-user"></i><span>Manage User</span></a>
                    
                        <ul class="collapse list-unstyled menu" id="homeSubmenu1" style = "margin-left: 10px;">
                            <li class="active" style=>
                                <a href="manageAdmin.php">Admin</a>
                            </li>
                            <li>
                                <a href="manageOwner.php">Owner</a>
                            </li>
                        </ul>
                    </li>
                    
                
                    <li class="dropdown">
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-folder-open"></i><span>Property</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu2" style = "margin-left: 10px;">
                            <li>
                                <a href="propertyCategory.php">Category</a>
                            </li>
                            <li>
                                <a href="propertyMap.php">Map</a>
                            </li>
                        </ul>
                    </li>

				    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-bar-chart-alt-2"></i><span>Reports</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu5" style = "margin-left: 10px;">
                            <li>
                                <a href="userList.php">User List</a>
                            </li>
                            <li>
                                <a href="propertyList.php">Property List</a>
                            </li>
                            <li>
                                <a href="visitRecord.php">Visit</a>
                            </li>
                            <li>
                                <a href="reservationRecord.php">Reservation</a>
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
					    <a class="navbar-brand" href="#"> Manage Admin </a>
					
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        </div>
                        </div>
                    </nav>
	            </div>
			
			
			    <div class="main-content">
			
			        <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                            </div>
                        </div>

                    </div>


            <div class="container-xl">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Admin List</h2>
                            </div>

                            <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
		                        <i class="bx bxs-user-plus"></i> <span>Add</span></a>
                            </div>

                            <div class="col-sm-4">
                                <div class="search-box">
                                    <i class="bx bxs-search-alt-2"></i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
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

                            $sql = "SELECT userinfo.id, user.email, user.status, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.id = user.id WHERE user.userLevel_ID = 1 LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td>
                                            <?php
                                                if ($row['status'] == 'Active') {
                                                    echo '<p> <a href = "adminstatus.php?id='.$row['id'].'&status=Inactive"> active </a> </p>';
                                                } else {
                                                    echo '<p> <a href = "adminstatus.php?id='.$row['id'].'&status=Active"> inactive </a> </p>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>         
                        </tbody>    
                        </table>
                        <div class="clearfix">
                
                        <ul class="pagination">
                        <?php
            
                            $query =  "SELECT COUNT(*) FROM user WHERE userLevel_ID = 1";
                            $result_count = mysqli_query($conn, $query);
                            $records = mysqli_fetch_row($result_count);
                            $total_records = $records[0];

                            $total_pages = ceil($total_records / $limit);
                            $link = "";

                        ?>
        

                        <?php
                            if ($page >= 2) {
                                echo "<li class = 'page-item'>
                                <a class = 'page-link' href = 'manageAdmin.php?page=".($page-1)."'> 
                                <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                            }

                            for ($counter = 1; $counter <= $total_pages; $counter++){
                                if ($counter == $page) {
                                    $link .= "<li class = 'page-item active'>
                                    <a class = 'page-link' href= 'manageAdmin?page="
                                    .$counter."'>".$counter." </a></li>";
                                } else {
                                    $link .= "<li class = 'page-item'>
                                    <a class = 'page-link' href='manageAdmin.php?page=".$counter."'> ".$counter." </a> </li>";
                                }
                            };

                            echo $link;

                            if($page < $total_pages) {
                                echo "<li class = 'page-item'>
                                <a class = 'page-link' href='manageAdmin.php?page=".($page+1)."'>
                                <i class = 'bx bxs-chevron-right'></i> </a></li>";
                            }
                        ?>
                        </ul>
                        <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
                    </div>
                </div>
            </div>

<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method = "post" action = "addAdmin.php">
                <div class="modal-header">
                    <h4 class="modal-title">Add Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                                <?php if (isset($_GET['lastname'])) { ?>
                                    <input required type = "text" 
                                        name = "firstname" 
                                        class="form-control" 
                                        id="validationCustom01"
                                        value = "<?php echo $_GET['lastname']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                        name = "firstname" 
                                        class="form-control"
                                        id="validationCustom01"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                    Please provide your first name
                                </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                                <?php if (isset($_GET['lastname'])) { ?>
                                    <input required type = "text" 
                                        name = "lastname" 
                                        class="form-control" 
                                        id="validationCustom02"
                                        value = "<?php echo $_GET['lastname']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                        name = "lastname" 
                                        class="form-control"
                                        id="validationCustom02"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                    Please provide your last name
                                </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom03">Email</label>
                                <?php if (isset($_GET['email'])) { ?>
                                    <input required type = "email" 
                                    name = "email" 
                                    class="form-control" 
                                    id="validationCustom03"
                                    value = "<?php echo $_GET['email']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "email" 
                                    name = "email" 
                                    class="form-control"
                                    id="validationCustom03"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                    Invalid email address
                        </div>
                    </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Contact</label>
                            <?php if (isset($_GET['contact'])) {
                                $contactValue = $_GET['contact'];
                                if (substr($contactValue, 0, 4) !== '+639') {
                                    $contactValue = '+639' . ltrim($contactValue, '0');
                                }
                            ?>
                                <input required type="tel"
                                    name="contact"
                                    class="form-control"
                                    pattern="[+0-9]{11}"
                                    maxlength="11"
                                    id="validationCustom06"
                                    value="<?php echo $contactValue; ?>"><br>
                            <?php } else { ?>
                                <input required type="tel"
                                    name="contact"
                                    class="form-control"
                                    pattern="[+0-9]{11}"
                                    maxlength="11"
                                    id="validationCustom06"><br>
                            <?php } ?>
                            <div class = "invalid-feedback"> 
                                Contact must be 11 digits
                            </div>
                        </div>

                        <fieldset class="form-group row">
                            <legend class="col-form-label col-sm-6 float-sm-left pt-0">Gender</legend>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom08">Password</label>
                                <input type="text" name = "password" class="form-control" id="validationCustom08" required>
                                <div class = "invalid-feedback"> 
                                Please enter your password
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom09">Confirm Password</label>
                                <input type="text" name = "password2" class="form-control" id="validationCustom09" required>
                                <div class = "invalid-feedback"> 
                                Please re-enter your password
                                </div>
                            </div>
                        </div>
            </div>

            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" name = "submit-admin" value="Add">
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
  
   <!-- Progress Bar -->
   <script> 
     const allProgress = document.querySelectorAll('.card .progress');

            allProgress.forEach(item => {
                item.style.setProperty('--value', item.dataset.value)
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
