<?php 
session_start();
$products = array("DAL BATI CHURMA", "KADI", "GATTE","RAITA","GATTE PULAV","METHI PORI");
$amounts = array("300", "100", "80","50","100","80");
if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;
   //remove item if quantity is zero
   if ($qty == 0) {
    $_SESSION["amounts"][$i] = 0;
    unset($_SESSION["cart"][$i]);
  }
 else
  {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  }
 }

 //Reset
 if ( isset($_GET['reset']) )
 {
 if ($_GET["reset"] == 'true')
   {
   unset($_SESSION["qty"]); //The quantity for each product
   unset($_SESSION["amounts"]); //The amount from each product
   unset($_SESSION["total"]); //The total cost
   unset($_SESSION["cart"]); //Which item has been chosen
   echo "<script>window.location.assign('aa.htm');</script>";
   }
 }

 //Load up session
 if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
   for ($i=0; $i< count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
  }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<video height="300" width="300" autoplay="" loop="" controls="">
<source src="header_animation-1a60210550.webm" type="video/webm"></video>
	<?php
 if ( isset($_SESSION["cart"]) ) {
 ?>
 <br/><br/><br/>
 <h2>Cart</h2>
 <table border="3" align="center" width="700px">
 <tr>
 <th>Product</th>
 <th width="10px">&nbsp;</th>
 <th>Qty</th>
 <th width="10px">&nbsp;</th>
 <th>Amount</th>
 <th width="10px">&nbsp;</th>
 <th>Action</th>
 </tr>
 <?php
 $total = 0;
 foreach ( $_SESSION["cart"] as $i ) {
 ?>
 <tr>
 <td><?php echo( $_SESSION["products"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
 </tr>
 <?php
 $total = $total + $_SESSION["amounts"][$i];
 }
 $_SESSION["total"] = $total;
 ?>
 <tr>
 <td colspan="6">Total : <?php echo($total); ?></td>
 <td><a href="?reset=true">Reset cart</a></td>
 </tr>
 </table>
 <?php
 }
 ?>

</body>
</html>


<video height="300" width="300" poster="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/images/header_animation_poster-4f02cb7cad.png" autoplay="" loop=""><source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-1a60210550.webm" type="video/webm"><source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4"></video>