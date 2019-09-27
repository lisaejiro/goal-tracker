<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goal Tracker </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="bud">
    <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top" style="color:black;">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Eubouleus Goal Tracker</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav nar" >
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
           
          </ul>
        </div>
      </nav>
      
      <div class="container mt-4">
        <!-- <h2>Card Image</h2>
        <p>Image at the top (card-img-top):</p> -->
        <div class="card bg-light" style="width:400px">
          <img class="card-img-top" src="vectorpic.jpg" alt="Card image" style="height:200px; width:200px;border:1px solid black;border-radius:50%;margin:30px;margin-left: auto;margin-right: auto;">
          <div class="card-body">
            <h4 class="card-title"> Welcome <?php if(isset( $_SESSION['user'])){ echo  $_SESSION['user'];} ?></h4>
            <p class="card-text" style="font-family:cursive; font-size:25px;">It's a great day to Start a <strong>Goal!</strong></p>
            <a href="dashboard.php" class="btn btn-success">Set Goal</a>
          </div>
        </div>
</div>


      
      <div class="container-fluid" >
    <p class="text-center mt-4">&copy; 2019 | Team Eubouleus</p>
</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>