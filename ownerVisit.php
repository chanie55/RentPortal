<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            <?php
                include "css/ownerVisit.css"
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
                        <a href="#" class="dashboard"><i class="bx bxs-home"></i><span>Dashboard</span></a>
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
                
                    <li class="active">
                        <a href = "ownerVisit.php">
					    <i class="bx bxs-edit-location"></i><span>Visit Schedule</span></a>
                    </li>

                    <li class="dropdown">
                    <a href = "#">
					    <i class="bx bxs-calendar-exclamation"></i><span>Reservation</span></a>
                    </li>

                    <li class="dropdown">
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
					    <a class="navbar-brand" href="#"> Visit Schedule </a>
					
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

                <!-- calendar -->

                <div class = "calendar-container"> 
                <div class = "left"> 
                    <div class = "calendar"> 
                        <div class = "month"> 
                            <i class = "bx bxs-chevron-left prev"> </i>
                            <div class = "date"></div>
                            <i class = "bx bxs-chevron-right next"> </i>
                        </div>

                        <div class = "weekdays"> 
                            <div> sun </div>
                            <div> mon </div>
                            <div> tue </div>
                            <div> wed </div>
                            <div> thur </div>
                            <div> fri </div>
                            <div> sat </div>
                        </div>
                        <div class = "days">      
                        </div>
                        <div class = "goto-today"> 
                            <div class = "goto"> 
                                <input type = "text" placeholder = "mm/yyyy" class = "date-input"> </input>
                                <button class = "goto-btn"> go </button>
                            </div>
                            <button class = "today-btn"> today </button>
                        </div>
                    </div>
                </div>

                <div class = "right"> 
                    <div class = "today-date"> 
                        <div class = "event-day"> Wed </div>
                        <div class = "event-date"> 19 April 2023</div>
                    </div>
                    <div class = "events">      
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

<script> 
            const calendar = document.querySelector(".calendar"),
                date = document.querySelector(".date"),
                daysContainer = document.querySelector(".days"),
                prev = document.querySelector(".prev"),
                next = document.querySelector(".next"),
                todayBtn = document.querySelector(".today-btn"),
                gotoBtn = document.querySelector(".goto-btn");
                dateInput = document.querySelector(".date-input");

            let today = new Date();
            let activeDay;
            let month = today.getMonth();
            let year = today.getFullYear();

            const months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ];

            function initCalendar() {
                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const prevLastDay = new Date(year, month, 0);
                const prevDays = prevLastDay.getDate();
                const lastDate = lastDay.getDate();
                const day = firstDay.getDay();
                const nextDays = 7 - lastDay.getDay() - 1;

                date.innerHTML = months[month] + " " + year;

                let days = "";

                for (let x = day; x > 0; x--) {
                    days += `<div class = "day prev-date" >${prevDays - x + 1}</div>`;
                }

                //Current Month Days
                for (let i = 1; i <= lastDate; i++) {
                    if ( i === new Date().getDate() && year === new Date().getFullYear() && month === new Date().getMonth()) {
                        days += `<div class = "day today" >${i}</div>`;
                    } else {
                        days += `<div class = "day " >${i}</div>`;
                    }
                }

                // Next Month Days
                for (let j = 1; j <= nextDays; j++) {
                    days += `<div class = "day next-date" >${j}</div>`;
                }

                daysContainer.innerHTML = days;
            }

            initCalendar();

            //Get Previous Month
            function prevMonth() {
                month--;

                if (month < 0) {
                    month = 11;
                    year--;
                }
                initCalendar();
            }

            //Get Next Month
            function nextMonth() {
                month++;

                if (month > 11) {
                    month = 0;
                    year++;
                }
                initCalendar();
            }

            //EventListener
            prev.addEventListener("click", prevMonth);
            next.addEventListener("click", nextMonth);

            todayBtn.addEventListener("click", () => {
                today = new Date();
                month = today.getMonth();
                year = today.getFullYear();
                initCalendar();
            });

            dateInput.addEventListener("input", (e) => {
                dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");

                if (dateInput.value.length === 2) {
                    dateInput.value += "/";
                }

                if (dateInput.value.length > 7) {
                    dateInput.value = dateInput.value.slice(0, 7);
                }

                if (e.inputType === "deleteContentBackward") {
                    if (dateInput.value.length === 3) {
                        dateInput.value = dateInput.value.slice(0, 2);
                    }
                }
            });

            gotoBtn.addEventListener("click", gotoDate);

            function gotoDate() {
                const dateArr = dateInput.value.split("/");

                if (dateArr.length === 2) {
                    if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
                        month = dateArr[0] - 1;
                        year = dateArr[1];
                        initCalendar();
                        return;
                    }
                }

                alert("Invalid date");
            }
        </script>
  </body>
</html>


