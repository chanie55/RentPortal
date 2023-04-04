<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <title> Register </title>
        <style>
            <?php
                include "css/registerSeeker.css"
            ?>
        </style>
    </head>

    <body> 
        <header>
            <h3> RENTIN </h3>
            <nav class = "login-navigation"> 
                <a href = "" class = "login-button"> Login </a>
                <a href = "" class = "register-button"> Register </a>
            </nav>
        </header>

            <div class="container">
                <div class="content">
                    <div class="title"><h1>Register</h1></div>
                        <div class="input_field">
                            <label>First Name</label>
                            <input type="text" class="input" placeholder="Enter your first name" required>
                        </div>

                        <div class="input_field">
                            <label>Last Name</label>
                            <input type="text" class="input" placeholder="Enter your last name" required>
                        </div>

                        <div class="input_field">
                            <label>Email</label>
                            <input type="text" class="input" placeholder="Enter your email" required>
                        </div>

                        <div class="input_field">
                            <label>Contact</label>
                            <input type="text" class="input" placeholder="Enter your contact" required>
                        </div>

                        <div class="input_field">
                            <label>Password</label>
                            <input type="password" class="input" placeholder="Enter your password" required>
                        </div>

                        <div class="input_field">
                            <label>Confirm Password</label>
                            <input type="password" class="input" placeholder="Confirm your password" required>
                        </div>  

                        <div class="input_fieldTerms">
                            <label class="check">
                                <input type="checkbox">
                                <span class="checkmark"></span> 
                            </label>
                            <p class="p">I agree all statements in <b>Terms of Service</b><p>
                        </div>
                        
                        <div class="button">
                            <input type="submit" value="Register" class="btn">
                        </div> 
                </div>
                
                <div class = "image"> </div>
            </div>

    </body>
</html>