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
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                                <?php if (isset($_GET['firstname'])) { ?>
                                    <input required type = "text" 
                                    name = "firstname" 
                                    class="form-control" 
                                    id="validationCustom01"
                                    value = "<?php echo $_GET['firstname']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                    name = "firstname" 
                                    class="form-control"
                                    id="validationCustom01"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                Please provide your first name
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                                <?php if (isset($_GET['lastname'])) { ?>
                                    <input required type = "text" 
                                    name = "lastname" 
                                    class="form-control" 
                                    id="validationCustom02"
                                    value = "<?php echo $_GET['lastname']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                    name = "lastname" 
                                    class="form-control"
                                    id="validationCustom02"><br>
                                <?php } ?>
                                <div class = "invalid-feedback"> 
                                Please provide your lastname
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom03">Email</label>
                                <?php if (isset($_GET['email'])) { ?>
                                    <input required type = "email" 
                                    name = "email" 
                                    class="form-control" 
                                    id="validationCustom03"
                                    value = "<?php echo $_GET['email']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "email" 
                                    name = "email" 
                                    class="form-control"
                                    id="validationCustom03"><br>
                                <?php } ?>
                            <div class = "invalid-feedback"> 
                                Invalid email address
                            </div>
                        </div>
                        

                        <div class="col-md-4 mb-3">
                            <label for="datepicker">Birth Date</label>
                                <?php if (isset($_GET['birthdate'])) { ?>
                                    <input required type = "date" 
                                    name = "birthdate" 
                                    class="form-control" 
                                    width = "276"
                                    id="datepicker"><br>
                                <?php } else { ?>
                                    <input required type = "date" 
                                    name = "birthdate" 
                                    class="form-control"
                                    id="datepicker"><br>
                                <?php } ?>
                            <div class = "invalid-feedback"> 
                                Invalid input
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="disabledTextInput">City</label>
                            <input required type = "text" class="form-control" id="disabledTextInput" placeholder = "General Santos" disabled>           
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom05">Barangay</label>
                            <select class="custom-select" id="validationCustom05" name = "barangay" required> 
                            <option selected disabled value="">Choose...</option>
                            <?php
                            include "dbconn.php";
                            
                            $brgy_query = "SELECT barangay FROM useraddress";
                            $r = mysqli_query($conn, $brgy_query);

                            while ($row = mysqli_fetch_array($r)) {
                                ?>
                                
                                <option > <?php echo $row['barangay']; ?></option>
                            <?php
                            }
                            ?>
                            </select>
                            <div class="invalid-feedback">
                                Please select a barangay.
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label for="validationCustom06">Street/Purok</label>
                                <?php if (isset($_GET['stpurok'])) { ?>
                                    <input required type = "text" 
                                    name = "stpurok" 
                                    class="form-control"
                                    id="validationCustom06"
                                    value = "<?php echo $_GET['stpurok']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "text" 
                                    name = "stpurok" 
                                    class="form-control"
                                    id="stpurok"><br>
                                <?php } ?>
                            <div class = "invalid-feedback"> 
                                Please provide your street or purok
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Contact</label>
                                <?php if (isset($_GET['contact'])) { ?>
                                    <input required type = "number" 
                                    name = "contact" 
                                    class="form-control"
                                    pattern = "[0-9]{11}" 
                                    id="validationCustom06"
                                    value = "<?php echo $_GET['contact']; ?>"><br>
                                <?php } else { ?>
                                    <input required type = "number" 
                                    name = "contact" 
                                    class="form-control"
                                    pattern = "[0-9]{11}"
                                    id="validationCustom06"><br>
                                <?php } ?>
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

                        <div class="form-row password" >
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom08">Password</label>
                                <input type="text" name = "password" class="form-control" id="validationCustom08" aria-describedby = "pwd" required>
                                    <small id = "pwd" class = "form-text text-muted">
                                        Must be more than 8 characters long, contain atleast one (1) capital letter and numbers
                                    </small>
                                <div class = "invalid-feedback"> 
                                Please enter your password
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom09">Confirm Password</label>
                                <input type="text" name = "password2" class="form-control" id="validationCustom09" required>
                                <div class = "invalid-feedback"> 
                                Please re-enter your password
                                </div>
                            </div>
                        </div>

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
                                
                                <!--<label> <strong> Upload Copy: </strong> </label>
                                    <button class="btn-primary" type="button" name = "upload-image" data-toggle = "modal" data-target = "#addEmployeeModal">Upload Image</button>-->
                            </div>
                        </div>

                        <!-- Upload Multiple Image-->
                        <div class = "card"> 
                            <div class = "top"> 
                                <p> Upload your documents here </p>
                            </div>

                            <div class = "drag-area drop-section"> 
                                <span class = "visible"> Upload your image here
                                    <span class = "select file-selector" role = "button"> Browse </span> 
                                </span>

                                <span class = "on-drop"> Drop images here </span>
                                    <input name = "file" type = "file" class = "file[] file-selector-input" multiple />
                            </div>

                            <div class="list-section">
                                <div class="list-title">Uploaded Files</div>
                                <div class="list"></div>
                            </div>
                        </div>
                        <br>

                        <label> <strong> Upload Valid ID: </strong></label>
                        <input type = "file" name = "valid-ID"/>
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit" name = "submit-owner">Register</button>
                        <br> <br>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label" for="invalidCheck">
                                    Already have an account?
                                </label>
                                <label class="form-check-label" for="invalidCheck" style = "float: right;">
                                    Forgot Password
                                </label>
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

        <!-- Store Image -->
        <script> 
            const dragArea = document.querySelector('.drag-area')
            const listSection = document.querySelector('.list-section')
            const listContainer = document.querySelector('.list')
            const fileSelector = document.querySelector('.select')
            const fileSelectorInput = document.querySelector('.file-selector-input')

            fileSelector.onclick = () => fileSelectorInput.click()
            fileSelectorInput.onchange = () => {
                [...fileSelectorInput.files].forEach((file) => {
                    if(typeValidation(file.type)){
                        uploadFile(file)
                    }
                })
            }

            function typeValidation(type){
                var splitType = type.split('/')[0]
                    if(type == 'application/pdf' || splitType == 'image' || splitType == 'video'){
                        return true
                    }
            }

            function uploadFile(file){
                listSection.style.display = 'block'
                var li = document.createElement('li')
                    li.classList.add('in-prog')
                    li.innerHTML = `
                        <div class="col">
                            <img src="icons/${iconSelector(file.type)}" alt="">
                        </div>
                        <div class="col">
                            <div class="file-name">
                                <div class="name">${file.name}</div>
                                <span>0%</span>
                            </div>
                        <div class="file-progress">
                            <span></span>
                        </div>
                        <div class="file-size">${(file.size/(1024*1024)).toFixed(2)} MB</div>
                        </div>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="cross" height="20" width="20"><path d="m5.979 14.917-.854-.896 4-4.021-4-4.062.854-.896 4.042 4.062 4-4.062.854.896-4 4.062 4 4.021-.854.896-4-4.063Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="tick" height="20" width="20"><path d="m8.229 14.438-3.896-3.917 1.438-1.438 2.458 2.459 6-6L15.667 7Z"/></svg>
                        </div>
                        `

                listContainer.prepend(li)
                var http = new XMLHttpRequest()
                var data = new FormData()
                data.append('file', file)
                http.onload = () => {
                    li.classList.add('complete')
                    li.classList.remove('in-prog')
                }
                http.upload.onprogress = (e) => {
                    var percent_complete = (e.loaded / e.total)*100
                    li.querySelectorAll('span')[0].innerHTML = Math.round(percent_complete) + '%'
                    li.querySelectorAll('span')[1].style.width = percent_complete + '%'
                }
                http.open('POST', 'addOwner.php', true)
                http.send(data)
                li.querySelector('.cross').onclick = () => http.abort()
                http.onabort = () => li.remove()
            }

            function iconSelector(type){
            var splitType = (type.split('/')[0] == 'application') ? type.split('/')[1] : type.split('/')[0];
            return splitType + '.png'
            }
    
        </script>
    </body>
</html>