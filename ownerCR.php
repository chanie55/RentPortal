<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Property Amenities</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/ownerCR.css"
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

                        <ul class="collapse list-unstyled menu" id="pageSubmenu2" style = "margin-left: 10px;">
                            <li>
                                <a href="ownerProperty.php">Post Property</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					            <span>Manage Inclusions</span></a>

                                <ul class="collapse list-unstyled menu" id="pageSubmenu3" style = "margin-left: 10px;">
                                    <li class="active">
                                        <a href="ownerRoom.php">Room</a>
                                    </li> 
                                    <li>
                                        <a href="ownerKitchen.php">Kitchen</a>
                                    </li>
                                    <li  class="active">
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

                    <li class="dropdown">
                    <a href = "reservation.php">
					    <i class="bx bxs-calendar-exclamation"></i><span>Reservation</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "FAQ.php">
					    <i class="bx bxs-message-rounded-add"></i><span>FAQ</span></a>
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
					    <a class="navbar-brand" href="#"> Comfort Room </a>
					
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
                            <form method = "post" action = ""> 
                            <div class = "form-group"> 
                                    <label> Add CR Type </label>
                                    <input type = "text" name = "type" id = "type_0" class = "myInput form-control">
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary addType" data-toggle="modal" data-target="#confirm">
                                    Save
                                </button>

                                <!-- Confirm Add Modal -->
                                <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <p>Are you sure you want to add this property category?</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary" name = "submit-type">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id = "hob"> </div>
                            </form>

                            <div class="card card-stats"> </div>
                        </div>
                    </div>

                    <?php
                        include "dbconn.php";

                        if (isset($_POST['submit-type'])) {
                            $type = $_POST['type'];

                            $cat_sql = "INSERT INTO cr(cr_type) VALUES ('$type')";
                            $result = mysqli_query($conn, $cat_sql);    
                            if ($result === TRUE) {
                                 echo '<div class = "alert alert-success" role = "alert"> Added successfully! </div>';
                            }
                           
                        }
                    ?>

                    <div class="container-xl">
                        <div class="table-wrapper">
                            <div class="table-title">

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Type</th>
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

                            $sql = "SELECT * FROM cr";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['cr_Type'] ?> </td>
                                    </tr>
                                <?php
                            }
                        ?> 
                        
                        </tbody>    
                        </table>
                        <div class="clearfix">
                
                        <ul class="pagination">
                        <?php
            
                            $query =  "SELECT COUNT(*) FROM cr";
                            $result_count = mysqli_query($conn, $query);
                            $records = mysqli_fetch_row($result_count);
                            $total_records = $records[0];

                            $total_pages = ceil($total_records / $limit);
                            $link = "";

                        ?>
        

                        <?php
                            if ($page >= 2) {
                                echo "<li class = 'page-item'>
                                <a class = 'page-link' href = 'incCR.php?page=".($page-1)."'> 
                                <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                            }

                            for ($counter = 1; $counter <= $total_pages; $counter++){
                                if ($counter == $page) {
                                    $link .= "<li class = 'page-item active'>
                                    <a class = 'page-link' href= 'incCR?page="
                                    .$counter."'>".$counter." </a></li>";
                                } else {
                                    $link .= "<li class = 'page-item'>
                                    <a class = 'page-link' href='incCR.php?page=".$counter."'> ".$counter." </a> </li>";
                                }
                            };

                            echo $link;

                            if($page < $total_pages) {
                                echo "<li class = 'page-item'>
                                <a class = 'page-link' href='incCR.php?page=".($page+1)."'>
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
  
   <!-- Progress Bar -->
   <script> 
     const allProgress = document.querySelectorAll('.card .progress');

            allProgress.forEach(item => {
                item.style.setProperty('--value', item.dataset.value)
            });
   </script>  
  </body>
</html>