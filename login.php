<?php 
session_start();
 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IFOOD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
<link rel="icon" type="x-icon/image" href="logo2.jpg">
</head>

<body>

<!--Main Navigation-->
<header>


    <!--Navbar-->
<nav class="navbar navbar-light navbar-1 white">
<img src="logo2.jpg" width="50px" height="50px" >
    <!-- Navbar brand -->
   <?php if (!empty($_SESSION["name"])) {
     
  ?>
  <a href="#" class="ml-auto"><?php echo $_SESSION["name"]; ?></a>
  <a href="logout.php">Logout</a>
<?php }
else { ?>
  <img src="y2.png" class="ml-auto" style="height: 50px; width: 50px;" data-toggle="modal" data-target="#modal">
<?php } ?>
       <a href="cart1.html">
           <img src="download.png" style="height: 50px; width: 50px;">
        </a>
 		
    <!-- Collapse button -->
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
         <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
        <!-- Links -->

    </div>
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
<br><br>
<br>
<br>




<div class="row">
	<div class="col-md-6">
		
            <img class="text-center"  src="logo2.jpg" style="width: 100px; height: 100px;"><br><br><br>
          <h1>  DISCOVER FOOD DELIVER NEAR YOU</h1>
			<form class="form-inline mr-auto text-center" action="aa.htm" >
		  <input class="form-control mr-sm-2" type="text" placeholder="Enter Your Location" aria-label="Search" required="" style="width: 70%;">
		  <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
		</form>	
	</div>


	 <div class="col-md-6 container text-center">
	<video  autoplay="autoplay" loop="" height="80%" width="80%"><source src="header_animation-1a60210550.webm" type="video/webm"></video>
	</div>
</div>





<br>
<!-- Footer -->
<footer class="page-footer font-small grey pt-4">

    <div class="container text-center">
      <div class="row">
        
        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="text-uppercase">CONTENT</h5>
          
        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="text-uppercase">IFood</h5>
          
        </div>
          
      </div>
    </div>
    
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> ifood.com</a>
    </div>
  </footer>
  <!-- Footer -->
<div class="modal fade right" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">LOG IN </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

        
          <form method="POST" action="logged.php" >
          	
          	<input type="number" name="phone" placeholder="Phone number " id="Phone" required="" style="height: 60px; width: 200px;"><br><br>

          	<input type="password" name="password" placeholder="Password" id="Password" required="" style="height: 60px;width: 200px;"><br><br>
    
          	<button type="submit" class="btn btn-secondary" data-dismiss="modal" onsubmit="return validateForm()">LOG IN</button>
          	<br><br>

          	<a href="" >Forgot Password ??</a><br><br>
          	New User<button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#signup"onsubmit="return validateForm()">
  Sign Up
</button>
          </form>

        </div>
      
      </div>
    </div>
  </div>



<!-- Central Modal Small -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel1">REGISTER</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form  name="x" action="log11.php" method="POST">
         <input type="text " name="tt1" placeholder="Enter Name" id="t1" required=""><br><br>
        <input type="number" name="tt2" placeholder="Enter Phone number" id="t2" required=""><br><br>
        <input type="email" name="tt3" placeholder="enter email" id="t3" required=""><br><br>
        <input type="password" name="tt4" placeholder="enter password" id="t4" required=""><br><br>
        <input type="password" name="tt4" placeholder="re-enter password" id="t4" required=""><br><br>
        	<input type="submit" class="btn-sm btn-primary btn" name="" style="background-color: blue;">
    </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Central Modal Small -->


    
    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>

</body>
</html>
