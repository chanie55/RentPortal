<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Manage User </title>
        <style>
            <?php
                include "css/manageOwner.css"
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
                            <li> <a href = "userList.php"> Property </a> </li>
                            <li> <a href = "reports.php"> Reports </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> Owner Registration </span> 
            </div>

            <!-- DATA TABLE -->
        <div class="container-xl">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="search-box">
                                    <i class="bx bx-search-alt-2" style="font-size: 18px;"></i>
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            include "dbconn.php";
                            
                            if(isset($_GET['page']) && $_GET['page'] !== "") {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $limit = 6;
                            $offset = ($page - 1) * $limit;

                            $previous = $page - 1;
                            $next = $page + 1;

                            $sql = "SELECT userinfo.contact, userinfo.email, user.userLevel_ID, user.status, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo JOIN user ON userinfo.userInfo_ID = user.userInfo_ID WHERE user.status = 0 AND user.userLevel_ID = 2 LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td> 
                                            <?php echo $row['contact'] ?> </td>
                                        <td>
                                            <button class="edit" name = "showData" title="Edit" onclick = "openForm()" id="<?php echo $row['fullName']; ?>"><i class="bx bxs-edit-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>       
                        </tbody>  
                    </table>
                    <div class="clearfix">
                        <ul class="pagination">
                    <?php
            
                    $query =  "SELECT COUNT(*) FROM user WHERE userLevel_ID = 2 AND status = 0";
                    $result_count = mysqli_query($conn, $query);
                    $records = mysqli_fetch_row($result_count);
                    $total_records = $records[0];

                    $total_pages = ceil($total_records / $limit);
                    $link = "";

                    ?>
                

                    <?php
                        if ($page >= 2) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href = 'manageOwner.php?page=".($page-1)."'> 
                            <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                        }

                         for ($counter = 1; $counter <= $total_pages; $counter++){
                            if ($counter == $page) {
                                $link .= "<li class = 'page-item active'>
                                <a class = 'page-link' href= 'manageOwner?page="
                                .$counter."'>".$counter." </a></li>";
                            } else {
                                $link .= "<li class = 'page-item'>
                                <a class = 'page-link' href='manageOwner.php?page=".$counter."'> ".$counter." </a> </li>";
                            }
                        };

                        echo $link;

                        if($page < $total_pages) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href='manageOwner.php?page=".($page+1)."'>
                            <i class = 'bx bxs-chevron-right'></i> </a></li>";
                        }
                    ?>
                </ul>

                <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
                    </div>
                    </div>
                </div>  
            </div>

            <!-- VIEW OWNER DETAILS -->
            <div class="overlay" id = "popup-msg">
                <div class="popup" id = "popup">
                    <?php 
                        include "dbconn.php";

                        $query = "SELECT email, contact, CONCAT(firstName,' ', lastName) AS fullName FROM userinfo WHERE userInfo_ID = 2";
                        $name_result = mysqli_query($conn, $query);
                        $resultCheck = mysqli_num_rows($result);
                    ?>
                    <p class = "date"> Date: </p>

                    <div class = "owner-details"> 
                        <p class = "name"> Name: <span id = "name"> </span></p>
                        <p class = "name"> Email: <span id = "email"> </span></p>
                        <p class = "name"> Contact: <span id = "contact"> </span></p>
                        <p class = "name"> Property Documents: </p>
                        <p class = "name"> Valid ID: </p>
                    </div>
                    <div class="text-right">
                        <button class="form-btn btn btn-cancel" onclick="closeForm()">Decline</button>
                        <button class="form-btn btn btn-primary" onclick="openEmail()">Accept</button>
                    </div>
                </div>
            </div>

            <!-- SEND EMAIL -->
            <div class="overlay2" id = "popup-msg2">
                <div class="popup2" id = "popup2">
                    <p class = "date"> Send Email </p>

                    <form action = "sendEmail.php" method = "post">
                    <div class="sendemail">
                        <label>Email:</label>
                        <input type="text" name="emailAdd" id="emailAdd" class="form-control" required="">
                    </div>
                    <div class="sendemail">
                        <label>Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control" required="">
                    </div>
                    <div class="sendemail">
                        <label>Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control" required="" style = "height: 13%;"> </textarea>
                    </div>

                    <div class="text-right">
                        <button type = "submit "class="form-btn btn btn-cancel" name = "send">Cancel</button>
                        <button type="submit" class="form-btn btn btn-primary" name = "send" >Send</button>
                    </div>
                    </form>
                    
                </div>
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

        <script>
            function openForm() {
                document.getElementById("popup-msg").style.display = "block";
                document.getElementById("popup").style.display = "block";

                function showDetails(button) {
                    var name = button.id;

                    $.ajax ({
                        url: "showData.php",
                        method: "GET",
                        data: {"email": name},
                        success: function(response) {
                            response = JSON.parse(response);
                            console.log(response);

                            var html = " ";

                            html += "<div class = 'row'>";
                                html += "<div class = 'col-md-6'> City </div>";
                                html += "<div class = 'col-md-6'>" + response.city + "</div>";
                            html += "</div>";

                            $("#popup").html(html);
                            $("#popup-msg").modal();
                        }
                    });
                }
            }

            function closeForm() {
                document.getElementById("popup-msg").style.display = "none";
                document.getElementById("popup").style.display = "none";
            }

            function openEmail() {
                document.getElementById("popup-msg2").style.display = "block";
                document.getElementById("popup2").style.display = "block";
            }

            function closeEmail() {
                document.getElementById("popup-msg2").style.display = "none";
                document.getElementById("popup2").style.display = "none";
            }
</script>
        
    </body>
</html>