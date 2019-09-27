
<?php
require 'conn.php';


$pass=$password="";
$unam=$ema=$pass=$err= $_SESSION['sms']="";

if(isset($_POST['register'])){
    require("signup_user.php");
    }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign up</title>
    <!--fonts and icons-->
    <link rel="icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,w_16/v1569361565/icons8-target-100_e69oyy.png" type="img/x-icon">
    <link rel="stylesheet" href="Fontawesome-all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">  
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>

<body>

        <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top" style="color:black;">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Eubouleus Goal Tracker</a>
              
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar" style="color:black;">
                  <ul class="navbar-nav nar" >
                    <li class="nav-item" >
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="color:black;">
                            <a class="nav-link" href="#">Signup</a>
                          </li>
                     <li class="nav-item" style="color:black;">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>

                   
                  </ul>
                </div>
              </nav>
    
    

    <div class="row">
      <div class="col-md-6 mt-2">
        <div class="form-class">
          <h2>Create account</h2>
          
			   	 
			<?php if(isset($_SESSION['sms'])){
				echo $_SESSION['sms'];
				}?>
			 

          <form action="signup.php" method="POST"  >
              <div class="form-group">
                <label for="uname">Full name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" >
                <!-- <div class="valid-feedback">Valid.</div> -->
                <span style="color:red; font-size:15px;"><?php echo $unam; ?></span>

                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
              </div>
              <div class="form-group">
                      <label for="uname">Email:</label>
                      <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email" >
                      <!-- <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div> -->
                      <span style="color:red; font-size:15px;"><?php echo $ema; ?></span>

                    </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                <span style="color:red; font-size:15px;"><?php echo $pass; ?></span>

              </div>

              <div class="form-group">
                      <label for="pwd">Confirm Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pass">
                      <span style="color:red; font-size:15px;"><?php echo $err; ?></span>

                    </div>
              
              <button type="submit" name="register" class="btn btn-primary">Sign up</button>
            </form>
            
            <script>
            // Disable form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
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
  
            <p >Already have an account? <a href="login.php">Login</a></p>
   

  </div>
</div>
      <div class="col-md-6">
        <h3 class="text">
          BIG THINGS HAPPEN ONE DAY AT A TIME.
        </h3>
      </div>
    </div>

    
    <!-- <footer>
        <div class="footer">
            <p>&copy; 2019 | Team Eubouleus</p>
        </div>
    </footer> -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php unset($_SESSION['sms'])?>