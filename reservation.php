<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Reservation</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/reservation.css"
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
                    <a href = "reservation.php">
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
					    <a class="navbar-brand" href="#"> Reservation </a>
					
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
                    <div class = "container" style = "margin-top: 10px"> 
                        <div class = "row"> 
                            <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                                <h3 class = "text-left"> Reservation </h3>
                            </div>
                        </div>
                    

                    <!--Table Display Reservation-->
                    <div class="container-xl">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">

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
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Room</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Contact Number</th>
                                    <th>Proof of Payment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                       
                                        </td>
                                    </tr>
                        </tbody>    
                        </table>
                        <div class="clearfix">
                
                        <ul class="pagination">
                        
                        </ul>
                        <!-- <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div> -->
                    </div>
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
  </body>
</html>