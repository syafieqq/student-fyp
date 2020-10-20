<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}

?>

<?php
include_once 'header.php';

$username = $_SESSION["login_user2"];
//get_unconfirmed_locations();exit;
?><section class="fnavbar">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

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
			  
              </a></li>
            
				
			
	
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
	</section>