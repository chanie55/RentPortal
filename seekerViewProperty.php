<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
if(!isset($_SESSION['email']))
{
	header("location:userLogin.php");
} 
?>
		

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentin Web Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min5.css" rel="stylesheet">

    <style>
        <?php
            include "css/seekerViewProperty.css"
        ?>
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
 

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <h1 class="m-0" style = "color: #5D59AF;">Rentin</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="seekerDashboard.php" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                    </div>
                    <div class = "profile-user">
                        <img src="images/user1.png" class="user-pic" onclick="toggleMenu()">

                        <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="images/user1.png">
                                <h4>James Aldrino</h4>
                            </div> 
                            <hr>
                             
                            <a href="seekerUserProfile.php" class="sub-menu-link">
                                <img src="images/profile.png">
                                <p>Edit Profile</p>
                                <span>></span>
                            </a>
                            <a href="index.php" class="sub-menu-link">
                                <img src="images/logout1.png">
                                <p>Logout</p>
                                <span>></span>
                            </a>
                        </div>
                        </div>
                    </div>      
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
        <!-- Search Start -->
        <div class="container-xxl search">
            <div class="container wow fadeIn" data-wow-delay="0.1s" style="padding: 20px; margin-top: 8%; opacity: 0.98">
                <div class="row g-2">
                    <h2 class="first">Find A Property Today!</h2>
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                <option selected disabled value="">Property Type</option>
                                <?php
                                    include "dbconn.php";
                            
                                    $brgy_query = "SELECT property FROM propertytype";
                                    $r = mysqli_query($conn, $brgy_query);

                                    while ($row = mysqli_fetch_array($r)) {
                                    ?>
                                        <option > <?php echo $row['property']; ?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                <option selected disabled value="">Location</option>
                                <?php
                                    include "dbconn.php";
                            
                                    $brgy_query = "SELECT barangay FROM useraddress";
                                    $r = mysqli_query($conn, $brgy_query);

                                    while ($row = mysqli_fetch_array($r)) {
                                    ?>
                                        <option > <?php echo $row['barangay']; ?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div> 
            </div>
        </div>
        <!-- Search End -->
        <br>
        <br>
        <br>

        <div class="full-row">
            <div class="container">
                
                <div class="row" >
				
                <?php
                      $pid = $_REQUEST['property_ID']; 
                      $aid = $_REQUEST['addresscode'];
                      $email = $_SESSION['email'];
						          $query=mysqli_query($conn,"SELECT * FROM property JOIN businessname ON property.bname_ID = businessname.bname_ID 
                                                    JOIN propertyaddress ON property.propertyaddress = propertyaddress.addresscode WHERE property_ID = '$pid' AND addresscode = '$aid'");
					          while($row=mysqli_fetch_array($query)) {
					        ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <div class="img">
                                      <div class="mySlides">
                                          <img src="images/sample.jpg" style="width:60%">
                                      </div>

                                      <div class="mySlides">
                                          <img src="images/heading.jpg" style="width:60%">
                                      </div>

                                      <div class="mySlides">
                                          <img src="images/heading.jpg" style="width:60%">
                                      </div>

                                      <div class="mySlides">
                                          <img src="images/heading.jpg" style="width:60%">
                                      </div>

                                      <div class="mySlides">
                                          <img src="images/heading.jpg" style="width:60%">
                                      </div>

                                      <div class="mySlides">
                                          <img src="images/heading.jpg" style="width:60%">
                                      </div>
                                </div>

                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)" style="width: 39px;">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)" style="width: 39px;" >&#10095;</a>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="single-property" style="width:600px; height:100px; margin:30px 35px;"> 
                                            <div class="column">
                                                <img class="demo cursor" src="images/heading.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
                                            </div>

                                            <div class="column">
                                                <img class="demo cursor" src="images/heading.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
                                            </div>

                                            <div class="column">
                                                <img class="demo cursor" src="images/heading.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
                                            </div>

                                            <div class="column">
                                                <img class="demo cursor" src="images/heading.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
                                            </div>

                                            <div class="column">
                                                <img class="demo cursor" src="images/heading.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
                                            </div>

                                            <div class="column">
                                                <img class="demo cursor" src="images/heading.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Container for the image gallery -->

                                <div class="col-lg-12">
                                    <div class="listing_single_description2 mt30-767 mb-767">
                                        <div class="single_property_title">
                                            <h2> <?php echo $row['title'];?> </h2>
                                            <h5> <?php echo $row['bname'];?> </h5>
                                        </div>

                                        <div class="single_property_social_share style2">
                                            <div class="price">
                                                <h2> &#8369 <?php echo $row['monthlyrate'];?> </h2>
                                            </div>
                                        </div>
                                        <div class="lsd_list">
                                            <ul class="mb0">
                                                <li class="list-inline-item">
                                                    <a href="#" style="color: black;"> Apartment </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" style="color: black;"> Beds: </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" style="color: black;"> Bathroom: </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" style="color: black;"> Sq Ft: </a>
                                                </li>
                                            </ul>
                                            <br>
                                            <br>
                                            <h4 class="mb30"> Description </h4>
                                            <br>
                                            <div class="card">
                                                <input id="ch" type="checkbox">
                                                    <div class="content">
                                            <!--<div class="collapse show" id="collapseExample" style="" w-100>
                                            <div class="card card-body"> 
                                            <p class="mt10 mb10"></p> -->
                                                        <div><?php echo $row['bname'];?></div>
                                                        <div>&nbsp;</div>
                                                        <p><?php echo $row['description'];?></p>
                                                        <label for="ch"> Show less </label>
                                                    </div>
                                                    <label for="ch"> Show more </label>
                                            </div>
                                </div>  

                                <div class="additional_details">
                                    <div>
                                        <h4 class="mb15">Property Details</h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <dl class="inline">
                                            <dt> <p> Bedrooms :</p></dt>
                                                <dd> <?php echo $row['bed'];?> </dd>
                                            <dt><p>Bathrooms :</p></dt>
                                                <dd><?php echo $row['bathroom'];?></dd>
                                            <dt><p>Kitchen :</p></dt>
                                                <dd><?php echo $row['kitchen'];?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <dl class="inline">
                                            <dt><p>Property Type :</p></dt>
                                                <dd><?php echo $row['category'];?></dd>
                                            <dt><p>Property Size :</p></dt>
                                                <dd><p>301 sqft</p></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="map">
                                    <h4> Location </h4>
                                    <div id = "map">
                                    </div>
                                </div>
                                <?php
                                    include "dbconn.php";
                                    $email = $_SESSION['email'];
                                    $sql = "SELECT user.userInfo_ID, userinfo.address, userinfo.contact, user.email, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON user.userInfo_ID = userinfo.userinfo_ID WHERE user.email = '$email'";
                                  // $sql = "SELECT "; 
                                  $result = mysqli_query($conn, $sql);
        
                                    ($row = mysqli_fetch_assoc($result))
                                ?>
                               
                                <div class="lsd_list">
                                <h4> Owner Information </h4>
                                    <p>Name: <?php echo $row['fullName'] ?> </p>
                                    <p>Contact: <?php echo $row['contact'] ?></p>
                                    <p>Email: <?php echo $row['email'] ?></p>
                                    <p>Address: <?php echo $row['address'] ?></p>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                      </div>

                      
                    </div>
                  </div>

                  <div class="col-lg-4" style = "margin-left:65%; margin-top:-75.7%" >
                        <div class="row1">
                            <div class="more">
                                <div class="card-body">
                                    <h5 class="card-title">Reservation</h5>
                                    <p class="card-text">Want to secure your room/space? Reserve Now!</p>
                                    <a href="seekerReservePage.php?prop_ID=<?php echo $_REQUEST['property_ID']; ?>" class="btn btn-primary">Make Reservation</a>
                                </div>
                            </div> 
                        </div>

                        <div class="visit">
                            <div class="col-lg-12">
                                <div class="map">
                                    <div class="card-body">
                                        <h5 class="card-title">Visit</h5>
                                        <p class="card-text">If you are interested and would like to know more, you can visit our place.</p>
                                        <a href="seekerVisitSchedule.php?prop_ID=<?php echo $_REQUEST['property_ID']; ?>" class="btn btn-primary">Schedule Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
							
								            <?php 
								                $pid = $_REQUEST['property_ID']; 
                                                $aid = $_REQUEST['addresscode'];
                                                            $query=mysqli_query($conn,"SELECT *,propertyaddress.addresscode FROM property JOIN businessname ON businessname.bname_ID = property.bname_ID 
                                                                                JOIN propertyaddress ON property.propertyaddress = propertyaddress.addresscode ORDER BY date_created DESC LIMIT 7");
										            while($row=mysqli_fetch_array($query))
										            {
								            ?>
                                <li><img src="images/sample.jpg" alt="pimage" width = 40% height = 40%>
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="seekerViewProperty.php?property_ID=<?php echo $row['property_ID'];?>&addresscode=<?php echo $row['addresscode'];?>"><?php echo $row['title'];?></a></h6>
                                    <span class="font-14"><i class="bx bxs-map me-2" style = "color: #5D59AF;"></i>123 Street, New York, USA</span>   
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
              </div>    
            </div>	
                </div>
            </div>
        </div>
   
					<?php } ?>
					
                    
                </div>
            </div>
        

        <section class="listing-title-area mt-2" style="margin-bottom: 110%;">
          <div class="container mt50">
              <div class="row mb30">
                  <?php
                      $pid = $_REQUEST['property_ID']; 
						          $query=mysqli_query($conn,"SELECT * FROM property WHERE property_ID = '$pid'");
						          while($row=mysqli_fetch_array($query)) {
					        ?>
                  
                    
              </div>
          </div>
        </section>
        </div>
        </div>
    </div>
                     

<?php } ?>
      <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Rentin Portal</a>, All Right Reserved. 
                        Designed By <a class="border-bottom" href="">Rentin Portal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!--   Footer End -->              
                  





                                  </div>




</body>
</html>

<script>

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="./leaflet_data/point.js"> </script>

    <script> 
        var map = L.map('map').setView([6.1164, 125.1716], 13);

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        var myMarker = L.icon({
            iconUrl: 'images/red_marker.png',
            iconSize: [40,40]
        });

        /*
        var singleMarker = L.marker([6.1164, 125.1716], { icon: myMarker, draggable: true });
        var popup = singleMarker.bindPopup('This is my location. ' + singleMarker.getLatLng()).openPopup();
        popup.addTo(map);*/
        <?php
        include "dbconn.php";

        $mapa = "SELECT *,propertyaddress.addresscode FROM property JOIN propertyaddress ON propertyaddress.addresscode = property.propertyaddress WHERE propertyaddress = '$aid'";

        $dbquery = mysqli_query($conn,$mapa);

        $geojson = array('type' => 'FeatureCollection', 'features' => array());

        while($row = mysqli_fetch_assoc($dbquery)){

            $marker = array(
                'type' => 'Feature',
                'properties' => array(
                'title' => $row['propertyname'],
                'marker-color' => '#f00',
                'marker-size' => 'small'
            ),
                'geometry' => array(
                'type' => 'Point',
                'coordinates' => array(
                    $row['lng'],
                    $row['lat']
                    )
                )
            );

            array_push($geojson['features'], $marker);
        }
?>
  
  var geoJson = <?php echo json_encode($geojson,JSON_NUMERIC_CHECK); ?>;

// Pass features and a custom factory function to the map

        var pointData = L.geoJSON(geoJson).addTo(map);
        var popuploc = pointData.bindPopup('This is my location').openPopup();
        popuploc.addTo(map);

        L.Control.geocoder().addTo(map);
    </script>