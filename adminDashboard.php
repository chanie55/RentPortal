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
    </head>

    <body> 
        <div class = "container"> 
            <div class = "navigation"> 
                <div class = "logo"> 
                    <span class = "logo-name"> LOGO </span>
                </div>

                <ul> 
                    <li> 
                        <a href = "#"> 
                            <span class = "icon"> xx 
                                <ion-icon name = ""> </iom-icon>
                            </span>
                            <span class = "label"> Dashboard </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "#"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <div class = "menu"> 
                        <a href = "#"> 
                            <span class = "icon"> xx </span>
                            <span class = "label"> Manage User 
                            </span>
                        </a>
                            <ion-icon name = "" class = "arrow"> xx </iom-icon> 
                        </div>
                        <ul class = "sub-menu"> 
                            <li> <a href = "#" class = "sub-menu-title"> Category </a> </li>
                            <li> <a href = "#"> Admin </a> </li>
                            <li> <a href = "#"> Owner </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <div class = "menu"> 
                        <a href = "#"> 
                            <span class = "icon"> xx </span>
                            <span class = "label"> Reports </span>
                        </a>
                            <ion-icon name = "" class = "arrow"> xx </iom-icon> 
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
                <ion-icon name = "" class = "box"> xx </iom-icon>
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
        let navigationBtn = document.querySelector(".box");
        console.log(navigationBtn);

        navigationBtn.addEventListener("click", ()=>{
            navigation.classList.toggle("close");
        });
        </script>
    </body>
</html>