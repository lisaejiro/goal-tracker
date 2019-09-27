<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Goal Tracker App</title>
  <!--fonts and icons-->
  <link rel="icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,w_16/v1569361565/icons8-target-100_e69oyy.png" type="img/x-icon">
  <link rel="stylesheet" type="text/css" href="css/index-style.css">
  <link rel="stylesheet" href="Fontawesome-all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
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
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item" style="color:black;">
                    <a class="nav-link" href="signup.php">Signup</a>
                  </li>
             <li class="nav-item" style="color:black;">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <!-- <li class="nav-item" style="color:black;">
                <a class="nav-link" href="../welcomePage/welcome.php">Welcome Page</a>
              </li> -->

           
          </ul>
        </div>
      </nav>
<!-- <div class="NavBar">
    <nav>
      <ul>
      <li><a href="../welcomePage/index.html">Welcome Page</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="../Signup/signup.html">Sign Up</a></li> 
      <li><a href="index.html">Home</a></li>
      </ul>
    </nav>
    
</div> -->

<div class="Main-body">
  
  <div class="firstline">Goal Setting made easier
  </div>
  <div class="secondline">Get organised and track anything you 
    want to build the perfect routine 
  </div>
  <div class="actionbutton">
      <form action="login.php">
      <input class="sign-up-btn" type="submit" name="sign-up" value="Start Now">
      </form>
  </div>
</div> 

<div class="footer" >
    <p>&copy; 2019 | Team Eubouleus</p>
</div>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>