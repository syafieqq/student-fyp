<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}

?><section class="fnavbar">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



</style>

		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
				
		          
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
			  
			  
			  

				
 <li><a href="adminview.php" class="hvr-grow">Maklumat Pelajar</a></li>

   <li><a href="viewcomment.php" class="hvr-grow">Maklum Balas Pelajar</a></li>
 
		       
		

				  
		        	
			  
			  
			   <li><a href="indexx.php"><span class="hvr-grow"></span> <div><img src="exit.svg"alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px" >
			  
              </a></li>
            
				
			
	
				  <style>
				  .nav-wrapper
				  {background-color: #0F6EB6;
					  }
				  .hvr-grow
					  {color: #0F6EB61;}
				  </style>

		        
		        
		      </ul>
	      </div>
		  </nav>
		</div>

	</section>