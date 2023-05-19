<?php
    $name = "James Aldrino"; /*try daw gikan sa table. Itudlo daw asa na table imo gina mean did2 sa website*/
    $message = "This is a message comming from the php"
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rentin Web Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="css/seekerUserProfile.css">
    <link rel="stylesheet" href="css/bootstrap3.3.7/bootstrap.min.css">

</head>

<body>
<div class="container"> 
<div class="col-md-12">  
    <div class="col-md-4">      
        <div class="portlet light profile-sidebar-portlet bordered">
            <div class="profile-userpic">
                <img src="images/user1.png" class="img-responsive" alt=""> </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> <?php echo"$name" ?> </div>
                <div class="profile-usertitle-job"> james.aldrin0@gmail.com </div>
            </div>
            <div class="profile-userbuttons">
                <button type="button" class="btn btn-info  btn-sm" href="index.php">Logout</button>
            </div>
            <div class="profile-usermenu">
            </div>
        </div>
    </div>
    <div class="col-md-8"> 
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase"><b>My Information</b></span>
                </div>
            </div>
            <div class="portlet-body">
                <div>
                
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li id="profileTab"  role="presentation" class="active"><a onclick="profileActive()" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li id="homeTab" role="presentation"><a onclick="homeActive()" aria-controls="home" role="tab" data-toggle="tab">Update</a></li>
                        <li id="historyTab"  role="presentation"><a onclick="historyActive()" aria-controls="messages" role="tab" data-toggle="tab">History</a></li>
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <form class="frm">
                              <div class="form-group">
                                <label for="inputName">First Name</label>
                                <h5>James</h5>
                              </div>
                                <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <h5>Aldrino</h5>
                              </div>
                              <div class="form-group">
                                <label for="inputLastName">Contact</label>
                                <h5>090876353</h5>
                              </div>
                              <div class="form-group">
                                <label for="inputLastName">Date of Birth</label>
                                <h5>April 17, 2001</h5>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <h5>james.aldrin0@gmail.com</h5>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <h5>secret</h5>
                              </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="home">
                            <form>
                              <div class="form-group">
                                <label for="inputName">First Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                              </div>
                                <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <label for="inputLastName">Contact</label>
                                <input type="text" class="form-control" id="inputContact" placeholder="Contact">
                              </div>
                              <div class="form-group">
                                <label for="inputLastName">Date of Birth</label>
                                <input type="date" class="form-control" id="inputBirthdate" placeholder="Birthdate">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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

                              <button type="submit" class="btn btn-default">Submit</button>
                              <button type="submit" class="btn btn-default">Cancel</button>
                            </form>
                        </div>
                        
                        
                        <div role="tabpanel" class="tab-pane" id="history"><?php echo"$message" ?> </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

    function profileActive() {
		removeActive();
        document.getElementById("profileTab").classList.add("active");
		document.getElementById("profile").classList.add("active");
    }

	function homeActive() {
		removeActive();
        document.getElementById("homeTab").classList.add("active");
		document.getElementById("home").classList.add("active");
	}

    function historyActive() {
		removeActive();
        document.getElementById("historyTab").classList.add("active");
		document.getElementById("history").classList.add("active");
	}

	
	function removeActive(){
        document.getElementById("profile").classList.remove("active");
		document.getElementById("home").classList.remove("active");
		document.getElementById("history").classList.remove("active");
        document.getElementById("homeTab").classList.remove("active");
		document.getElementById("profileTab").classList.remove("active");
		document.getElementById("historyTab").classList.remove("active");
	}

</script>

</body>
</html>
