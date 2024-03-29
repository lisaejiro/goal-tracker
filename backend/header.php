<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goal Tracker Dashboard</title>
    <!-- <link rel="stylesheet" href="css/styletab.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sb-admin.css">
   <link rel="stylesheet" href="css/web/css/all.min.css">
   
   
    
</head>
<body id="page-top">

        <nav class="navbar navbar-expand navbar-light bg-light static-top">

                <a class="navbar-brand mr-1" href="index.html"> Eubouleus Goal Tracker</a>
            
                <button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle" href="#">
                  <i class="fas fa-bars"></i>
                </button>
            
                <!-- Navbar Search -->
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
            
                <!-- Navbar -->
                <ul class="navbar-nav ml-auto ml-md-0">
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell fa-fw"></i>
                            </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">Settings</a>
                      <a class="dropdown-item" href="#">Activity Log</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                  </li>
                </ul>
            
              </nav>

  
              <div id="wrapper">

                    <!-- Sidebar -->
                    <ul class="sidebar navbar-nav navbar-light bg-light">
                      <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                          <i class="fas fa-fw fa-tachometer-alt"></i>
                          <span>Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                            <a class="nav-link" href="view.php">
                                    <i class="fas fa-fw fa-tablet-alt"></i>
                                    <span>My Goals</span>
                                  </a>
                        
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="charts.html">
                          <i class="fas fa-fw fa-chart-area"></i>
                          <span>Settings</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="tables.html">
                                <i class="fas fa-fw fa-sign-out-alt"></i>
                          <span>Logout</span></a>
                      </li>
                    </ul>