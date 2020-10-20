




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	

 <img src="bsnheader.png" id="icon" alt="User Icon" style="width:100%;height:170px;"/>

 
	<!DOCTYPE html>
<html>
<head>
<style>
.container { 
  height: 100px;
  position: relative;
 
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>


<div class="container">
  <div class="center">
 
	 <a href="ci.php" class="button">Confirm Payment</a>
  </div>
</div>

</body>
</html>

</head>



<body>

	<?php require('chunks/navbarafterloginna.php'); ?>


	

</html>
	</section>
<?php
if(isset($_SESSION['login_user1'])){

?>


<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
      
          
            
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
 
	  
	  <br>
	  <br>
	   <br>
   
<style>


.container{
	
	display: block;
  margin-left: auto;
  margin-right: auto;
 
  display: flex;
  justify-content: center;
  align-items: center;}

</style>
		 
		
     <div class="container">
<table >
  <thead>
<tr>
<th >Food Name</th>
<br>
<th >Quantity</th>
<th >Price Details</th>
<th>Order Total</th>
</div>
</tr>
</thead>

<br>
<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><br><?php echo $values["food_name"]; ?></td>

<td><?php echo $values["food_quantity"] ?></td>
<td>RM<?php echo $values["food_price"]; ?></td>
<td>RM<?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>

</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="2" align="right">Total</td>
<td align="right">RM<?php echo number_format($total, 2); ?></td>

</body>					
					
					
				
					
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

