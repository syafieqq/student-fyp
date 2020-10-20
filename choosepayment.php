




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	




	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">

	
</head>

<style>
body{
background-image:url('k.jpg');
background-repeat: no-repeat;
  background-size: 1700px 880px;
}
body:before{

  height:100%;
  display:inline-block;
  vertical-align:middle;
}

button{
  background:#DAA520;
  color:#fff;
  border:none;
  position:relative;
  height:43px;
  font-size:1.1em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
button:hover{
  background:#fff;
  color:#DAA520;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background:#FFDF00;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}
</style>

<body>

	<?php require('chunks/navbarafterloginn.php'); ?>


	
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
        <h1 style="text-align:center;font-size:34px; ">Choose Your Payment Method <div><br><img src="pay.png"alt="https://www.flaticon.com/authors/freepik" width="90px" height="90px" ></h1> 
		 
		 
		 <li><a href="choosepayment.php"><span ></span> 
        <br>
		
       <!-- PayPal Logo --><tr><td align="center"></td></tr><tr><td align="center"><a href="payypal.html" title="How PayPal Works" onclick="ci.php','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=90, height=70'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_payments_by_pp_2line.png" class="center" style="width:280px;height:80px;" alt="How PayPal Works" /></a></td></tr></table><!-- PayPal Logo -->
	   <br>
	   <!-- PayPal Logo --><tr><td align="center"></td></tr><tr><td align="center"><a href="bsn.php" title="How PayPal Works" onclick="cibsn.php','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=90, height=70'); return false;"><img src="bsn.gif" class="center" style="width:280px;height:80px;" alt="How PayPal Works" /></a></td></tr></table><!-- PayPal Logo -->
	   
	   

      </div>
      </div>
      
    </div>
    
</thead>

<br>


<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<?php 

}
?>
<tr>

<td></td>
</tr>
</table>
<br>

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
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

?>

    </body>
	
	
</html>