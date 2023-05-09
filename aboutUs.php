<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentin Web Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min5.css" rel="stylesheet">

    <style>
        <?php
            include "css/aboutUs.css"
        ?>
    </style>
</head>

<body> 

<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <h1 class="m-0" style = "color: #5D59AF;">Rentin</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="aboutUs.php" class="nav-item nav-link">About</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                    <div class = "dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type = "button" data-bs-toggle = "dropdown" id = "dropdownMenuButton1" aria-expanded = "false" style = "background: #5D59AF; color: white;">Register</button>
                        <ul class = "dropdown-menu" aria-labelledby = "dropdownMenuButton1">
                            <li> <a class = "dropdown-item" href = "registerSeeker.php"> Seeker </a></li>
                            <li> <a class = "dropdown-item" href = "registerOwner.php"> Owner </a></li>
                        </ul>
                    </div>      
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

    <div class = "heading"> 
        <h1> About Us </h1>
        <p> Some Text Here </p>
    </div>

    <div class = "container"> 
        <section classs = "about">
            <div class = "about-image"> 
                <img src = "images/heading.jpg">
            </div>
            
            <div class = "about-content"> 
                <h2> Title Here </h2>
                <p> Some Content Here </p>
            </div>
        </section>
    </div>
</body>
</html>