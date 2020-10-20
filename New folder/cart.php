
<?php

$conn = mysqli_connect("localhost","root","","unclejack");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
<section class="fnavbar">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fnavbar {
  width: 110%;
  height: 400px;
  background-image:url('./images/j.jpeg');
  background-size: cover;
  
  
  
  
}


</style>
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
				<img src="images/uc.jpg" alt="" width="314" height="64" />
		          
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="indexx.php" class="hvr-grow">Home</a></li>
		       
		      
		        <li><a href="index.php" class="hvr-grow">Foods</a></li>
				
 <li><a href="aboutus.php" class="hvr-grow">About us</a></li>
 
 
		        <li><a href="login.php" class="hvr-grow">Profile</a></li>
				
				
				 <li><a href="userAccount.php?logoutSubmit=1" class="hvr-grow">Logout</a></li>
				 
				 
		        <li><a href="cart.php" class="hvr-grow"> <div><img src="images/cart.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" ></div></a></li>
				
			
	
				  <style>
				  .nav-wrapper
				  {background-color: gold;
					  }
				  .hvr-grow
					  {color:#010101;}
				  </style>

		        
		      </ul>
	      </div>
		  </nav>
		</div>

	</section>


<?php


session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      } 
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
   
}
?>

<br>
<center><p><font face = "courier" font size = "7" color = "darkgray">
           Shopping Cart
         </font>
      </p></center></center>



<div class="cart">


<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?> 
<br><br><br>
<table class="table" style="align:centre";>
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>DESCRIPTION</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>

</tr> 
<?php 
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td>
<img src='<?php echo $product["image"]; ?>' width="110" height="90" />
</td>
<td><?php echo $product["name"]; ?><br />

<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 10px;
  background-color: orangered;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
  
  
  
  
  
  
  
  

</style>
</head>
<body>



<button class="button" style="vertical-align:"><span>Remove </span></button>

</body>
</html>

<td><?php echo $product["description"]; ?><br />
</form>

</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />

<select name='quantity' class='quantity' onChange="this.form.submit()">

<option <?php if($product["quantity"]==1) echo "selected";?>
value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?>
value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?>
value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?>
value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?>
value="5">5</option>
</select>
</form>
</td>
<td><?php echo "RM ".$product["price"]; ?></td>


<td><?php echo "RM ".$product["price"]*$product["quantity"]; ?></td>
</tr>



<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>


<tr>
<td colspan="6" align="right">
<strong><center>TOTAL: <?php echo "RM ".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table> 



  <?php
}else{
 echo "<h3>Your cart is empty! </h3> ";
 }
?>


</div>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10
px 0px;">
<?php echo $status; ?>


</div>

	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
	
	</body>
</html>
<!DOCTYPE html>
<html>
   <head>
      
   </head>

   <body>
   <br>
   <br>


 <b><li><a href="aboutus.php" class="hvr-groww">MAKE ORDER</a></li></b>
 

     <style>
	 
	 
	.hvr-groww
	{width: 100%;
	 background-color: 			gold; /* Green */
 border: 1px solid black;
  color: 	#696969;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 0px 0px;
  cursor: pointer;}
      .img-container {
        text-align: center;
      }
	  
	  .hvr-groww:hover {
    background-color: #e8b923;
    color: white;
}
    </style>
	
	
	 <b><li><a href="aboutus.php" class="hvr-growww">Add more food</a></li></b>
     <style>
	 
	 
	.hvr-growww
	{width: 100%;
	 background-color: WHITE; /* Green */
  border: 1px solid black;
  COLOR-BORDER:BLACK;
  color:	#696969;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 6px 0px;
  cursor: pointer;}
      .img-container {
        text-align: center;
      }
	  	  .hvr-growww:hover {
    background-color: #d4af37;
    color: white;
}
    </style>
	
	
	
   </body>
</html>


 <BR>
 <BR>





 <div id="page-container">
   <div id="content-wrap">
    
   </div>
   <footer id="footer">
   <?php require('chunks/footer.php'); ?>
   
 
</div>
   
   
   
   
   
   </footer>
   
 </div>
 

 </style>
</body>

</html>

