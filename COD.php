
<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	


	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">
<BODY  background="k.jpg" ;>

</BODY>
	
</head>
<body>
<section class="fnavbar">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body{background-repeat: no-repeat;

  background-size: 1800px 900px;}
  


</style>
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
				<img src="images/uc.jpg" alt="" width="314" height="64" />
		          
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="indexxafterlogin.php"><span class="hvr-grow"></span> <div><img src="house.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
			  
		        <li><a href="index.php"><span class="hvr-grow"></span> <div><img src="fried-chicken.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
		     
				
 <li><a href="aboutus.php" class="hvr-grow">About us</a></li>
 
 
		       
				
				
				  <li><a href="profile.php"  class="hvr-grow"><span ></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
				  
				  <li><a href="vieworder.php" class="hvr-grow">Status</a></li>
		        	 <li><a href="cart.php"><span class="hvr-grow"></span> <div><img src="images/cartt.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" ><?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "";
              ?>
			  
			  <li><a href="contactus.php"><span class="hvr-grow"></span> <div><img src="call-center.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
			   <li><a href="indexx.php"><span class="hvr-grow"></span> <div><img src="exit.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
			  
		  </nav>
		</div>

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
header("location: indexlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

 

    

<?php
if(isset($_SESSION['login_user1'])){

?>


          
       
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
          
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> 
             <?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "";
              ?>
              </a></li>
        
          </ul>
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

<style>
h1 {text-align: center;

 font-size:25px; }
  
  
  h2 {text-align: center;

  }
  

</style>


<br>
<br>

     
		<br>
		<br>
		<br>
       
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

		
		<br>
		
<h1 class="text-center"> Thank you for Ordering at Uncle Jack Restaurant !!!</h1>
<h1>The ordering process is now complete.</h1>
<br>

<br>
<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h1 class="text-center"> <strong>Your Order Number:</strong> <span style="color: red;"><?php echo "$number"; ?></span> </h1>
<br>
<br>
<div class="wrapper">
  
	
	 <?php
		$batchid = $_GET['batchid'];
	 	$query = "update ORDERS set no_order = '".$number."' where batch_id = '".$batchid."'";
              $success = $conn->query($query);  
	 ?>
  
	 <a class="cta" href="user-map.php?batchid=<?= $batchid; ?>">
	 
    <span>Pick Your Location</span>
	
	 
    <span>
      <svg width="40px" height="26px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a>
</div>


        </body>

</html>











   <style>
@import url('https://fonts.googleapis.com/css?family=Poppins:900i');

* {
  box-sizing: border-box;
}

body {

  justify-content: center;
  align-items: center;
}

.wrapper {
  display: flex;
  justify-content: center;
}

.cta {
    display: flex;
    padding: 10px 40px;
    text-decoration: none;
    font-family: 'Poppins', ;
    font-size: 20px;
    color: white;
    background: #DAA520;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC638;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  span {
    transform: skewX(15deg) 
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

path.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #FBC638;
    }
    100% {
        fill: white;
    }
}
</style>


<script>
$(window).ready(function(){
$(".boton").wrapInner('<div class=botontext></div>');
    
    $(".botontext").clone().appendTo( $(".boton") );
    
    $(".boton").append('<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>');
    
    $(".twist").css("width", "25%").css("width", "+=3px");
});
</script>