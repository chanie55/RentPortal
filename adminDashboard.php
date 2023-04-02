<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Admin Dashboard </title>
        <style>
            <?php
                include "css/adminDashboard.css"
            ?>
        </style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body> 
        <div class = "container"> 
            <div class = "navigation"> 
                <div class = "logo">
                <i class='bx bxs-building-house'></i>
                    <span class = "logo-name"> rentin </span>
                </div>

                <ul class = "nav-links"> 
                    <li> 
                        <a href = "adminDashboard.php"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Dashboard </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <div class = "menu"> 
                            <i class='bx bxs-user-plus'></i>
                            <span class = "label"> Manage User 
                            </span>
                            <i class='bx bxs-chevron-down arrow'></i> 
                        </div>

                        <ul class = "sub-menu"> 
                            <span class = "sub-menu-title"> Users </span>
                            <li> <a href = "manageAdmin.php"> Admin </a> </li>
                            <li> <a href = "manageOwner.php"> Owner </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <div class = "menu"> 
                        <i class='bx bxs-report' ></i> 
                            <span class = "label"> View Reports </span>
                        <i class='bx bxs-chevron-down arrow'></i> 
                        </div>

                        <ul class = "sub-menu"> 
                            <span class = "sub-menu-title"> Reports </span>
                            <li> <a href = "userList.php"> User List </a> </li>
                            <li> <a href = "propertyList.php"> Property List </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> Dashboard </span> 
            </div>

            <div class = "info-data"> 
                <div class = "card"> 
                    <div class = "head"> 
                        <div>
                            <h2> 34 </h2>
                            <p> Seekers </p> 
                        </div>
                        <i class = 'bx bx-user icon'> </i>
                    </div>
                    <span class = "progress" data-value = "50%"> </span>
                    <span class = "label"> 50% </span>
                </div>
                
                <div class = "card"> 
                    <div class = "head"> 
                        <div>
                            <h2> 34 </h2>
                            <p> Owners </p> 
                        </div>
                        <i class = 'bx bx-user icon'> </i>
                    </div>
                    <span class = "progress" data-value = "40%"> </span>
                    <span class = "label"> 40% </span>
                </div>

                <div class = "card"> 
                    <div class = "head"> 
                        <div>
                            <h2> 34 </h2>
                            <p> Residential Property </p> 
                        </div>
                        <i class = 'bx bx-home icon'> </i>
                    </div>
                    <span class = "progress" data-value = "50%"> </span>
                    <span class = "label"> 50% </span>
                </div>

                <div class = "card"> 
                    <div class = "head"> 
                        <div>
                            <h2> 34 </h2>
                            <p> Commercial Property </p> 
                        </div>
                        <i class = 'bx bx-home icon'> </i>
                    </div>
                    <span class = "progress" data-value = "80%"> </span>
                    <span class = "label"> 80% </span>
                </div>
            </div>

            <div class = "analytics">
                <div class = "analytics-card"> 
                    <div class = "analytics-head"> 
                        <h2> New Users </h2>
                        <span class = ""> </span>
                    </div>

                    <div class = "analytics-chart"> 
                        <div class = "chart-circle"> 
                            <span class = "analytics-value"> 0 </span>
                        </div>

                        <div class = "analytics-note"> 
                            <small> Note : </small>
                        </div>
                    </div>
                </div> 

                <div class = "request-card"> 
                    <div class = "request-head"> 
                        <div>
                            <p> Pending Owner Registration </p>
                            <h2> 18 </h2>
                        </div>
                        <i class = 'bx bx-user icon'> </i>
                    </div>
                    <button class = "view-request"> See All > </button>
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

        <!-- Progress Bar -->
        <script> 
            const allProgress = document.querySelectorAll('.card .progress');

            allProgress.forEach(item => {
                item.style.setProperty('--value', item.dataset.value)
            });
        </script>

        <!-- Circular Progress not yet working-->
        <script> 
            let circularProgress = document.querySelector(".chart-circle"),
                progressValue = document.querySelector(".analytics-value");

            let progressStartValue = 0, 
                progressEndValue = 20,
                speed = 100;
            
            let progress = setInterval(() => {
                progressStartValue++;

                progressValue.textContent = ${progressStartValue}%;

                if (progressStartValue == progressEndValue){
                    clearInterval(progress);
                }
            }, speed);
        </script>
        
    </body>
</html>