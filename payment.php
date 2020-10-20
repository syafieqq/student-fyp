

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	


<style>
body{background-repeat: no-repeat;

  background-size: 1800px 820px;}
  
  .button {
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button {
  background-color: #DAA520; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>


  
</HEAD>
<BODY  background="k.jpg" ;>
<link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
</BODY>
</HTML>
	

	




	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>

	<?php require('chunks/navbarafterloginn.php'); ?>


	
</body>
</html>
	</section>

				 
				 

				
			
	
   <style>
  .nav-wrapper
  {background-color: gold;
  }
  .hvr-grow
  {color:#010101;}
					  
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: black;
  font-size: 22px;
}

.description {
  color: grey;
  font-size: 16px;
}

.quantity {
  color: black;
  font-size: 18px;
}

.name {
  color: black;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.btn-float {
        right: 50px;
        bottom: 50px;
        position: fixed;
    }
				  </style>

		        
		      </ul>
	      </div>
		  </nav>
		</div>

	</section>


<html>


<?php

require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>








<?php
if(isset($_SESSION['login_user1'])){

?>
           
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
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
 //get batch id
 $queryID = "SELECT MAX(batch_id) id FROM ORDERS";
 $result = mysqli_query($conn, $queryID);
 while($row = mysqli_fetch_array($result))  
{
	$batchid = $row['id'];
}
 $batchid++;
 
$gtotal = 0;
$queryPromo = "SELECT a.pro_id pro_id, a.F_ID F_ID, a.JPRO_ID JPRO_ID, b.name name, b.price price FROM promosi a, products b WHERE  a.F_ID = b.F_ID and CURDATE() between a.JPRO_TRKMULA AND a.JPRO_TRKTAMAT";
	$result = mysqli_query($conn, $queryPromo);
	while($row = mysqli_fetch_array($result))  
	{
		$food_id = $row['F_ID'];
		$pro_id = $row['pro_id'];
		$JPRO_ID = $row['JPRO_ID'];
		$p_foodname = $row['name'];
		$p_price = $row['price'];
		
	}
 
 
?>
        <?php
      
  foreach($_SESSION["cart"] as $keys => $values)
  {

    
    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
  
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    $status='Pending';
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (batch_id,F_ID,foodname,price,quantity,order_date,username,gtotal,total,status) 
              VALUES ('" . $batchid . "','" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $gtotal . "','" . $total . "','" . $status . "')";
     //echo $query; die();         

              $success = $conn->query($query);         
	
	// 1 Jun

	if($F_ID == $food_id)
	{
		 $queryclientpromo = "INSERT INTO CLIENT_PROMO (username,pro_id,cpro_bil_item) 
				  VALUES ('" . $username . "','" . $pro_id . "','" . $quantity . "')";

				  $success = $conn->query($queryclientpromo);   
	}
  }
  //jenis promoSI
	
          
 //30 May
   $queryPromoBil = "select jpro_name, jpro_flag, jpro_amaun from jns_promosi where JPRO_ID = '".$JPRO_ID."'";
  $result = mysqli_query($conn, $queryPromoBil);
	while($row = mysqli_fetch_array($result))  
	{
		$jpro_name = $row['jpro_name'];
		$jpro_flag = $row['jpro_flag'];
		$jpro_amaun = $row['jpro_amaun'];
		
	}
	
	if ($jpro_flag == 1) { // free buy
	  $queryBil = "select sum(cpro_bil_item) bil
	  from    CLIENT_PROMO
	  where   username = '".$username."'
	  and     cpro_flag = 'T'";
	  $result = mysqli_query($conn, $queryBil);
		while($row = mysqli_fetch_array($result))  
		{
			$bil = $row['bil'];
		}
		$freeitem = floor($bil / $jpro_amaun);
		
		if($freeitem >= 1){
			$query = "INSERT INTO ORDERS (batch_id,F_ID,foodname,price,quantity,order_date,username,gtotal,total) 
              VALUES ('" . $batchid . "','" . $food_id . "','" . $p_foodname . "','" . $p_price . "','" . $freeitem . "','" . $order_date . "','" . $username . "','0','0')";
              $success = $conn->query($query); 
			
			$query = "update CLIENT_PROMO set cpro_flag = 'Y' where username = '".$username."' and pro_id = '".$pro_id."' and cpro_flag = 'T'";
              $success = $conn->query($query); 
			
			$freebalitem = $bil % $jpro_amaun;
			if ($freebalitem >= 1){
				$queryclientpromo = "INSERT INTO CLIENT_PROMO (username,pro_id,cpro_bil_item) 
				  VALUES ('" . $username . "','" . $pro_id . "','" . $freebalitem . "')";

				  $success = $conn->query($queryclientpromo);   
			}
			$message = $p_foodname." free sebanyak ".$freeitem;
		}else{
			$freeitem = $jpro_amaun - $bil;
			$message = $p_foodname." dalam promosi ".$jpro_name.". Anda masih tidak cukup ".$freeitem;
		}
		
	}

/*
if ($JPRO_ID==1) {
  $JPRO_NAME="BUY 2 FREE 1";

}

else if($JPRO_ID==2) {
  $JPRO_NAME="DISKAUN 5%";
}

else IF($JPRO_ID==3) {
  $JPRO_NAME="FIX DISKAUN";
}
*/









        ?>
        
       
         
          </div>
        </div>
        <br>
		

<html>
<head>
<style>
h1 {text-align: center;
font-size: 35px;
  }

</style>
</head>

<body>


</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>

<h1>Grand Total: RM<?php echo "$gtotal"+2; ?></h1>
<h1>Including RM 2 DELIVERY CHARGE</h1>
<h1><?php echo $message; ?></h1>
<br>
<h1 class="text-center">


 
  
  <a href="user-map.php?batchid=<?= $batchid; ?>"><button class="button button2"><span class="glyphicon glyphicon-"></span> Choose Location </button></a>
  
   

</h1>
        


<br><br><br><br><br><br>
        </body>
</html>

