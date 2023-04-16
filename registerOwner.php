<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <title> Register </title>
        <style>
            <?php
                include "css/registerOwner.css"
            ?>
        </style>
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

            <div class="container">
                <div class="content">
                <form method = "post" action = "">
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
                            <label>Username</label>
                            <input type="username" class="input" placeholder="Enter your username" required>
                        </div>

                        <div class="input_field">
                            <label>Password</label>
                            <input type="password" class="input" placeholder="Enter your password" required>
                        </div>

                        <div class="input_field">
                            <label>Confirm Password</label>
                            <input type="password" class="input" placeholder="Confirm your password" required>
                        </div> 
    
                        <span class="span"> Property <br> Documents </span>
                        <div class="dropdown">
                            <div class="select">
                                <span class="selected"> Select </span>
                                <div class="caret"></div>
                            </div>
                            <ul class="menu">
                                <li class="active"> Business Permit </li>
                                <li> DTI Permit </li>
                                <li> 065 </li>
                            </ul>
                        </div> 

                        <div class="button">
                            <input type="submit" value="Register" class="btn">
                        </div>
                    </div>
                    <div>
                        <div class = "image"> </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        
        <script>
        function openAdd() {
            document.getElementById("register-dropdown").style.display = "block";
        }
        </script>
        
      </form>
    </div>
  </div>
  <script src="js/registerOwner.js"></script>
    
    </body>
</html>