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
        <script scr = "richtext/jquery.richtext.js"> </script>
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
            <form method = "post" action = "addFAQ.php">
                <div class="form">
                       <div class="input_field">
                             <label> Enter Question</label>
                             <br>
                             <br>
                            <input type="text" name = "question" class="input" placeholder="" required>
                        </div>
                        <br>
                        <br>
                        <div class="input_field">
                             <label> Enter Answer</label>
                             <br>
                             <br>
                            <textarea name = "answer" id = "answer" class="input" placeholder="" required> </textarea>
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

                            $sql = "SELECT question, answer FROM faq LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['question'] ?> </td>
                                        <td> <?php echo $row['answer'] ?> </td>
                                        <td>
                                            <a href="#" class="edit" title="Edit"><i class="bx bxs-edit-alt"></i></a>
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
            
                    $query =  "SELECT COUNT(*) FROM faq";
                    $result_count = mysqli_query($conn, $query);
                    $records = mysqli_fetch_row($result_count);
                    $total_records = $records[0];

                    $total_pages = ceil($total_records / $limit);
                    $link = "";

                    ?>
                

                    <?php
                        if ($page >= 2) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href = 'FAQ.php?page=".($page-1)."'> 
                            <i class = 'bx bxs-chevron-left'> </i> </a> </li>";
                        }

                         for ($counter = 1; $counter <= $total_pages; $counter++){
                            if ($counter == $page) {
                                $link .= "<li class = 'page-item active'>
                                <a class = 'page-link' href= 'FAQ?page="
                                .$counter."'>".$counter." </a></li>";
                            } else {
                                $link .= "<li class = 'page-item'>
                                <a class = 'page-link' href='FAQ.php?page=".$counter."'> ".$counter." </a> </li>";
                            }
                        };

                        echo $link;

                        if($page < $total_pages) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href='FAQ.php?page=".($page+1)."'>
                            <i class = 'bx bxs-chevron-right'></i> </a></li>";
                        }
                    ?>
                </ul>

                <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
                    </div>
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
        
        <!-- Initialize rich text library -->
        <script> 
            window.addEventListener("load", function () {
                $("#answer").richText();
            });
        </script>
    </body>
</html>