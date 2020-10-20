<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}

?><section class="fnavbar">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
				<img src="images/uc.jpg" alt="" width="314" height="64" />
		          
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
			  
			  
			  
			  
			  
		         <li><a href="homeadmin.php" class="hvr-grow">Home</a></li>
				
				
				  <li><a href="view.php" class="hvr-grow">View Product</a></li>
				  
				
				 <li><a href="insert.php" class="hvr-grow">Add Product</a></li>
				 <li><a href="viewtypepromotion.php" class="hvr-grow">View Type of Promotion</a></li>
				  <li><a href="viewpromotion.php" class="hvr-grow">View Promotion</a></li>
				 <li><a href="addpromo.php" class="hvr-grow">Add Promotion</a></li>
				 
				 
				
		       
		      <li><a href="adminview.php" class="hvr-grow">View User</a></li>
		      

				
				 <li><a href="indexx.php?logoutSubmit=1" class="hvr-grow">Logout</a></li>
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