<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}

?><section class="fnavbar">

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
			  
			  
			  
			  
			  
		         <li><a href="homeadmin.php" class="hvr-grow">Home</a></li>
				
				
				  <li><a href="view.php" class="hvr-grow">View Product</a></li>
				
				 <li><a href="insert.php" class="hvr-grow">Insert</a></li>
				
		       
		      <li><a href="adminview.php" class="hvr-grow">View User</a></li>
		      
 <li><a href="aboutusadmin.php" class="hvr-grow">About us</a></li>
 
 
		       
				 <li><a href="login.php" class="hvr-grow">Profile</a></li>
				
				
				 <li><a href="userAccount.php?logoutSubmit=1" class="hvr-grow">Logout</a></li>
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