<?php session_start();
#cart.php - A simple shopping cart with add to cart, and remove links
 //---------------------------
 //initialize sessions

//Define the products and cost
$images = array("dhokla.jpg", "fafda.jpg", "thpla.jpg","patra.jpg","gsrikhand.jpg");
$products = array("KHAMAN DHOKLA", "FAFDA", "THEPLA","PATRA","shrikhand");
$amounts = array("300", "100", "80","50","100","80","200","150","50");
$amount = array("Rs 15-/ per piece", "Rs 40-/ per plate", "Rs 20-/ per plate","Rs 30-/ per plate","Rs 100-/ per cup");

 //---------------------------
 //Add
 if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
    $_SESSION["products"][$i] = $products[$i];
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RAJASTHANI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

  

</head>

<body>

<!--Main Navigation-->
<header>

<!--Navbar-->
<nav class="navbar navbar-light navbar-1 white">
<a href="login.htm"><img src="logo2.jpg" height="50px" width="50px"></a>
    <!-- Navbar brand -->
    

   <a href="cart.php" class="ml-auto">
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


</header>
<!--Main Navigation-->

<div class="container" style="margin-top:100px;text-align:center;color: #007bff;">
<h2>RAJASTHANI</h2><hr><br>
</div>

<!-- Cards Portal -->
<div class="row container text-center" style="margin:auto;">
    <?php
 for ($i=0; $i< count($products); $i++) {
   ?>
    <div  class="col-md-4 ">
        <div>
            <br><img src="<?php echo($images[$i]); ?>" style="width: 230px;height:170px;background-color:lightgrey;"><br><br>
            <p style="font-size:20px;font-weight:bolder;color:#007bff;"><?php echo($products[$i]); ?></p>
            <p style="font-size:18px;color:black;"><?php echo($amount[$i]); ?>/-</p>
            <p style="font-size:18px;color:black;">10:00 am - 8:00 pm</p>
            <a href="?add=<?php echo($i); ?>"><p class="btn btn-info" style="font-size:15px;font-weight:bolder;padding:5px 15px;">Order Now</p></a><br><br><hr>
        </div>
    </div>
        <?php } ?>
</div>
<!-- Cards Portal -->

<!-- Footer -->
<footer class="page-footer font-small grey pt-4">

      <div class="row">
        
        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="text-uppercase">IFOOD</h5>
                  </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="text-uppercase">IFOOD</h5>
          
        </div>
    <div class="container text-center">
          
      </div>
    </div>
    
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> ifood.com</a>
    </div>

  </footer>
  <!-- Footer -->
    
    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>
