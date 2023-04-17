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
                <form method = "post" action = "addOwner.php">
                    <div class="title"><h1>Register</h1></div>
                        <div class="input_field">
                            <label>First Name</label>
                            <input type="text" name = "firstname" class="input" required>
                        </div>

                        <div class="input_field">
                            <label>Last Name</label>
                            <input type="text" name = "lastname" class="input" required>
                        </div>

                        <div class="input_field">
                            <label for = "email">Email</label>
                            <input type="email" name = "email" class="input" required>
                        </div>

                        <div class="input_field">
                            <label for = "contact" >Contact</label>
                            <input type="tel" name = "contact" class="input" pattern="[0-9]*" required>
                        </div>

                        <div class="input_field">
                            <label>Username</label>
                            <input type="username" name = "username" class="input" required>
                        </div>

                        <div class="input_field">
                            <label>Password</label>
                            <input type="password" name = "password" class="input" required>
                        </div>

                        <div class="input_field">
                            <label>Confirm Password</label>
                            <input type="password" class="input" required>
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
                            <input type="submit" value="Register" name = "submit-owner" class="btn">
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