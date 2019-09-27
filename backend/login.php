<?php

$err=$pass=$ema="";
if(isset($_POST['login'])){
  require("login_user.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Goal Tracker App</title>
  <link rel="stylesheet" type="text/css" href="css/index-style.css">
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
                    <a class="nav-link" href="signup.php">Signup</a>
                  </li>
             <li class="nav-item" style="color:black;">
              <a class="nav-link" href="login.php">Login</a>
            </li>

           
          </ul>
        </div>
      </nav>
<div class="Main-body">
  
  <div class="container">
  <div class="form">
    <h2>LOGIN</h2>
    <p>Fill in  your login details</p>

    <span style="color:red; font-size:20px"><?php echo $err; ?></span>

    <form action="login.php" method="POST" >

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
            <span style="color:red; font-size:15px"><?php echo $ema; ?></span>
          </div>
          <div class="form-group col-md-12">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
            <span style="color:red; font-size:15px"><?php echo $pass; ?></span>
          </div>
        </div>
        
      
        <button type="submit" class="btn btn-primary" name="login">Sign in</button>
      </form>

     <p >Don't have an account yet? <a href="signup.php"> Create one</a></p> 


  </div>
    

</div>

</div>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>