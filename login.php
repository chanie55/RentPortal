<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            <?php
                include "stylesheet.css"
            ?>
        </style>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Login</title>
    </head>
    <body>
        <header>
            <h3> RENTIN </h3>
            <nav class = "login-navigation"> 
                <a href = "login.php" class = "login-button"> Login </a>
                <a href = "#" class = "register-button" onclick = "openAdd()"> Register </a>
                <ul class = "dropdown" id = "register-dropdown"> 
                    <li> <a href = "registerSeeker.php"> Seeker </a> </li>
                    <li> <a href = "registerOwner.php"> Owner </a> </li>
                </ul>
            </nav>
        </header>
    
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
                        <input type="text" name="username" id="username" placeholder="Username">
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
    </body>
</html>