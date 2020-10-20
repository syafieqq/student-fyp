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




<?php
session_start();
$username = $_SESSION["login_user2"];
if(!isset($_SESSION['username']))

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
		        
			  <li><a href="homestaff.php"><span class="hvr-grow"></span> <div><img src="house.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
			  
		       
				
 <li><a href="aboutusstaff.php" class="hvr-grow">About us</a></li>
 
 
					
       
				 <li><a href="insert.php" class="hvr-grow">Insert Product</a></li>
				
				
				   <li><a href="admin-map.php" class="hvr-grow">Confirm Order</a></li>	
				   
				  
				  <li><a href="staffview.php" class="hvr-grow">View Order</a></li>	

              
			  
			  <li><a href="viewcomment.php"><span class="hvr-grow"></span> <div><img src="call-center.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
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
	<body>

	





	<?php require('chunks/info-modal.php'); ?>


	





	<?php require('chunks/description.php'); ?>


	


	


	


	<?php require('chunks/services.php'); ?>



	<?php require('chunks/reviews.php'); ?>


	<?php require('chunks/footer.php'); ?>




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



</body>

</html>