<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Manage User </title>
        <style>
            <?php
                include "css/manageAdmin.css"
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
                </ul>
            </div>
        </div>

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> Manage Admin </span> 
            </div>

            <!-- ADD NEW BUTTON -->
            <div class="add-new">   
            <a href="#" class = "btn btn-add mb-5" onclick = "openAdd()"> 
                    <i class="bx bxs-user-plus"style="font-size:30px;float:left" > </i> Add New
                </a>
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

                            $limit = 7;
                            $offset = ($page - 1) * $limit;

                            $previous = $page - 1;
                            $next = $page + 1;

                            $sql = "SELECT email, CONCAT(firstName,' ', lastName) AS fullName FROM tbl_userinfo LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['email'] ?> </td>
                                        <td>
                                        <a href="#" class="edit" title="Edit"><i class="bx bxs-edit" style="font-size: 24px;"></i></a>
                                        <a href="#" class="edit" title="Edit"><i class="bx bxs-trash" style="font-size: 24px;"></i></a>
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
            
                    $query =  "SELECT COUNT(*) FROM tbl_user";
                    $result_count = mysqli_query($conn, $query);
                    $records = mysqli_fetch_row($result_count);
                    $total_records = $records[0];

                    $total_pages = ceil($total_records / $limit);
                    $link = "";

                    ?>
                

                    <?php
                        if ($page >= 2) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href = 'manageAdmin.php?page=".($page-1)."'> 
                            <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                        }

                         for ($counter = 1; $counter <= $total_pages; $counter++){
                            if ($counter == $page) {
                                $link .= "<li class = 'page-item active'>
                                <a class = 'page-link' href= 'manageAdmin?page="
                                .$counter."'>".$counter." </a></li>";
                            } else {
                                $link .= "<li class = 'page-item'>
                                <a class = 'page-link' href='manageAdmin.php?page=".$counter."'> ".$counter." </a> </li>";
                            }
                        };

                        echo $link;

                        if($page < $total_pages) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href='manageAdmin.php?page=".($page+1)."'>
                            <i class = 'bx bxs-chevron-right'></i> </a></li>";
                        }
                    ?>
                </ul>

                <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
                    </div>
                    </div>
                </div>  
            </div>

        <!-- ADD ADMIN FORM -->
        <div class="overlay" id = "openAdd">
        <div class="popup" id = "popupAdd">
            <p class = "formHeader">Add New Admin</p>
            <form method="post" id="contactFrm" name="contactFrm" action = "addAdmin.php">
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
                        <label for = "email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for = "contact">Contact:</label>
                        <input type="tel" name="contact" id="contact" class="form-control" pattern="[0-9]*">
                    </div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" id="username" class="form-control"  required="">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required="">

                    </div>
                    <br>
            </form>
            <div class="text-right">
                <button class="form-btn btn btn-cancel cancel" onclick="closeAdd()">Cancel</button>
                <button class="form-btn btn btn-primary" onclick="" name = "submit-admin">Add</button>
            </div>
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