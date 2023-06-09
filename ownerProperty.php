<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Post Property</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type = "text/css" href="richtext/richtext.min.css">

        <style>
            <?php
                include "css/ownerProperty.css"
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

                        <ul class="collapse list-unstyled menu" id="pageSubmenu5" style = "margin-left: 10px;">
                            <li>
                                <a href="ownerpropertylist">Property List</a>
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
					    <a class="navbar-brand" href="#"> Post </a>
					
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

                <div class = "main-content">
                    <div class = "container my-5"> 
                        <nav class = "nav nav-tabs"> 
                            <button type = "button" class = "nav-link active" data-toggle = "tab" data-target = "#tab-residential"> 
                                For Residential
                            </button>
                            <button type = "button" class = "nav-link" data-toggle = "tab" data-target = "#tab-commercial"> 
                                For Commercial
                            </button>
                        </nav>

                        <div class = "tab-content"> 
                            <div class = "tab-pane active show fade" id = "tab-residential"> 
                                
                                <div class = "containers">
                                    <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                                        <legend class = "text-left"> Add new Listing </legend>
                                        <br>
                                        <br>
                                    </div> 

                                    <div class="container">
                                        <div class="content"> 
                                            <form method = "post" action = "addProperty.php" class="needs-validation" enctype = "multipart/form-data" novalidate>
                                            <div class="row">
											    <div class="col-xl-12">
                                                    <div class="form-group row">
													    <label class="col-lg-2 col-form-label">Business Name</label>
													    <div class="col-lg-7">
														    <select class="form-control" required name="bname">
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
                                                        <label class="col-lg-2 col-form-label">Featured Photo:</label>
                                                        <div class="col-lg-5">
                                                            <input type = "file" name = "featured" style="border: solid gray 1px; padding: 6px; width: 80%; border-radius: 4px"/>
                                                        </div>
                                                    </div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title <span style = "color:red;">*</span></label>
													<div class="col-lg-9">
														<?php if (isset($_GET['title'])) { ?>
                                                            <input required type = "text" 
                                                            name = "title" 
                                                            class="form-control" 
                                                            id="validationCustom01"
                                                            value = "<?php echo $_GET['title']; ?>"><br>
                                                        <?php } else { ?>
                                                            <input required type = "text" 
                                                            name = "title" 
                                                            class="form-control"
                                                            id="validationCustom01"><br>
                                                        <?php } ?>
                                                        <div class = "invalid-feedback"> 
                                                            Please provide your business name
                                                        </div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Description <span style = "color:red;">*</span></label>
													<div class="col-lg-9">
                                                        <textarea name = "description" id = "description" class="form-control" id="validationCustom07" required></textarea>	
													</div>
                                                    <div class = "invalid-feedback"> 
                                                            Please provide some description
                                                        </div>
												</div>
                                            </div>
											</div><br>

                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom03">Location</label>
                                                    <input type = "hidden" name = "lat" value = '<?php echo $_GET['lat']; ?>'>
                                                    <input type = "hidden" name = "lng" value = '<?php echo $_GET['lng']; ?>'>
                                                    <a href = 'viewmap.php?email=<?php echo $_REQUEST['email']?>'><button type = "button" class = "btn btn-secondary"> Get Map<i class = "bx bxs-edit-location"> </i> </button></a>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide your property address
                                                    </div>
                                                </div>
                                                <?php 
                                                    include "dbconn.php";

                                                    $query = mysqli_query($conn, "SELECT user_ID FROM user");
                                                    $result = mysqli_fetch_assoc($query);
                                                    
                                                ?>

                                                <input type = "hidden" name = "id" value = "<?php echo $result['user_ID']; ?>">
                                            </div><br>

                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Available Room/Unit</label>
                                                    <?php if (isset($_GET['availablerooms'])) { ?>
                                                        <input required type = "number" 
                                                                name = "availablerooms" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['availablerooms']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "availablerooms" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Contact must be 11 digits
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">    
                                                    <label for="validationCustom02">Bed Type </label>
                                                    <select class="custom-select" id="validationCustom02" name = "bedtype" required> 
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="Single Bed">Single Bed</option>
														<option value="Double Deck">Double Deck</option>
                                                    </select>
                                                    <div class = "invalid-feedback"> 
                                                        Please select a property type
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Number of Bed</label>
                                                    <?php if (isset($_GET['bed'])) { ?>
                                                        <input required type = "number" 
                                                                name = "bed" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['bed']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "bed" 
                                                                class="form-control"
                                                                id="stpurok"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide the monthly rate
                                                    </div>
                                                </div>
                                            </div><br>
                                            

                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Monthly Rate <span><small>(must be an exact amount)</small> </span></label>
                                                    <?php if (isset($_GET['rate'])) { ?>
                                                        <input required type = "number" 
                                                                name = "rate" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['rate']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "rate" 
                                                                class="form-control"
                                                                id="stpurok"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide the monthly rate
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Daily Rate <span><small>(if applicable)</small> </span></label>
                                                    <?php if (isset($_GET['drate'])) { ?>
                                                        <input required type = "number" 
                                                                name = "drate" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['drate']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "drate" 
                                                                class="form-control"
                                                                id="stpurok"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide the monthly rate
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            
                                            <h5 class = "text-secondary"> Room/Unit Inclusions </h5>
                                            <div class="form-row">
                                                
                                            <div class="col-sm-4">
                                                    <label> Kitchen </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios1" value="Provided" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Per room
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Not Provided">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Common
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Not Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <span><label class="form-check-label" for="gridRadios2">
                                                            Others, please specify
                                                            <?php if (isset($_GET['totalrooms'])) { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                                            <?php } else { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                            <?php } ?>
                                                        </label></span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label> Bathroom </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="bath" id="gridRadios1" value="Provided" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Per room
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="bath" id="gridRadios2" value="Not Provided">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Common
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="bath" id="gridRadios2" value="Optional">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Not Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <span><label class="form-check-label" for="gridRadios2">
                                                            Others, please specify
                                                            <?php if (isset($_GET['totalrooms'])) { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                                            <?php } else { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                            <?php } ?>
                                                        </label></span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label> Air Conditioner </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="aircon" id="gridRadios1" value="Provided" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="aircon" id="gridRadios2" value="Not Provided">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Not Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="aircon" id="gridRadios2" value="Optional">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Optional
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <span><label class="form-check-label" for="gridRadios2">
                                                            Others, please specify
                                                            <?php if (isset($_GET['totalrooms'])) { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                                            <?php } else { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                            <?php } ?>
                                                        </label></span>
                                                    </div>
                                                </div>
                                                           
                                            </div><br>
                                            

                                            

                                            <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                                                <legend class = "text-left"> Images </legend>
                                                <br>
                                                <br>
                                            </div>

                                            <div class="form-group">
                                                <label>Upload Photo:</label>
                                                <input type = "file" name = "image[]" multiple/>
                                            </div>

                                            <button class="btn btn-primary" type="submit" name = "submit-property">POST</button>
                                            <br><br>
                    
                                            </form>
                                        </div> 
                                    </div>
                                </div>

                                
                            </div>
                            <div class = "tab-pane fade" id = "tab-commercial"> 
                                
                                <div class = "containers">
                                    <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                                        <legend class = "text-left"> Add new Listing </legend> 
                                        <a href = "manageOwner.php"> <h6 class="category">My Listings</p> </h6></a>
                                        <br>
                                        <br>
                                    </div> 

                                    <div class="container">
                                        <div class="content"> 
                                            <form method = "post" action = "addCom.php" class="needs-validation" enctype = "multipart/form-data" novalidate>
                                            <div class="row">
											    <div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Business Name</label>
													<div class="col-lg-7">
														<select class="form-control" required name="bname">
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
                                                        <label class="col-lg-2 col-form-label">Featured Photo:</label>
                                                        <div class="col-lg-5">
                                                            <input type = "file" name = "featured" style="border: solid gray 1px; padding: 6px; width: 80%; border-radius: 4px"/>
                                                        </div>
                                                    </div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title <span style = "color:red;">*</span></label>
													<div class="col-lg-9">
														<?php if (isset($_GET['title'])) { ?>
                                                            <input required type = "text" 
                                                            name = "title" 
                                                            class="form-control" 
                                                            id="validationCustom01"
                                                            value = "<?php echo $_GET['title']; ?>"><br>
                                                        <?php } else { ?>
                                                            <input required type = "text" 
                                                            name = "title" 
                                                            class="form-control"
                                                            id="validationCustom01"><br>
                                                        <?php } ?>
                                                        <div class = "invalid-feedback"> 
                                                            Please provide your business name
                                                        </div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Description</label>
													<div class="col-lg-9">
                                                        <textarea name = "description" id = "comdescription" class="form-control" id="validationCustom07" required></textarea>	
													</div>
                                                    <div class = "invalid-feedback"> 
                                                            Please provide your property name
                                                        </div>
												</div>
                                            </div>
											</div><br>

                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom03">Location</label>
                                                    <a href = "viewmap.php"><button type = "button" class = "btn btn-secondary"> Get Map<i class = "bx bxs-edit-location"> </i> </button></a>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide your property address
                                                    </div>
                                                </div>
                                                <?php 
                                                    include "dbconn.php";

                                                    $query = mysqli_query($conn, "SELECT user_ID FROM user");
                                                    $result = mysqli_fetch_assoc($query);
                                                    
                                                ?>

                                                <input type = "hidden" name = "id" value = "<?php echo $result['user_ID']; ?>">
                                            </div><br>

                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                <input type="hidden" class="form-control" id="validationCustom02" name = "property" value="Commercial Property">

                                                    <label for="validationCustom06">Available Space</label>
                                                    <?php if (isset($_GET['availablerooms'])) { ?>
                                                        <input required type = "number" 
                                                                name = "availablerooms" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['availablerooms']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "availablerooms" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Contact must be 11 digits
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Monthly Rate <span><small>(must be an exact amount)</small> </span></label>
                                                    <?php if (isset($_GET['rate'])) { ?>
                                                        <input required type = "number" 
                                                                name = "rate" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['rate']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "rate" 
                                                                class="form-control"
                                                                id="stpurok"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide the monthly rate
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Dimension (sqft)</label>
                                                    <?php if (isset($_GET['dimension'])) { ?>
                                                        <input required type = "number" 
                                                                name = "dimension" 
                                                                class="form-control"
                                                                placeholder = "sqft"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['dimension']; ?>"><br>
                                                    <?php } else { ?>
                                                        <input required type = "number" 
                                                                name = "dimension" 
                                                                class="form-control"
                                                                placeholder = "sqft"
                                                                id="stpurok"><br>
                                                    <?php } ?>
                                                    <div class = "invalid-feedback"> 
                                                        Please provide the monthly rate
                                                    </div>
                                                </div>
                                            </div><br>
                                            

                                            <div class="form-row">
                                                
                                            </div>
                                            
                                            <h5 class = "text-secondary"> Space Inclusions </h5>
                                            <div class="form-row">
                                                
                                            <div class="col-sm-4">
                                                    <label> Kitchen </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios1" value="Provided" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Per room
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Not Provided">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Common
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Not Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <span><label class="form-check-label" for="gridRadios2">
                                                            Others, please specify
                                                            <?php if (isset($_GET['totalrooms'])) { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                                            <?php } else { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                            <?php } ?>
                                                        </label></span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label> Bathroom </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="bath" id="gridRadios1" value="Provided" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Per room
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="bath" id="gridRadios2" value="Not Provided">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Common
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="bath" id="gridRadios2" value="Optional">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Not Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <span><label class="form-check-label" for="gridRadios2">
                                                            Others, please specify
                                                            <?php if (isset($_GET['totalrooms'])) { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                                            <?php } else { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                            <?php } ?>
                                                        </label></span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label> Air Conditioner </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="aircon" id="gridRadios1" value="Provided" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="aircon" id="gridRadios2" value="Not Provided">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Not Provided
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="aircon" id="gridRadios2" value="Optional">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Optional
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="kitchen" id="gridRadios2" value="Optional">
                                                        <span><label class="form-check-label" for="gridRadios2">
                                                            Others, please specify
                                                            <?php if (isset($_GET['totalrooms'])) { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"
                                                                value = "<?php echo $_GET['totalrooms']; ?>"><br>
                                                            <?php } else { ?>
                                                                <input type = "text" 
                                                                name = "others" 
                                                                class="form-control"
                                                                id="validationCustom06"><br>
                                                            <?php } ?>
                                                        </label></span>
                                                    </div>
                                                </div>
                                                           
                                            </div><br>
                                            

                                            

                                            <div class = "offset-md-12 col-md-12 modal-header" style = "padding: 0; padding-left: 15px; margin-bottom: 15px"> 
                                                <legend class = "text-left"> Images </legend>
                                                <br>
                                                <br>
                                            </div>

                                            <div class="form-group">
                                                <label>Upload Here:</label>
                                                <input type = "file" name = "image[]" multiple/>
    
                                            </div>

                                            <button class="btn btn-primary" type="submit" name = "submit-property">POST</button>
                                            <br><br>
                    
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
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src = "richtext/jquery.richtext.js"></script>
   <script src="js/ckeditor.js"></script>
  
   <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#comdescription' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
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