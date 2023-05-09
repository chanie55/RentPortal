<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>About Us Page</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/adminAboutUs.css"
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
                                <a href="propertyInclusion.php">Inclusions</a>
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
					    <a class="navbar-brand" href="#"> About Us Page </a>
					
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

                    <!--About Us Form-->
                    <div class = "container" style = "margin-top: 10px"> 
                        <div class = "row"> 
                            <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                                <h3 class = "text-left"> Add About Us </h3>
                            </div>

                            <div class = "offset-md-1 col-md-10">
                                <form method = "POST" action = ""> 
                                    <div class = "form-group">
                                        <label> Title </label>
                                        <input type = "text" name = "question" class = "form-control" required/>
                                    </div>

                                    <div class = "form-group"> 
                                        <label> Content </label>
                                        <textarea name = "answer" id = "answer" class = "form-control" required> </textarea>
                                    </div>

                                    <input type = "submit" name = "submit-faq" class = "btn btn-info" value = "Save"/>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                    

                    <!--Table Display FAQ-->
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
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
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

                            $sql = "SELECT userinfo.id, user.email, user.status, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.id = user.id WHERE user.userLevel_ID = 1 LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td>
                                            <?php
                                                if ($row['status'] == 1) {
                                                    echo '<p> <a href = "adminstatus.php?id='.$row['id'].'&status=0"> active </a> </p>';
                                                } else {
                                                    echo '<p> <a href = "adminstatus.php?id='.$row['id'].'&status=1"> inactive </a> </p>';
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
            
                            $query =  "SELECT COUNT(*) FROM user";
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


