<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> FAQ </title>
        <style>
            <?php
                include "css/FAQ.css"
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
                        <a href = "#"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Visit Schedule </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "#" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "#"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> Reservation </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "#" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "#"> 
                        <i class='bx bxs-home'></i>
                            <span class = "label"> FAQ </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "#" class = "sub-menu-title"> FAQ </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
               
           

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> FAQ </span> 
            </div>
            <form method = "post" action = "">
                <div class="form">
                       <div class="input_field">
                             <label> Enter Question</label>
                             <br>
                             <br>
                            <input type="text" class="input" placeholder="" required>
                        </div>
                        <br>
                        <br>
                        <div class="input_field">
                             <label> Enter Answer</label>
                             <br>
                             <br>
                            <input type="text" class="input" placeholder="" required>
                        </div>
                        <button type="submit" name = "add_FAQ" class="add-new"> Add FAQ </button>
                    </div>
                </form>
            </div>
            <div class="container-xl">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                        </div>

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
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
    </body>
</html>