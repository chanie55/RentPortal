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
                    <span class = "logo-name"> RENTIN </span>
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
                        <a href = "#"> 
                            <i class='bx bxs-user-plus'></i>
                            <span class = "label"> Manage User 
                            </span>
                        </a>
                            <i class='bx bxs-chevron-down arrow'></i> 
                        </div>
                        <ul class = "sub-menu"> 
                            <li> <a href = "#" class = "sub-menu-title"> Manage User </a> </li>
                            <li> <a href = "#"> Admin </a> </li>
                            <li> <a href = "#"> Owner </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <div class = "menu"> 
                        <a href = "#"> 
                        <i class='bx bxs-report' ></i> 
                            <span class = "label"> Reports </span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i> 
                        </div>
                        <ul class = "sub-menu"> 
                            <li> <a href = "#" class = "sub-menu-title"> Reports </a> </li>
                            <li> <a href = "#"> User List </a> </li>
                            <li> <a href = "#"> Property List </a> </li>
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
        </section>
        
        
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

   
        
    </body>
</html>