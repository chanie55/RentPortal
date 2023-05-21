<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("dbconn.php");
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <h1 class="m-0" style = "color: #5D59AF;">Rent.In</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    </div>     
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; background: white;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-2 py-3" placeholder="Search Keyword">
                            </div>

                            <div class="col-md-4">
                                <select class="form-select border-2 py-3">
                                  <option selected disabled value="">Choose...</option>
                                    <?php
                                        include "dbconn.php";
                            
                                        $name_query = "SELECT property FROM propertytype";
                                        $r = mysqli_query($conn, $name_query);

                                        while ($row = mysqli_fetch_array($r)) {
                                          ?>
                                            <option> <?php echo $row['property']; ?></option>
                                          <?php
                                        }
                                      ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select border-2 py-3">
                                  <?php
                                        include "dbconn.php";
                            
                                        $name_query = "SELECT barangey FROM useraddress";
                                        $r = mysqli_query($conn, $name_query);

                                        while ($row = mysqli_fetch_array($r)) {
                                          ?>
                                            <option> <?php echo $row['barangay']; ?></option>
                                          <?php
                                        }
                                      ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn border-0 w-100 py-3" style = "background: #5D59AF; color: white;">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <div class="full-row">
            <div class="container">
                <div class="row">
				  
                    <div class="col-lg-8"> <!--left div-->
                        <div class="row">
                        <?php
                      $pid = $_REQUEST['property_ID']; 
						          $query=mysqli_query($conn,"SELECT * FROM property WHERE property_ID = '$pid'");
						          while($row=mysqli_fetch_array($query)) {
					        ?>
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Full-width images with number text -->
                                    <div class="img">
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

                                      <div class="mySlides">
                                          <img src="images/heading.jpg" style="width:60%">
                                      </div>
                                </div>
                                
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

                                <div class="col-lg-12">
                            <div class="listing_single_description2 mt30-767 mb-767">
                                <div class="single_property_title">
                                    <h2> <?php echo $row['propertyname'];?> </h2>
                                </div>

                                <div class="single_property_social_share style2">
                                    <div class="price">
                                        <h2> &#8369 <?php echo $row['monthlyrate'];?> </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                
                            </div>
                        </div>          
                    </div>
					
                    <div class="col-lg-4"> <!--right div-->
                        
                        <div class="row">
                            <div class="more">
                                <h4 id="h4"> Reservation </h4>
                                <input id ="input" type="label" placeholder>
                                <input id ="input" type="label" placeholder>
                                <input id ="input" type="label" placeholder>
                                <br>
                                <button class="btn-reserve"> Reserve </button>
                                <br>   
                            </div> 
                        </div>

                        <div class="visit">
                <div class="col-lg-12">
                    <div class="map">
                        <h4 class="input1"> Schedule Visit  </h4>
                        <p class="input1"> Date to Visit </p>
                            <input type="date" class="input1" style="width: 60%">
                        <p class="visit"> Time to Visit </p>
                            <input type="time" class="input1" style="width: 60%">
                        <br class="input1">
                        <button class="btn-visit">Visit </button>
                    </div>
                </div>
            </div>
                        <!--uphere-->
                    </div>
                </div>
            </div>
        </div>

        <section class="listing-title-area mt-2">
          <div class="container mt50">

          </div>
        </section>

        <!-- Container for the image gallery -->
      
        <div class="container">
            <div class="row">
              
                <div class="col-md-12 col-lg-8 mt50">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="map">
                            <h4> Location </h4>
                            <div id = "map">
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- Footer End -->              
                  
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
        var map = L.map('map').setView([6.1164, 125.1716], 16);

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

        var pointData = L.geoJSON(pointJson).addTo(map);
        var popuploc = pointData.bindPopup('Property Location').openPopup();
        popuploc.addTo(map);
        L.Control.geocoder().addTo(map);
    </script>