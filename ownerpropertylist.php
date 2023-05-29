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
        <title>Report</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/propertyList.css"
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

                    <li>
                    <a href = "ownerBN.php">
					    <i class="bx bxs-message-rounded-add"></i><span>Business Name</span></a>
                    </li>
			
                    <li class="dropdown">
                        <a href = "ownerProperty.php">
					    <i class="bx bxs-edit-location"></i><span>Post</span></a>
                    </li>
                
                    <li class="dropdown">
                        <a href = "ownerVisit.php">
					    <i class="bx bxs-edit-location"></i><span>Visit Schedule</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "reservation.php">
					    <i class="bx bxs-calendar-exclamation"></i><span>Reservation</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "FAQ.php">
					    <i class="bx bxs-message-rounded-add"></i><span>FAQ</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "ownerAboutUs.php">
					    <i class="bx bxs-message-rounded-add"></i><span>About Us</span></a>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-bar-chart-alt-2"></i><span>Reports</span></a>

                        <ul class="collapse list-unstyled menu" id="pageSubmenu5" style = "margin-left: 10px;">
                            <li>
                                <a href="ownerpropertylist.php">Property List</a>
                            </li>
                            <li>
                                <a href="reservation.php">Reservation List</a>
                            </li>
                            <li>
                                <a href="#">Visit List</a>
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
					    <a class="navbar-brand" href="#"> Property List </a>
					
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
                        <h2 class="ml-lg-2">Property List</h2>
                    </div>

                    
                 </div>
                 <div class="col-sm-4">
                        <div class="search-box">
                            <i class="bx bxs-search-alt-2"></i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">                
                        </div>
                    </div>
                    <a href="reports.php" class="btn btn-primary btn-lg" id="print"><span> Print </span></a>
            <table class="table table-striped table-hover table-bordered">
                
                <thead>
                    <tr>
                        <th>Property ID</th>
                        <th>Trade Name</th>
                        <th>Property Type</th>
                        <th>Business Address</th>
                        <th>Owner Name</th>
                        <th>Owner Address</th>
                        <th>Date Posted</th>
                    </tr>
                </thead>
                <tbody>
                              
                </tbody>    
            </table>
            <div class="clearfix">
                
                <ul class="pagination">
                <?php
            
                    $query =  "SELECT COUNT(*) FROM property";
                    $result_count = mysqli_query($conn, $query);
                    $records = mysqli_fetch_row($result_count);
                    $total_records = $records[0];

                    $total_pages = ceil($total_records / $limit);
                    $link = "";

            ?>
        

            <?php
                if ($page >= 2) {
                    echo "<li class = 'page-item'>
                    <a class = 'page-link' href = 'propertyList.php?page=".($page-1)."'> 
                    <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                }

                 for ($counter = 1; $counter <= $total_pages; $counter++){
                    if ($counter == $page) {
                        $link .= "<li class = 'page-item active'>
                        <a class = 'page-link' href= 'propertyList?page="
                        .$counter."'>".$counter." </a></li>";
                    } else {
                        $link .= "<li class = 'page-item'>
                        <a class = 'page-link' href='propertyList.php?page=".$counter."'> ".$counter." </a> </li>";
                    }
                };

                echo $link;

                if($page < $total_pages) {
                    echo "<li class = 'page-item'>
                    <a class = 'page-link' href='propertyList.php?page=".($page+1)."'>
                    <i class = 'bx bxs-chevron-right'></i> </a></li>";
                }
            ?>
                </ul>
                <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
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
