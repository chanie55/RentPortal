<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
if(!isset($_SESSION['email']))
{
	header("location:userLogin.php");
} 

    if(isset($_POST['submit-details'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $userid = $_SESSION['user_ID'];
        $email = $_SESSION['email'];

        $query = "UPDATE reservationdetails SET title = '$title', content = '$content' WHERE user_ID = '$userid'";
        $res = mysqli_query($conn, $query);

        if ($res) {
            header ("Location: reservation.php?email=$email&saved");
        } else {
            echo "failed";
        }
    }
?>

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
        <link rel="stylesheet" type = "text/css" href="richtext/richtext.min.css">
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
                        <a href = "ownerProperty.php">
					    <i class="bx bxs-edit-location"></i><span>Post Property</span></a>
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
                        <a href = "ownerAboutUs.php">
					    <i class="bx bxs-edit-location"></i><span>About Us</span></a>
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
					    <a class="navbar-brand" href="#"> Room </a>
					
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
                    
                    <div class = "container my-5"> 
                        <nav class = "nav nav-tabs"> 
                            <button type = "button" class = "nav-link active" data-toggle = "tab" data-target = "#tab-type"> 
                                Reservation List 
                            </button>
                            <button type = "button" class = "nav-link" data-toggle = "tab" data-target = "#tab-table"> 
                                Reservation Details
                            </button>
                        </nav>

                        <div class = "tab-content">
                            <div class = "tab-pane active show fade" id = "tab-type"> 
                                <div class="containers">
                                    <br>
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

                                                <table class="table table-striped table-hover table-bordered" style = "font-size: 12px;">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Full Name</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>Amount</th>
                                                            <th>Mode of Payment</th>
                                                            <th>Proof of Payment</th>
                                                            <th>Status</th>
                                                            <th>Date Approved</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>05-15-23</td>
                                                            <td>Aj Lynn Jusayan</td>
                                                            <td>iamajlynn@gmail.com</td>
                                                            <td>09090909090</td>
                                                            <td>2500</td>
                                                            <td>Gcash</td>
                                                            <td>image</td>
                                                            <td><span class="badge bg-warning">Pending</span></td>
                                                            <td>05-16-23</td>
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
                            </div>

                            <div class = "tab-pane fade" id = "tab-table">  
                                <div class = "containers"> 
                                <br> 
                                    <div class = "row"> 
                                        <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px">   
                                            <legend> Update Reservation Details </legend>
                                        </div>

                                        <div class = "offset-md-1 col-md-10">
                                            <form method = "POST" action = ""> 
                                            <?php 
                            $email = $_REQUEST['email'];
                            $query = mysqli_query($conn, "SELECT * FROM reservationdetails JOIN user ON reservationdetails.user_ID = user.user_ID WHERE email = '$email'");
                            while($row=mysqli_fetch_array($query))
								{
							?>
                                                <div class = "form-group">
                                                    <label> Title </label>
                                                    <div class="col-lg-9">
                                                        <input type = "text" name = "title" value = "<?php echo $row['title'];?>" class = "form-control"/>
                                                    </div>
                                                </div>

                                                <div class = "form-group"> 
                                                <label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
                                                        <textarea name = "content" id = "rescontent" value = "<?php echo $row['content'];?>" class="form-control" id="validationCustom07"></textarea>	
													</div>
                                                </div>
                                                <?php } ?>
                                                <input type = "submit" name = "submit-details" class = "btn btn-info" value = "Save"/>
                                            </form>
                                        </div>
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/ckeditor.js"></script>
  
  
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
        ClassicEditor
            .create( document.querySelector( '#rescontent' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

  </body>
</html>
