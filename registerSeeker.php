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
                    <form method = "post" action = "addSeeker.php">
                    <div class="title"><h1>Register</h1></div>
                        <?php
					        if(isset($_GET['error'])) { ?>
					            <p class = "error">
						    <?php
							    echo $_GET['error']; ?>
				        <?php } ?>

                            

                        <div class="input_field">
                            <label>First Name</label>
                                <input required type = "text" name = "firstname" class = "input" value = "<?php if (isset($_POST['firstname'])) { echo $_POST['firstname']; }?>"> 
                        </div>

                        <div class="input_field">
                            <label>Last Name</label>
                            <input type="text" name = "lastname" class="input"value = "<?php if (isset($_POST['lastname'])) { echo $_POST['lastname']; }?>" required>
                        </div>

                        <div class="input_field">
                            <label for = "email">Email</label>
                            <input type="email" name = "email" class="input" required>
                        </div>

                        <div class="input_field">
                            <label for = "contact">Contact</label>
                            <input type="tel" name = "contact" class="input" pattern="[0-9]*" required>
                        </div>

                        <div class="input_field">
                            <label>Username</label>
                            <input type="text" name = "username" class="input" required>
  
                        </div>

                        <div class="input_field">
                            <label>Password</label>
                            <input type="password" name = "password" class="input" required>

                        </div>

                        <div class="input_field">
                            <label>Confirm Password</label>
                            <input type="password" name = "password2" class="input" required>
                        </div>  

                        <div class="button">
                            <input type="submit" value="Register" class="btn" name = "submit-seeker">
                        </div> 
                        </form>
                </div>
                
                <div class = "image"> </div>
            </div>
        
        <script>
        function openAdd() {
            document.getElementById("register-dropdown").style.display = "block";
        }
        </script>

    </body>
</html>