<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title> Reports </title>
        <style>
            <?php
                include "css/propertyList.css"
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
                <span class = "text"> Property List Reports </span> 
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
                                <th>Property Name</th>
                                <th>Property Type</th>
                                <th>Location</th>
                                <th>Owner</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Khytryn Apartment</td>
                                <td>Apartment</td>
                                <td>Not defined</td>
                                <td>Khytryn Faye Carcillar</td>
                                <td>
                                    <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit-alt"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="bx bxs-trash-alt"></i></a>
                                </td>
                            </tr>       
                        </tbody>
                        
                        <tbody>
                            <tr>
                                <td>Beverly Commercial Rent</td>
                                <td>Commercial Building</td>
                                <td>Not defined</td>
                                <td>Beverly Jane Gicale</td>
                                <td>
                                    <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit-alt"></i></a>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="bx bxs-trash-alt"></i></a>
                                </td>
                            </tr>       
                        </tbody> 

                        <tbody>
                            <tr>
                                <td>AJ Apartment</td>
                                <td>Apartment</td>
                                <td>Not defined</td>
                                <td>Aj Lynn Jusayan</td>
                                <td>
                                    <a href="#" class="edit" title="Edit"><i class="bx bxs-edit-alt"></i></a>
                                    <a href="#" class="delete" title="Delete"><i class="bx bxs-trash-alt"></i></a>
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