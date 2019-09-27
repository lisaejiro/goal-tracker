<?php
include('header.php');
?>


<div class="container-fluid mt-5">

<div class="clearfix mb-5">
  <a href="" class="btn btn-primary btn-sm float-right">Add Goal</a>
</div>
  
<ul class="nav nav-pills bg-light" role="tablist">
<li class="nav-item">
      <a class="nav-link" >My Goals</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Completed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">On going</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">In Active</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>









<footer class="sticky-footer mt-5">
                        <div class="container my-auto">
                          <div class="copyright text-center my-auto">
                            <span>Copyright © Team Eubouleus Goal Tracker 2019</span>
                          </div>
                        </div>
                      </footer>
                
                    </div>
                    <!-- /.content-wrapper -->
                
                  </div>







    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>