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
                    <form method = "post" id = "form" action = "addSeeker.php">
                    <div class="title"><h1>Register</h1></div>
                        <?php
					        if(isset($_GET['error'])) { ?>
					            <p class = "error">
						    <?php
							    echo $_GET['error']; ?>
				        <?php } ?>

                        <div class="form-control input_field success">
                        <label>First Name</label>
                        <?php if (isset($_GET['firstname'])) { ?>
                            <input type = "text" 
                                   name = "firstname" 
                                   class = "input" 
                                   id = "firstname"
                                   value = "<?php echo $_GET['firstname']; ?>"><br>
                        <?php } else { ?>
                            <input type = "text" 
                                   name = "firstname" 
                                   class = "input"
                                   id = "firstname"><br>
                        <?php } ?>
                        <small> Error Message </small>  
                        </div>

                        <div class="form-control input_field">
                        <label>Last Name</label>
                        <?php if (isset($_GET['lastname'])) { ?>
                            <input required type = "text" 
                                   name = "lastname" 
                                   class = "input" 
                                   id = "lastname"
                                   value = "<?php echo $_GET['lastname']; ?>"><br>
                        <?php } else { ?>
                            <input required type = "text" 
                                   name = "lastname" 
                                   class = "input"
                                   id = "lastname"><br>
                        <?php } ?>
                        </div>

                        <div class="form-control input_field">
                        <label>Email</label>
                        <?php if (isset($_GET['email'])) { ?>
                            <input required type = "email" 
                                   name = "email" 
                                   class = "input" 
                                   value = "<?php echo $_GET['email']; ?>"><br>
                        <?php } else { ?>
                            <input required type = "text" 
                                   name = "email" 
                                   class = "input"><br>
                        <?php } ?>
                        </div>

                        <div class="form-control input_field">
                        <label>Contact</label>
                        <?php if (isset($_GET['contact'])) { ?>
                            <input required type = "tel" 
                                   name = "contact" 
                                   class = "input" 
                                   id = "contact"
                                   value = "<?php echo $_GET['contact']; ?>"><br>
                        <?php } else { ?>
                            <input required type = "tel" 
                                   name = "contact" 
                                   class = "input"
                                   id = "contact"><br>
                        <?php } ?>
                        </div>

                        <div class="form-control input_field">
                        <label>Username</label>
                        <?php if (isset($_GET['username'])) { ?>
                            <input required type = "text" 
                                   name = "username" 
                                   class = "input" 
                                   id = "username"
                                   value = "<?php echo $_GET['username']; ?>"><br>
                        <?php } else { ?>
                            <input required type = "text" 
                                   name = "username" 
                                   class = "input"
                                   id = "username"><br>
                        <?php } ?>
  
                        </div>

                        <div class="form-control input_field">
                        <label>Password</label>
                        <?php if (isset($_GET['password'])) { ?>
                            <input required type = "password" 
                                   name = "password" 
                                   class = "input"
                                   id = "password" 
                                   value = "<?php echo $_GET['password']; ?>"><br>
                        <?php } else { ?>
                            <input required type = "password" 
                                   name = "password" 
                                   class = "input"
                                   id = "password" ><br>
                        <?php } ?>
                        
                        </div>
                        <p> * Password must be atleast 8 characters in length and must contain atleast one number and one upper case letter </p>

                        <div class="form-control input_field">
                        <label>Confirm Password</label>
                        <?php if (isset($_GET['password2'])) { ?>
                            <input required type = "password" 
                                   name = "password2" 
                                   class = "input"
                                   id = "password2"  
                                   value = "<?php echo $_GET['password2']; ?>"><br>
                        <?php } else { ?>
                            <input required type = "password" 
                                   name = "password2" 
                                   class = "input"
                                   id = "password2" ><br>
                        <?php } ?>
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