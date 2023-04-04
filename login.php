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
    <script src="https://kit.fontawesome.com/649a00f146.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<header>
            <h3> RENTIN </h3>
            <nav class = "login-navigation"> 
                <a href = "" class = "login-button"> Login </a>
                <a href = "" class = "register-button"> Register </a>
            </nav>
        </header>
    <body>
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

        <form action="adminLogin.php" method="post">
        <div class="form">
        <i class="fa-sharp fa-solid fa-user"></i>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <br>
        <div class="form">
        <i class="fa-sharp fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <a href= "forgotpw" class="forgotpw" > Forgot Password? </a>
            <br>
            <button type="submit" name = "login-submit">Login</button>
        </div>
    </form>
        </section>
</body>
</html>