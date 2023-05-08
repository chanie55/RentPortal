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
                    
                        <?php
					        if(isset($_GET['error'])) { ?>
					            <p class = "error">
						    <?php
							    echo $_GET['error']; ?>
				        <?php } ?>

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label> <strong> Choose atleast one (1) Property Documents </strong> </label> 
                      
                                <div class = "form-group form-check">
                                    <input type="checkbox" name = "document[]" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> Business Permit </label>
                                </div>

                                <div class = "form-group form-check">
                                    <input type="checkbox" name = "document[]" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> DTI </label>
                                </div>

                                <div class = "form-group form-check">
                                    <input type="checkbox" name = "document[]" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> 0605 BIR Form </label>
                                </div>

                                <div class = "form-group form-check">
                                    <input type="checkbox" name = "document[]" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> Others </label>
                                </div>

                                <label> <strong> Upload Copy: </strong> </label>
                                    <button class="btn-primary" type="button" name = "upload-image" data-toggle = "modal" data-target = "#addEmployeeModal">Upload Image</button>
                            </div>
                        </div>

                        
                        
                        <label> <strong> Upload Valid ID: </strong> </label> 
                        <input type="file" name="my_image" multiple> <br><br>

                        <div class = "wrapper"> 
                            <header> Upload your image here </header>

                            <form action ="" method = ""> 
                                <i class = "bx bx-user"> </i>
                                <p> Browse files to upload </p>
                            </form>

                            <section class = "progress-area"> 
                                <li class = "row"> 
                                    <i class = "bx bx-user"> </i>
                                    <div class = "content"> </div>
                                        <div class = "details"> </div>
                                        
                                </li>
                            </section>
                            <section class = "uploaded-area"> </section>
                        </div>


                        <button class="btn btn-primary" type="submit" name = "submit-owner">Register</button>
                        <br> <br>
                        <div class="form-group">
                            <div class="form-check">
                               
                        </div>
                    </div>
                    
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