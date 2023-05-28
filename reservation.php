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
        $pname = $_POST['pname'];
        $content = $_POST['content'];
        $userid = $_SESSION['user_ID'];
        $downpayment = $_POST['downpayment'];
        $paycon = $_POST['paycon'];
        $paymet = $_POST['paymet'];
        $payday = $_POST['payday'];
        $gname = $_POST['gname'];
        $gnumber = $_POST['gnumber'];
        $email = $_SESSION['email'];
        $prop_ID = mysqli_query($conn, "SELECT property_ID FROM property WHERE propertyname = $pname");

        $code = rand(1, 99999);
        $resd_ID = "RDES_".$code;

        $query = "INSERT INTO reservationdetails (resdetails_ID, prop_ID, downpayment, paycon, paymet, payday, gname, gnumber, content, user_ID)
                    VALUES ('$resd_ID', '$prop_ID', '$downpayment', '$paycon', '$paymet', '$payday', '$gname', '$gnumber', '$content', '$userid')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            header ("Location: reservation.php?saved");
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
					    <a class="navbar-brand" href="#"> Reservation </a>
					
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
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>Amount</th>
                                                            <th>Mode of Payment</th>
                                                            <th>Proof of Payment</th>
                                                            <th>Status</th>
                                                            <th>Date Approved</th>
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

                                                            $sql = "SELECT *,user.user_ID, user.email, images.image_url, CONCAT(firstName,' ', lastName) AS fullName FROM reservation JOIN user ON reservation.user_ID = user.user_ID 
                                                                            JOIN userinfo ON userinfo.userinfo_ID = user.userInfo_ID JOIN images ON images.user_ID = user.user_ID WHERE type = 'Proof of Payment' LIMIT $offset, $limit";
                                                            $result = mysqli_query($conn, $sql);

                                                            while ($row = mysqli_fetch_assoc($result)) {

                                                                ?>
                                                                    <tr class = "data-row"> 
                                                                        <td> <?php echo $row['date'] ?> </td>
                                                                        <td> <?php echo $row['firstname'] ?> </td>
                                                                        <td> <?php echo $row['lastname'] ?> </td>
                                                                        <td> <?php echo $row['email'] ?> </td>
                                                                        <td> <?php echo $row['contact'] ?> </td>
                                                                        <td> <?php echo $row['amount'] ?> </td> 
                                                                        <td> <?php echo $row['mop'] ?> </td>
                                                                        <td>
                                                                        <a href="#" class="edit" title="Edit"><button type="button" class="btn btn-primary addType" data-toggle="modal" data-target="#view">View</button></a>
                                                                        </td>
                                                                        <td> <?php echo $row['status'] ?> </td>
                                                                        <td> date </td>
                                                                        <td> 
                                                                             <!-- Button trigger modal -->
                                                                            <a href="#" class="edit" title="Edit"><button type="button" class="btn btn-primary addType" data-toggle="modal" data-target="#confirm"><i class="bx bx-show"></i></button></a>
                                                                        </td>
                                                                    </tr>

                                                                     <!-- Confirm Modal -->
                                                                    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to confirm this reservation?</p>
                                                                                    <form method = "POST" action = "confirmres.php"> 
                                                                                        <input type = "hidden" name = "useremail" value = "<?php echo $row['email']; ?>"/>
                                                                                        <input type = "hidden" name = "id" value = "<?php echo $row['user_ID']; ?>"/>
                                                                                    
                                                                                </div>

                                                                                <div class="modal-footer">
                                                                                    <a href=""><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                                                                                    <a href="confirmres.php"><button type="submit" name = "okay" class="btn btn-primary">Confirm</button></a>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Confirm Modal -->
                                                                    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>

                                                                                <div class="modal-body"> 
                                                                                <img src = "<?php echo "images/proof/".$row['image_url']; ?>" width = "470px" height = "500px"> </td>
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
            
                                                            $query =  "SELECT COUNT(*) FROM reservation";
                                                            $result_count = mysqli_query($conn, $query);
                                                            $records = mysqli_fetch_row($result_count);
                                                            $total_records = $records[0];

                                                            $total_pages = ceil($total_records / $limit);
                                                            $link = "";

                                                        ?>
        

                                                        <?php
                                                            if ($page >= 2) {
                                                                echo "<li class = 'page-item'>
                                                                <a class = 'page-link' href = 'reservation.php?page=".($page-1)."'> 
                                                                <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                                                            }

                                                            for ($counter = 1; $counter <= $total_pages; $counter++){
                                                                if ($counter == $page) {
                                                                    $link .= "<li class = 'page-item active'>
                                                                    <a class = 'page-link' href= 'reservation?page="
                                                                    .$counter."'>".$counter." </a></li>";
                                                                } else {
                                                                    $link .= "<li class = 'page-item'>
                                                                    <a class = 'page-link' href='reservation.php?page=".$counter."'> ".$counter." </a> </li>";
                                                                }
                                                            };

                                                            echo $link;

                                                            if($page < $total_pages) {
                                                                echo "<li class = 'page-item'>
                                                                <a class = 'page-link' href='reservation.php?page=".($page+1)."'>
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
                            </div>

                            <div class = "tab-pane fade" id = "tab-table">  
                                <div class = "containers"> 
                                <br> 
                                    <div class = "row "> 
                                        <div class = "offset-md-0 col-md-12">
                                            <form method = "POST" action = "">
                                                <h5> Payment Information</h5>
                                                <div class="col-xl-6">
												    <div class="form-group row">
													    <label class="col-lg-4 col-form-label">Business Name</label>
													    <div class="col-lg-8">
														    <select class="form-control" required name="pname">
                                                            <option selected disabled value="">Choose...</option>
                                                            <?php
                                                                include "dbconn.php";
                            
                                                                $uid = $_SESSION['user_ID'];
                                                                $name_query = "SELECT bname FROM businessname WHERE user_ID = '$uid'";
                                                                $r = mysqli_query($conn, $name_query);

                                                                while ($row = mysqli_fetch_array($r)) {
                                                                ?>
                                                                    <option> <?php echo $row['bname']; ?></option>
                                                                <?php
                                                                }
                                                        
                                                            ?>
														    </select>
													    </div>
												    </div>
												    <div class="form-group row">
													    <label class="col-lg-4 col-form-label">Downpayment %</label>
													    <div class="col-lg-8">
														    <select class="form-control" required name="downpayment">
															    <option value="">Select...</option>
															    <option value="1">100%</option>
															    <option value="0.75">75%</option>
                                                                <option value="0.5">50%</option>
														    </select>
													    </div>
												    </div>
                                                    <div class="form-group row">
													    <label class="col-lg-4 col-form-label">Payment Condition</label>
													    <div class="col-lg-8">
														    <select class="form-control" required name="paycon">
															    <option value="">Select...</option>
															    <option value="1">1 month advance</option>
															    <option value="2">1 month advance, 1 month deposit</option>
                                                                <option value="2">2 months advance</option>
                                                                <option value="3">3 months advance</option>
														    </select>
													    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label">Payment Method</label>
													    <div class="col-lg-8">
														    <select class="form-control" required name="paymet">
															    <option value="">Select one...</option>
															    <option value="1">Gcash</option>
															    <option value="2">Cash</option>
														    </select>
													    </div>
												    </div>
                                                    <div class="form-group row">
													    <label class="col-lg-4 col-form-label">Day/s to Pay</label>
													    <div class="col-lg-8">
														    <input type="number" class="form-control" name="payday" required placeholder="ex. 1">
													    </div>
												    </div>
												    <div class="form-group row">
													    <label class="col-lg-4 col-form-label">Gcash Name</label>
													    <div class="col-lg-8">
														    <input type="text" class="form-control" name="gname" required placeholder="Enter your Gcash Name">
                                                            <small> *Kindly put n/a if not applicable </small>
													    </div>
												    </div>
												    <div class="form-group row">
													    <label class="col-lg-4 col-form-label">Gcash Number</label>
													    <div class="col-lg-8">
														    <input type="number" class="form-control" name="gnumber" required placeholder="09********">
                                                            <small> *Kindly put n/a if not applicable </small>
													    </div>
												    </div>
											    </div><br>
                                                <h5> Terms and Condition</h5>
                                                <div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea id = "rescontent" name="content" rows="10" cols="30"
                                                            placeholder = "Here you can put your terms and condition like your payment terms
                                                            and cancellation policy."></textarea>
													</div>
												</div><br>
                                                <input type = "submit" name = "submit-details" class = "btn btn-info" value = "Save" style = "float:right;"/>
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
