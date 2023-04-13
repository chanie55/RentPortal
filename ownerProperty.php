<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Owner Property </title>
        <style>
            <?php
                include "css/ownerProperty.css"
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
                        <i class='bx bxs-building'></i>
                            <span class = "label"> Post Property </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "#"> 
                        <i class='bx bxs-edit-location'></i>
                            <span class = "label"> Visit Schedule </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "#"> 
                        <i class='bx bxs-calendar-exclamation'></i>
                            <span class = "label"> Reservation </span>
                        </a>
                        <ul class = "sub-menu blank"> 
                            <li> <a href = "adminDashboard.php" class = "sub-menu-title"> Dashboard </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <a href = "#"> 
                        <i class='bx bxs-message-rounded-add'></i>
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
                <span class = "text"> Post Property </span> 
            </div>
                        <!-- ADD NEW BUTTON -->
                <div class="add-new">   
                <a href="#" class = "btn btn-add mb-5" onclick = "openAdd()"> 
                    <i class="bx bxs-user-plus"style="font-size:30px;float:left" > </i> Add New
                </a>

            </div>
        </section>

           <!-- ADD ADMIN FORM -->
           <div class="overlay" id = "openAdd">
        <div class="popup" id = "popupAdd">
            <p class = "formHeader">Add New Admin</p>
            <form method="post" id="addFrm" name="addFrm" action = "addtenant.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text"  name="lastname" id="lastname" class="form-control"  required="" >
                    </div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" id="username" class="form-control" pattern="[A-Za-z]{1,}" required="">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="password" name="email" id="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="password" id="password" class="form-control" pattern="[0-9]*"  required="">

                    </div>
                    <br>
                    </form>
            <div class="text-right">
                <button class="form-btn btn btn-cancel cancel" onclick="closeAdd()">Cancel</button>
                <button class="form-btn btn btn-primary" onclick="" name = "submit-tenant">Add</button>
            </div>
        </div>
    </div>

      
    </section>
        
        <script> 
        let arrow = document.querySelectorAll(".arrow");
        

        for (var i = 0; i < arrow.length; i++) {y
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

<script>
    function openAdd() {
    document.getElementById("openAdd").style.display = "block";
    document.getElementById("popupAdd").style.display = "block";
    }

    function closeAdd() {
        document.getElementById("openAdd").style.display = "none";
    document.getElementById("popupAdd").style.display = "none";
    }
</script>
   
        
    </body>
</html>