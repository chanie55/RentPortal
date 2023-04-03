<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <form action="login.php" method="post">
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
            <button type="submit">Login</button>
        </div>
    </form>
        </section>
</body>
</html>