<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/adminDashboard.css">
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
			        <li  class="active">
                        <a href="adminDashboard.php" class="dashboard"><i class="bx bxs-home"></i><span>Dashboard</span></a>
                    </li>
		
		            <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block"> </li>
				    </div>
			
                    <li class="dropdown">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-user"></i><span>Manage User</span></a>
                    
                        <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                            <li>
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

                        <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                            <li>
                                <a href="propertyCategory.php">Category</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					            <i class=""></i><span>Inclusions</span></a>

                                <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                                    <li>
                                        <a href="incRoom.php">Room</a>
                                    </li> 
                                    <li>
                                        <a href="incKitchen.php">Kitchen</a>
                                    </li>
                                    <li>
                                        <a href="incCR.php">Comfort Room</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="propertyNP.php">GPS</a>
                            </li>
                        </ul>
                    </li>
				
				    <li class="dropdown">
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-message-detail"></i><span>Pages</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                            <li>
                                <a href="adminAboutUs.php">About Us</a>
                            </li>
                            <li>
                                <a href="adminFAQ.php">FAQ</a>
                            </li>
                        </ul>
                    </li>

				    <li class="dropdown">
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-notepad"></i><span>Activities</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                            <li>
                                <a href="visitRecord.php">Visit</a>
                            </li>
                            <li>
                                <a href="reservationRecord.php">Reservation</a>
                            </li>
                        </ul>
                    </li>
				
				    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-bar-chart-alt-2"></i><span>Reports</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                            <li>
                                <a href="userList.php">User List</a>
                            </li>
                            <li>
                                <a href="propertyList.php">Property List</a>
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
					    <a class="navbar-brand" href="#"> Dashboard </a>
					
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
			
			
			    <div class="main-content">
			
			        <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="bx bx-user"></span>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <?php
                                        include "dbconn.php";

                                        $seekers_query = "SELECT * FROM user WHERE userLevel_ID = 3";
                                        $seekers_query_num = mysqli_query($conn, $seekers_query);

                                            if ($seekers_total = mysqli_num_rows($seekers_query_num)) {
                                                echo '<p class="category"><strong>Seekers</strong></p>';
                                                echo '<h3 class = "card-title"> '.$seekers_total.' </h3>';
                                            } else {
                                                echo '<h3 class = "card-title"> No Data </h3>';
                                            }
                                    ?> 
                                </div>
                                <div class="card-footer">
                                <?php
                                    include "dbconn.php";

                                    $countowner = "SELECT COUNT(*) FROM user WHERE userLevel_ID = 3";
                                    $result = mysqli_query($conn, $countowner);
                            
                                        if ($percentage = mysqli_num_rows($result) / 3) {
                                            echo "<span class = 'progress' data-value = '.$percentage.'> </span>";
                                            echo '<span class = "label"> '.$percentage.' </span>';
                                        } else {
                                            echo '<h3 class = "fs-2"> No Data </h3>';
                                        }
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="bx bx-user"></span>
                                    </div>
                                </div>

                                <div class="card-content">
                                <?php
                                        include "dbconn.php";

                                        $owners_query = "SELECT * FROM user WHERE userLevel_ID = 2";
                                        $owners_query_num = mysqli_query($conn, $owners_query);

                                            if ($owners_total = mysqli_num_rows($owners_query_num)) {
                                                echo '<p class="category"><strong>Owners</strong></p>';
                                                echo '<h3 class = "card-title"> '.$owners_total.' </h3>';
                                            } else {
                                                echo '<h3 class = "card-title"> No Data </h3>';
                                            }
                                    ?> 
                                </div>
                                <div class="card-footer">
                                <?php
                                    include "dbconn.php";

                                    $countowner = "SELECT COUNT(*) FROM user WHERE userLevel_ID = 2";
                                    $result = mysqli_query($conn, $countowner);
                            
                                        if ($percentage = mysqli_num_rows($result) / 3) {
                                            echo "<span class = 'progress' data-value = '.$percentage.'> </span>";
                                            echo '<span class = "label"> '.$percentage.' </span>';
                                        } else {
                                            echo '<h3 class = "fs-2"> No Data </h3>';
                                        }
                                ?> 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="bx bxs-building"></span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Residential</strong></p>
                                    <h3 class="card-title">4</h3>
                                </div>
                                <div class="card-footer">
                                    <span class = "progress" data-value = "50%"> </span>
                                    <span class = "label"> 50% </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    <span class="bx bxs-building"></span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Commercial</strong></p>
                                    <h3 class="card-title">4</h3>
                                </div>
                                <div class="card-footer">
                                    <span class = "progress" data-value = "80%"> </span>
                                    <span class = "label"> 80% </span>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="row ">
                        <div class="col-lg-7 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Pending Owner Registration</h4>
                                    <a href = "manageOwner.php"> <p class="category">See Detailed Information</p> </a>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr></thead>
                                        <tbody>
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

                            $sql = "SELECT userinfo.userInfo_ID, user.email, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.id = user.id WHERE user.userLevel_ID = 2 LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['userInfo_ID'] ?> </td>
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        
                                    </tr>
                                <?php
                            }
                        ?>      
                                        </tbody>
                                    </table>
                                </div>
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
  
   <!-- Progress Bar -->
   <script> 
     const allProgress = document.querySelectorAll('.card .progress');

            allProgress.forEach(item => {
                item.style.setProperty('--value', item.dataset.value)
            });
   </script>  
  </body>
</html>


