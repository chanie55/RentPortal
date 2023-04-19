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
                        <a href = "ownerVisit.php"> 
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
                        <a href = "FAQ.php"> 
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
            <p class = "formHeader">Add Property</p>
            <form method="post" id="addFrm" name="addFrm" action = "addtenant.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Choose Property:</label>
                        <select name = "select-type"> 
                        <option> Apartment </option>
                        <option> Boarding House </option>
                        <option> House Rent </option>
                        <option> Commercial Building </option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Property Name:</label>
                        <input type="text"  name="name" id="name" class="form-control"  required="" >
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" name="address" id="address" class="form-control" required="">
                        <a href = "viewmap.php"><i class = "bx bxs-edit-location"> </i></a>
                    </div>
                    <div class="form-group">
                        <label>Contact:</label>
                        <input type="password" name="contact" id="contact" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Description:</label> <br>
                        <textarea type="text" name="description" id="description" class="form-control" required=""> </textarea>
                    </div>
                    <div class="form-group">
                        <label>Monthly Rate:</label>
                        <input type="text" name="rate" id="rate" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Total Rooms:</label>
                        <input type="text" name="totalrooms" id="totalrooms" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Room Type:</label>
                        <select name = "select-type"> 
                        <option> Single </option>
                        <option> 2 person per room </option>
                        <option> Bedspacer </option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Bed Type:</label>
                        <select name = "select-type"> 
                        <option> Single </option>
                        <option> Bed spacer </option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Comfort Room:</label>
                        <select name = "select-type"> 
                        <option> Common </option>
                        <option> Per Room </option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Kitchen:</label>
                        <select name = "select-type"> 
                        <option> Common </option>
                        <option> Per Room </option>
                        <option> Not Provided </option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Landmark:</label>
                        <input type="text" name="landmark" id="landmark" class="form-control" required="">
                    </div>
                    <input type="file" name="my_image">
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