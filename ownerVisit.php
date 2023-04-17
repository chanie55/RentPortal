<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Owner Dashboard </title>
        <style>
            <?php
                include "css/ownerVisit.css"
            ?>
        </style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body> 
        <div class = "container"> 
            <div class = "navigation"> 
                <div class = "logo">
                <i class='bx bxs-building-house'></i>
                    <span class = "logo-name"> RENTIN </span>
                </div>

                <ul class = "nav-links"> 
                    <li> 
                        <a href = "ownerDashboard.php"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Dashboard </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "ownerDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "ownerProperty.php"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Post Property </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "adminDashboard.php"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Visit Schedule </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "adminDashboard.php"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Reservation </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "adminDashboard.php"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> FAQ </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> Visit Schedule </span> 
            </div>

            <!--Calendar Start-->

            <div class = "calendar-container"> 
                <div class = "left"> 
                    <div class = "calendar"> 
                        <div class = "month"> 
                            <i class = "bx bx-user prev"> </i>
                            <div class = "date"></div>
                            <i class = "bx bx-user next"> </i>
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

        </section>
        
        <!-- Menu Toggle -->
        <script> 
        let arrow = document.querySelectorAll(".arrow");
        
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=> {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent);

                arrowParent.classList.toggle("showMenu");
            });
        }

        let navigation = document.querySelector(".navigation");
        let menu = document.querySelector(".menu-toggle");
        let navigationBtn = document.querySelector(".bx-menu");
        console.log(navigationBtn);

        navigationBtn.addEventListener("click", ()=>{
            navigation.classList.toggle("close");
            menu.classList.toggle("close");
        });
        </script>

        <!--Calendar Days-->
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