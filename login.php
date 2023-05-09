<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rentin Web Portal</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min5.css" rel="stylesheet">

        <style>
            <?php
                include "stylesheet.css"
            ?>
        </style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Login</title>
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
                        <a href="#" class="nav-item nav-link">About</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                    <div class = "dropdown">
                        <button class="btn btn-primary dropdown-toggle" type = "button" data-bs-toggle = "dropdown" data-toggle = "dropdown" aria-expanded = "false" style = "background: #5D59AF; color: white;">Register</button>
                        <ul class = "dropdown-menu">
                            <li> <a class = "dropdown-item" href = "#"> Seeker </a></li>
                            <li> <a class = "dropdown-item" href = "#"> Owner </a></li>
                        </ul>
                    </div>      
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
    
        <section>
            <div class="image"></div>
            <div>
                <h1>Welcome</h1>
                <br>
                <?php
					if(isset($_GET['error'])) { ?>
					<p class = "error">
						<?php
							echo $_GET['error']; ?>
				<?php } ?>

                <form action="userLogin.php" method="post">
                    <div class="form">
                        <i class='bx bx-user' class="icon"></i>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <br>

                    <div class="form">
                        <i class='bx bx-lock-alt' class="icon"></i>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div>
                        <a href= "forgotpw" class="forgotpw" > Forgot Password? </a>
                        <br>
                        <button type="submit" name = "login-submit">Login</button>
                    </div>
                </form>
            </div>
        </section>

        <script>
        function openAdd() {
            document.getElementById("register-dropdown").style.display = "block";
        }
        </script>

            <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
</html>