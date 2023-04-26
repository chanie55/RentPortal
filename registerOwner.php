<!DOCTYPE>
<html> 
    <head> 
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <title> Register </title>
        <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                <form method = "post" action = "addOwner.php" class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" name = "firstname" class="form-control" id="validationCustom01" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" name = "lastname" class="form-control" id="validationCustom02" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9 mb-3">
                            <label for="validationCustom03">Email</label>
                            <input type="email" name = "email" class="form-control" id="validationCustom03" required>
                            <div class = "invalid-feedback"> 
                                Invalid email address
                            </div>
                        </div>
                        

                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Age</label>
                            <input type="text" name = "age" pattern = "[0-9]{2}" class="form-control" id="validationCustom04" required>
                            <div class = "invalid-feedback"> 
                                Invalid input
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom05">Address</label>
                            <input type="text" name = "address" class="form-control" id="validationCustom05" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom06">Contact</label>
                            <input type="text" name = "contact" pattern = "[0-9]{11}" class="form-control" id="validationCustom06" required>
                            <div class = "invalid-feedback"> 
                                Contact must be 11 digits
                            </div>
                        </div> 
                    </div>

                        

                        <fieldset class="form-group row">
                            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom07">Username</label>
                                <input type="text" name = "username" class="form-control" id="validationCustom07" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom08">Password</label>
                                <input type="text" name = "password" class="form-control" id="validationCustom08" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom09">Confirm Password</label>
                                <input type="text" name = "password2" class="form-control" id="validationCustom09" required>
                            </div>
                        </div>

                        <p class="span"> Property <br> Documents </p>  
                        <div class ="dropdown1">
                            <input type="text" class="textBox" name = "documents" placeholder="Property Documents" readonly>
                            <div class="option">
                                <div onclick="show('Business Permit')"> Business Permit </div>
                                <div onclick="show('DTI')"> DTI </div>
                                <div onclick="show('065')"> 065 BIR</div>
                            </div>
                        </div>

                        <input type="file" name="my_image">

                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label" for="invalidCheck">
                                    Already have an account?
                                </label>
                                <label class="form-check-label" for="invalidCheck">
                                    Forgot Password
                                </label>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name = "submit-owner">Register</button>
                </form>

                        
                    </div>
                    <div>
                        <div class = "image"> </div>
                    </div>
                    </div>
                   
                 </form>
                </div>
         </div>  
         <script>
            function show(anything){
                document.querySelector('.textBox') .value = anything;
            }
                let dropdown1 = document.querySelector('.dropdown1');
                dropdown1.onclick =function(){
                    dropdown1.classList.toggle('active');
                }
            
            </script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    </body>
</html>