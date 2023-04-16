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
                </ul>
            </div>
        </div>

        <section class = "menu-toggle"> 
            <div class = "toggle-content"> 
                <i class = "bx bx-menu"> </i>
                <span class = "text"> Manage Owner </span> 
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
                                <th>Address</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Khytryn Faye Carcillar</td>
                                <td>Isulan, Sultan Kudarat</td> 
                                <td>kate@gmail.com</td>
                                <td>
                                    <a href="#" class="edit" title="Edit" onclick = "openForm()"><i class="bx bxs-show" style="font-size: 24px;"></i></a>
                                </td>
                            </tr>       
                        </tbody>
                        
                        <tbody>
                            <tr>
                                <td>Beverly Jane Gicale</td>
                                <td>Tambler</td>
                                <td>bev@gmail.com</td>
                                <td>
                                    <a href="#" class="edit" title="View" onclick = "openForm()"><i class="bx bxs-show" style="font-size: 24px;"></i></a>
                                </td>
                            </tr>       
                        </tbody> 

                        <tbody>
                            <tr>
                                <td>Aj Lynn Jusayan</td>
                                <td>Bawing</td>
                                <td>aj@gmail.com</td>
                                <td>
                                    <a href="#" class="edit" title="Edit"><i class="bx bxs-show" style="font-size: 24px;"></i></a>
                                </td>
                            </tr>       
                        </tbody>  
                    </table>
                    <div class="clearfix">
                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#"><i class="bx bxs-chevron-left"></i></a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item active"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="bx bxs-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>  
            </div>

            <!-- VIEW OWNER DETAILS -->
            <div class="overlay" id = "popup-msg">
                <div class="popup" id = "popup">
                    <p class = "date"> Date: </p>

                    <div class = "owner-details"> 
                        <p class = "name"> Name: </p>
                        <p class = "name"> Address: </p>
                        <p class = "name"> Email: </p>
                        <p class = "name"> Contact: </p>
                        <p class = "name"> Property Documents: </p>
                        <p class = "name"> Valid ID: </p>
                    </div>
                    <div class="text-right">
                        <button class="form-btn btn btn-cancel" onclick="closeForm()">Decline</button>
                        <button class="form-btn btn btn-primary" onclick="location.href='index.php'">Accept</button>
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
            function openForm() {
                document.getElementById("popup-msg").style.display = "block";
                document.getElementById("popup").style.display = "block";
            }

            function closeForm() {
                document.getElementById("popup-msg").style.display = "none";
                document.getElementById("popup").style.display = "none";
            }
</script>
        
    </body>
</html>