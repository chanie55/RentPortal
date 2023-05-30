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
                include "css/manageOwner.css"
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
			
                    <li class="active">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					    <i class="bx bxs-user"></i><span>Manage User</span></a>
                    
                        <ul class="collapse list-unstyled menu" id="homeSubmenu1" style = "margin-left: 10px;">
                            <li>
                                <a href="manageAdmin.php">Admin</a>
                            </li>
                            <li class="active">
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
					    <a class="navbar-brand" href="#"> Owner Registration </a>
					
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons"></span>
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
                                <h2 class="ml-lg-2">Owner Registration</h2>
                            </div>

                            <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center"> </div>

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
                                    <th>Address</th>
                                    <th>Business Permit</th>
                                    <th>Valid ID</th>
                                    <th>Action</th>
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

                            $sql = "SELECT userinfo.address, user.email, user.status, user.userInfo_ID, user.user_ID, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.userinfo_ID = user.userInfo_ID WHERE user.userLevel_ID = 2 AND user.status = 'Pending' LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td> <?php echo $row['address'] ?> </td>
                                        <td> 
                                            <button type="button" class="btn btn-primary addType userinfo" data-toggle="modal" data-target="#viewper" data-id='<?php echo $row['user_ID']; ?>'>View</button>
                                        </td>
                                        <td> 
                                            <button type="button" class="btn btn-primary addType userinfo" data-toggle="modal" data-target="#viewid" data-id='<?php echo $row['user_ID']; ?>'>View</button>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary addType userinfo" data-toggle="modal" data-target="#confirm" data-id='<?php echo $row['user_ID']; ?>'><i class="bx bxs-user-check"></i></button>
                                            <button type="button" class="btn btn-primary addType userinfo" data-toggle="modal" data-target="#decline" data-id='<?php echo $row['user_ID']; ?>'><i class="bx bxs-user-x"></i></button>
                                        </td>
                                    </tr>

                        <!-- View Modal -->
                        <div class="modal fade" id="viewid" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body modal-id">

                                    </div>
                                                                                
                                    <div class="modal-footer">
                                                                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- View Modal -->
                        <div class="modal fade" id="viewper" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body modal-permit">

                                    </div>
                                                                                
                                    <div class="modal-footer">
                                                                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Confirm Modal -->
                        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method = "POST" action = "">
                                    <div class="modal-body modal-accept">
                                        
                                    </div>

                                    <div class="modal-footer">
                                
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Decline Modal -->
                        <div class="modal fade" id="decline" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body modal-decline">
                                      
                                    </div>

                                    <div class="modal-footer">
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>   
                        
                        </tbody>    
                        </table>
                        <div class="clearfix">
                
                        <ul class="pagination">
                        <?php
            
                            $query =  "SELECT COUNT(*) FROM user WHERE userLevel_ID = 2 AND status != 'Active'";
                            $result_count = mysqli_query($conn, $query);
                            $records = mysqli_fetch_row($result_count);
                            $total_records = $records[0];

                            $total_pages = ceil($total_records / $limit);
                            $link = "";

                        ?>
        

                        <?php
                            if ($page >= 2) {
                                echo "<li class = 'page-item'>
                                <a class = 'page-link' href = 'manageOwner.php?page=".($page-1)."'> 
                                <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                            }

                            for ($counter = 1; $counter <= $total_pages; $counter++){
                                if ($counter == $page) {
                                    $link .= "<li class = 'page-item active'>
                                    <a class = 'page-link' href= 'manageOwner?page="
                                    .$counter."'>".$counter." </a></li>";
                                } else {
                                    $link .= "<li class = 'page-item'>
                                    <a class = 'page-link' href='manageOwner.php?page=".$counter."'> ".$counter." </a> </li>";
                                }
                            };

                            echo $link;

                            if($page < $total_pages) {
                                echo "<li class = 'page-item'>
                                <a class = 'page-link' href='manageOwner.php?page=".($page+1)."'>
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

    <script> 
        $(document).ready(function(){
            $('.userinfo').click(function(){
                var userid = $(this).data('id');
                $.ajax({
                    url: 'validid.php',
                    type: 'POST',
                    data: {userid: userid},
                    success: function(response){
                        $('.modal-id').html(response);
                        $('#viewid').modal('show');
                    }
                })
            });
        });
    </script>

    <script> 
        $(document).ready(function(){
            $('.userinfo').click(function(){
                var userid = $(this).data('id');
                $.ajax({
                    url: 'permits.php',
                    type: 'POST',
                    data: {userid: userid},
                    success: function(response){
                        $('.modal-permit').html(response);
                        $('#viewper').modal('show');
                    }
                })
            });
        });
    </script>

    <script> 
        $(document).ready(function(){
            $('.userinfo').click(function(){
                var userid = $(this).data('id');
                $.ajax({
                    url: 'accept.php',
                    type: 'POST',
                    data: {userid: userid},
                    success: function(response){
                        $('.modal-accept').html(response);
                        $('#confirm').modal('show');
                    }
                })
            });
        });
    </script>

<script> 
        $(document).ready(function(){
            $('.userinfo').click(function(){
                var userid = $(this).data('id');
                $.ajax({
                    url: 'deny.php',
                    type: 'POST',
                    data: {userid: userid},
                    success: function(response){
                        $('.modal-decline').html(response);
                        $('#decline').modal('show');
                    }
                })
            });
        });
    </script>
  </body>
</html>
