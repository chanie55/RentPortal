<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentin Web Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min5.css" rel="stylesheet">
    <link href="css/seekerVisitSchedule.css" rel="stylesheet">
</head>


<body>
<div class="container-xxl bg-white p-0">
 

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <h1 class="m-0" style = "color: #5D59AF;"><b>Rentin</b></h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
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
                    <div class="events"></div>
                    <div class="add-event-wrapper">
                    <div class="add-event-header">
                        <div class="title">Add Event</div>
                        <i class="fas fa-times close"></i>
                    </div>
                    <div class="add-event-body">
                        <div class="add-event-input">
                        <input type="text" placeholder="Event Name" class="event-name" />
                        </div>
                        <div class="add-event-input">
                        <input
                            type="text"
                            placeholder="Event Time From"
                            class="event-time-from"
                        />
                        </div>
                        <div class="add-event-input">
                        <input
                            type="text"
                            placeholder="Event Time To"
                            class="event-time-to"
                        />
                        </div>
                    </div>
                    <div class="add-event-footer">
                        <button class="add-event-btn">Add Event</button>
                    </div>
                    </div>
                </div>
                <button class="add-event">
                        <i class='bx bx-plus'></i>
                </button>
                </div>

							
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
            gotoBtn = document.querySelector(".goto-btn"),
            dateInput = document.querySelector(".date-input"),
            eventDay = document.querySelector(".event-day"),
            eventDate = document.querySelector(".event-date"),
            eventsContainer = document.querySelector(".events"),
            addEventBtn = document.querySelector(".add-event"),
            addEventWrapper = document.querySelector(".add-event-wrapper "),
            addEventCloseBtn = document.querySelector(".close "),
            addEventTitle = document.querySelector(".event-name "),
            addEventFrom = document.querySelector(".event-time-from "),
            addEventTo = document.querySelector(".event-time-to "),
            addEventSubmit = document.querySelector(".add-event-btn ");

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
            "December",
            ];

            // const eventsArr = [
            //   {
            //     day: 13,
            //     month: 11,
            //     year: 2022,
            //     events: [
            //       {
            //         title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
            //         time: "10:00 AM",
            //       },
            //       {
            //         title: "Event 2",
            //         time: "11:00 AM",
            //       },
            //     ],
            //   },
            // ];

            const eventsArr = [];
            getEvents();
            console.log(eventsArr);

            //function to add days in days with class day and prev-date next-date on previous month and next month days and active on today
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
                days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
            }

            for (let i = 1; i <= lastDate; i++) {
                //check if event is present on that day
                let event = false;
                eventsArr.forEach((eventObj) => {
                if (
                    eventObj.day === i &&
                    eventObj.month === month + 1 &&
                    eventObj.year === year
                ) {
                    event = true;
                }
                });
                if (
                i === new Date().getDate() &&
                year === new Date().getFullYear() &&
                month === new Date().getMonth()
                ) {
                activeDay = i;
                getActiveDay(i);
                updateEvents(i);
                if (event) {
                    days += `<div class="day today active event">${i}</div>`;
                } else {
                    days += `<div class="day today active">${i}</div>`;
                }
                } else {
                if (event) {
                    days += `<div class="day event">${i}</div>`;
                } else {
                    days += `<div class="day ">${i}</div>`;
                }
                }
            }

            for (let j = 1; j <= nextDays; j++) {
                days += `<div class="day next-date">${j}</div>`;
            }
            daysContainer.innerHTML = days;
            addListner();
            }

            //function to add month and year on prev and next button
            function prevMonth() {
            month--;
            if (month < 0) {
                month = 11;
                year--;
            }
            initCalendar();
            }

            function nextMonth() {
            month++;
            if (month > 11) {
                month = 0;
                year++;
            }
            initCalendar();
            }

            prev.addEventListener("click", prevMonth);
            next.addEventListener("click", nextMonth);

            initCalendar();

            //function to add active on day
            function addListner() {
            const days = document.querySelectorAll(".day");
            days.forEach((day) => {
                day.addEventListener("click", (e) => {
                getActiveDay(e.target.innerHTML);
                updateEvents(Number(e.target.innerHTML));
                activeDay = Number(e.target.innerHTML);
                //remove active
                days.forEach((day) => {
                    day.classList.remove("active");
                });
                //if clicked prev-date or next-date switch to that month
                if (e.target.classList.contains("prev-date")) {
                    prevMonth();
                    //add active to clicked day afte month is change
                    setTimeout(() => {
                    //add active where no prev-date or next-date
                    const days = document.querySelectorAll(".day");
                    days.forEach((day) => {
                        if (
                        !day.classList.contains("prev-date") &&
                        day.innerHTML === e.target.innerHTML
                        ) {
                        day.classList.add("active");
                        }
                    });
                    }, 100);
                } else if (e.target.classList.contains("next-date")) {
                    nextMonth();
                    //add active to clicked day afte month is changed
                    setTimeout(() => {
                    const days = document.querySelectorAll(".day");
                    days.forEach((day) => {
                        if (
                        !day.classList.contains("next-date") &&
                        day.innerHTML === e.target.innerHTML
                        ) {
                        day.classList.add("active");
                        }
                    });
                    }, 100);
                } else {
                    e.target.classList.add("active");
                }
                });
            });
            }

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
            console.log("here");
            const dateArr = dateInput.value.split("/");
            if (dateArr.length === 2) {
                if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
                month = dateArr[0] - 1;
                year = dateArr[1];
                initCalendar();
                return;
                }
            }
            alert("Invalid Date");
            }

            //function get active day day name and date and update eventday eventdate
            function getActiveDay(date) {
            const day = new Date(year, month, date);
            const dayName = day.toString().split(" ")[0];
            eventDay.innerHTML = dayName;
            eventDate.innerHTML = date + " " + months[month] + " " + year;
            }

            //function update events when a day is active
            function updateEvents(date) {
            let events = "";
            eventsArr.forEach((event) => {
                if (
                date === event.day &&
                month + 1 === event.month &&
                year === event.year
                ) {
                event.events.forEach((event) => {
                    events += `<div class="event">
                        <div class="title">
                        <i class="fas fa-circle"></i>
                        <h3 class="event-title">${event.title}</h3>
                        </div>
                        <div class="event-time">
                        <span class="event-time">${event.time}</span>
                        </div>
                    </div>`;
                });
                }
            });
            if (events === "") {
                events = `<div class="no-event">
                        <h3>No Events</h3>
                    </div>`;
            }
            eventsContainer.innerHTML = events;
            saveEvents();
            }

            //function to add event
            addEventBtn.addEventListener("click", () => {
            addEventWrapper.classList.toggle("active");
            });

            addEventCloseBtn.addEventListener("click", () => {
            addEventWrapper.classList.remove("active");
            });

            document.addEventListener("click", (e) => {
            if (e.target !== addEventBtn && !addEventWrapper.contains(e.target)) {
                addEventWrapper.classList.remove("active");
            }
            });

            //allow 50 chars in eventtitle
            addEventTitle.addEventListener("input", (e) => {
            addEventTitle.value = addEventTitle.value.slice(0, 60);
            });

            //allow only time in eventtime from and to
            addEventFrom.addEventListener("input", (e) => {
            addEventFrom.value = addEventFrom.value.replace(/[^0-9:]/g, "");
            if (addEventFrom.value.length === 2) {
                addEventFrom.value += ":";
            }
            if (addEventFrom.value.length > 5) {
                addEventFrom.value = addEventFrom.value.slice(0, 5);
            }
            });

            addEventTo.addEventListener("input", (e) => {
            addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
            if (addEventTo.value.length === 2) {
                addEventTo.value += ":";
            }
            if (addEventTo.value.length > 5) {
                addEventTo.value = addEventTo.value.slice(0, 5);
            }
            });

            //function to add event to eventsArr
            addEventSubmit.addEventListener("click", () => {
            const eventTitle = addEventTitle.value;
            const eventTimeFrom = addEventFrom.value;
            const eventTimeTo = addEventTo.value;
            if (eventTitle === "" || eventTimeFrom === "" || eventTimeTo === "") {
                alert("Please fill all the fields");
                return;
            }

            //check correct time format 24 hour
            const timeFromArr = eventTimeFrom.split(":");
            const timeToArr = eventTimeTo.split(":");
            if (
                timeFromArr.length !== 2 ||
                timeToArr.length !== 2 ||
                timeFromArr[0] > 23 ||
                timeFromArr[1] > 59 ||
                timeToArr[0] > 23 ||
                timeToArr[1] > 59
            ) {
                alert("Invalid Time Format");
                return;
            }

            const timeFrom = convertTime(eventTimeFrom);
            const timeTo = convertTime(eventTimeTo);

            //check if event is already added
            let eventExist = false;
            eventsArr.forEach((event) => {
                if (
                event.day === activeDay &&
                event.month === month + 1 &&
                event.year === year
                ) {
                event.events.forEach((event) => {
                    if (event.title === eventTitle) {
                    eventExist = true;
                    }
                });
                }
            });
            if (eventExist) {
                alert("Event already added");
                return;
            }
            const newEvent = {
                title: eventTitle,
                time: timeFrom + " - " + timeTo,
            };
            console.log(newEvent);
            console.log(activeDay);
            let eventAdded = false;
            if (eventsArr.length > 0) {
                eventsArr.forEach((item) => {
                if (
                    item.day === activeDay &&
                    item.month === month + 1 &&
                    item.year === year
                ) {
                    item.events.push(newEvent);
                    eventAdded = true;
                }
                });
            }

            if (!eventAdded) {
                eventsArr.push({
                day: activeDay,
                month: month + 1,
                year: year,
                events: [newEvent],
                });
            }

            console.log(eventsArr);
            addEventWrapper.classList.remove("active");
            addEventTitle.value = "";
            addEventFrom.value = "";
            addEventTo.value = "";
            updateEvents(activeDay);
            //select active day and add event class if not added
            const activeDayEl = document.querySelector(".day.active");
            if (!activeDayEl.classList.contains("event")) {
                activeDayEl.classList.add("event");
            }
            });

            //function to delete event when clicked on event
            eventsContainer.addEventListener("click", (e) => {
            if (e.target.classList.contains("event")) {
                if (confirm("Are you sure you want to delete this event?")) {
                const eventTitle = e.target.children[0].children[1].innerHTML;
                eventsArr.forEach((event) => {
                    if (
                    event.day === activeDay &&
                    event.month === month + 1 &&
                    event.year === year
                    ) {
                    event.events.forEach((item, index) => {
                        if (item.title === eventTitle) {
                        event.events.splice(index, 1);
                        }
                    });
                    //if no events left in a day then remove that day from eventsArr
                    if (event.events.length === 0) {
                        eventsArr.splice(eventsArr.indexOf(event), 1);
                        //remove event class from day
                        const activeDayEl = document.querySelector(".day.active");
                        if (activeDayEl.classList.contains("event")) {
                        activeDayEl.classList.remove("event");
                        }
                    }
                    }
                });
                updateEvents(activeDay);
                }
            }
            });

            //function to save events in local storage
            function saveEvents() {
            localStorage.setItem("events", JSON.stringify(eventsArr));
            }

            //function to get events from local storage
            function getEvents() {
            //check if events are already saved in local storage then return event else nothing
            if (localStorage.getItem("events") === null) {
                return;
            }
            eventsArr.push(...JSON.parse(localStorage.getItem("events")));
            }

            function convertTime(time) {
            //convert time to 24 hour format
            let timeArr = time.split(":");
            let timeHour = timeArr[0];
            let timeMin = timeArr[1];
            let timeFormat = timeHour >= 12 ? "PM" : "AM";
            timeHour = timeHour % 12 || 12;
            time = timeHour + ":" + timeMin + " " + timeFormat;
            return time;
            }

                    </script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>

                <script>
                    let subMenu = document.getElementById("subMenu");

                    function toggleMenu(){
                        subMenu.classList.toggle("open-menu");
                    }

    </script>
    </body>
</html>