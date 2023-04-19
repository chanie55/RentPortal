<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Admin Dashboard </title>
        <style>
            <?php
                include "css/property.css"
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
                            <i class='bx bxs-user'></i>
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
                        <i class='bx bxs-folder-open' ></i> 
                            <span class = "label"> View Reports </span>
                        <i class='bx bxs-chevron-down arrow'></i> 
                        </div>

                        <ul class = "sub-menu"> 
                            <span class = "sub-menu-title"> Reports </span>
                            <li> <a href = "userList.php"> User List </a> </li>
                            <li> <a href = "propertyList.php"> Property List </a> </li>
                        </ul>
                    </li>

                    <li> 
                        <div class = "menu"> 
                        <i class='bx bxs-folder-open' ></i> 
                            <span class = "label"> Maintenance </span>
                        <i class='bx bxs-chevron-down arrow'></i> 
                        </div>

                        <ul class = "sub-menu"> 
                            <span class = "sub-menu-title"> Maintenance </span>
                            <li> <a href = "property.php"> Property </a> </li>
                            <li> <a href = "reports.php"> Reports </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> Property </span> 
            </div>

            <form method = "post" action = "addType.php"> 
                <div class = ""> 
                    <label> Choose: </label>
                    <select name = "select-type"> 
                        <option> Property</option>
                        <option> Room </option>
                        <option> Bed </option>
                        <option> Kitchen </option>
                        <option> Comfort Room </option>
                    </select>
                </div>
                <div class = "form-group"> 
                    <label> Add Type </label>
                    <input type = "text" name = "type" id = "type_0" class = "myInput form-control">
                </div>

                <button type = "submit" class = "addType" name = "submit-type"> Save </button>

                <div id = "hob"> </div>
            </form>

            <!-- DATA TABLE -->
            <div class="container-xl">
                <div class="table-wrapper">
                    <div class="table-title">

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th> Action </th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            include "dbconn.php";

                            $sql = "SELECT * FROM kitchen";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['kitchen_ID'] ?> </td>
                                        <td> <?php echo $row['kitchen_Type'] ?> </td>
                                        <td>
                                            <?php
                                            echo '<p> <a href = "deletetype.php?kitchen_ID='.$row['kitchen_ID'].'"> <i class = "bx bxs-trash-alt"> </i> </a> </p>';
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>       
                        </tbody>  
                    </table>
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

         <!--Generate Textbox
         <script> 
            var counter = 1;
            var textBox = "";
            var hob = document.getElementById("hob");

            function addBox() {
                var div = document.createElement("div");
                div.setAttribute("class", "form-group");
                div.setAttribute("id", "box_" + counter);

                var textBox = "<label> Add Type </label> <input type = 'text' name = 'type' class = 'myInput form-control myInput' id = 'type_" + counter + "'><input class = 'mybox' type = 'button' value = '-' onclick = 'removeBox(this)'>";
                div.innerHTML = textBox;

                hob.appendChild(div);
                counter++;
            }

            function removeBox(ele) {
                ele.parentNode.remove();
            }
        </script>-->
    </body>
</html>