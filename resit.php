




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	




	

	<link rel="stylesheet" href="css/style.css">
	
</head>



<body>

	<?php require('chunks/navbarafterloginna.php'); ?>


	
</body>
</html>
	</section>
<?php
if(isset($_SESSION['login_user1'])){

?>


<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
         
            <li class="active" ><a href="index.php"><span class="glyphicon glyphicon-shopping-cart"></span>
          
            
  <?php        
}
else {

  ?>


<?php
}
?>


        </div>

      </div>
    </nav>

    
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
     
       <div class="container">
      <div >
	  
	  <br>
	  <br>
	   <br>
    <img src="paypalllogo.png"  alt="Italian Trulli" class="center" style="width:300px;height:150px;" >
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 
  
}
</style>
		 
		 
		 <li><a href="cart.php"><span class="hvr-grow"></span> 
        
        
      </div>
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Payment ID</th>
<th width="40%">Food Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>

</tr>
</thead>

<br>
<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["food_id"]; ?></td>
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>RM<?php echo $values["food_price"]; ?></td>
<td>RM<?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
</tr>
<td colspan="4" align="right">Delivery Charge</td>
<td align="right">RM2.00
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>

<td colspan="4" align="right">Total</td>
<td align="right">RM<?php echo number_format($total+2, 2); ?></td>
<td></td>
</tr>
</table>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="" href=""/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"">
<!--===============================================================================================-->

<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilpaypal.css">
	<link rel="stylesheet" type="text/css" href="css/mainpaypal.css">
<!--===============================================================================================-->
</head>
<body>
<br>

<style>


</style>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					
					
					
					<div class="container-login100-form-btn m-t-17">
					<a class="login100-form-btn" href="index.php">Confirm Payment</a>
					
					</div>

					<div class="w-full text-center p-t-55">
					
					</div>
				</form>
			</div>
		</div>
	</div>
	
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_R_ID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'F_ID' => $_POST["hidden_f_ID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}





?>
<?php

?>

    </body>
	
	
</html>