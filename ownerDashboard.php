<?php
session_start();
include "dbconn.php"; 
$email = $_REQUEST['email'];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/ownerDashboard.css"
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
			        <li  class="active">
                        <a href="ownerDashboard.php?email=<?php echo $_REQUEST['email']; ?>" class="dashboard"><i class="bx bxs-home"></i><span>Dashboard</span></a>
                    </li>
		
		            <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block"> </li>
				    </div>
			
                    <li class="dropdown">
                        <a href = "ownerProperty.php?email=<?php echo $_REQUEST['email']; ?>">
					    <i class="bx bxs-edit-location"></i><span>Post Property</span></a>
                    </li>
                
                    <li class="dropdown">
                        <a href = "ownerVisit.php?email=<?php echo $_REQUEST['email']; ?>">
					    <i class="bx bxs-edit-location"></i><span>Visit Schedule</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "reservation.php?email=<?php echo $_REQUEST['email']; ?>">
					    <i class="bx bxs-calendar-exclamation"></i><span>Reservation</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "FAQ.php?email=<?php echo $_REQUEST['email']; ?>">
					    <i class="bx bxs-message-rounded-add"></i><span>FAQ</span></a>
                    </li>

                    <li class="dropdown">
                        <a href = "ownerAboutUs.php?email=<?php echo $_REQUEST['email']; ?>">
					    <i class="bx bxs-edit-location"></i><span>About Us</span></a>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-bar-chart-alt-2"></i><span>Reports</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu5" style = "margin-left: 10px;">
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
                                            <a href="seekerUserProfile.php">Edit Profile</a>
                                        </li>
                                        <li>
                                            <a href="index.php">Logout</a>
                                        </li>      
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </nav>
	            </div>

                <!--BODY-->
                <div class = "main-content">
                <section class="section dashboard">
            <div class="row">
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                           <div class="card-body">
                              <h5 class="card-title">Reservations</h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bxs-calendar-exclamation"></i></div>
                                 <div class="ps-3">
                                    <?php
                                        include "dbconn.php";

                                        $res_query = "SELECT * FROM reservation";
                                        $res_query_num = mysqli_query($conn, $res_query);

                                            if ($res_total = mysqli_num_rows($res_query_num)) {
                                                echo '<h6> '.$res_total.' </h6>';
                                            } else {
                                                echo '<h3 class = "card-title"> No Data </h3>';
                                            }
                                    ?>
                                    <?php
                                        include "dbconn.php";

                                        $res_query = "SELECT * FROM reservation";
                                        $res_query_num = mysqli_query($conn, $res_query);

                                            if ($res_total = mysqli_num_rows($res_query_num)) {
                                                echo '<span class="text-success small pt-1 fw-bold"> '.$res_total.' </span>';
                                            } else {
                                                echo '<h3 class = "card-title"> No Data </h3>';
                                            }
                                    ?>
                                     <span class="text-muted small pt-2 ps-1">Added</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                           <div class="card-body">
                              <h5 class="card-title">Visit</h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bxs-face"></i></div>
                                 <div class="ps-3">
                                    <h6>$3,264</h6>
                                    <span class="text-success small pt-1 fw-bold">8</span> <span class="text-muted small pt-2 ps-1">added</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title">Available Room/Space </h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bxs-door-open"></i></div>
                                 <div class="ps-3">
                                    <h6>1244</h6>
                                    <span class="text-danger small pt-1 fw-bold">12</span> <span class="text-muted small pt-2 ps-1">occupied</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title">Reservations | <a href = "reservation.php"><span>See All</span></a></h5>
                              <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>User_ID</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
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

                            $sql = "SELECT *, CONCAT(firstName,' ', lastName) AS fullName FROM reservation JOIN user ON reservation.user_ID = user.user_ID JOIN userinfo ON userinfo.userinfo_ID = user.userInfo_ID LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['userInfo_ID'] ?> </td>
                                        <td> <?php echo $row['date'] ?> </td>
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['amount'] ?> </td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                <?php
                            }
                        ?>      
                                        </tbody>
                                    </table>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="card top-selling overflow-auto">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body pb-0">
                              <h5 class="card-title">Scheduled Visit <span>| See All</span></h5>
                              <table class="table table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Profile</th>
                                       <th scope="col">Name</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Time</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row"><a href="#"><img src="images/user.png" alt="" style = "width: 40px; height: 40px;"></a></th>
                                       <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                       <td>$64</td>
                                       <td class="fw-bold">124</td>
                                       <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                       <th scope="row"><a href="#"><img src="images/user.png" alt="" style = "width: 40px; height: 40px;"></a></th>
                                       <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                       <td>$46</td>
                                       <td class="fw-bold">98</td>
                                       <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                       <th scope="row"><a href="#"><img src="images/user.png" alt="" style = "width: 40px; height: 40px;"></a></th>
                                       <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                       <td>$59</td>
                                       <td class="fw-bold">74</td>
                                       <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Upcoming Visit <span>| See All</span></h5>
                        <div class="activity">
                           <div class="activity-item d-flex">
                              <div class="activite-label">32 min</div>
                              <i class='bx bxs-circle activity-badge text-success align-self-start'></i>
                              <div class="activity-content"> Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">56 min</div>
                              <i class='bx bxs-circle activity-badge text-danger align-self-start'></i>
                              <div class="activity-content"> Voluptatem blanditiis blanditiis eveniet</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">2 hrs</div>
                              <i class='bx bxs-circle activity-badge text-primary align-self-start'></i>
                              <div class="activity-content"> Voluptates corrupti molestias voluptatem</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">1 day</div>
                              <i class='bx bxs-circle activity-badge text-info align-self-start'></i>
                              <div class="activity-content"> Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">2 days</div>
                              <i class='bx bxs-circle activity-badge text-warning align-self-start'></i>
                              <div class="activity-content"> Est sit eum reiciendis exercitationem</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">4 weeks</div>
                              <i class='bx bxs-circle activity-badge text-muted align-self-start'></i>
                              <div class="activity-content"> Dicta dolorem harum nulla eius. Ut quidem quidem sit quas</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/simple-datatables.js"></script>
  
  
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
  </body>
</html>