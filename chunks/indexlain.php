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
			  
			  
			  
			  
						
 <li><a href="index.php" class="hvr-grow"><img src="home.svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" ></li></a>	
	
		     
				
 <li><a href="page5.php" class="hvr-grow"><img src="student.svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" ></li></a>	
	</a></li>
 				
 <li><a href="https://drive.google.com/drive/folders/1UqXuLrVUG6rVgxHE6YtqdKeGvjjg4tOU?usp=sharing" class="hvr-grow"><img src="open-book (1).svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" ></li></a>	
	</a></li>
 				</a></li>
 
   <li><a href="quiz.php" class="hvr-grow"><img src="	game-pad
				.svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" ></li></a>	
	</a></li>
   <li><a href="contactus.php" class="hvr-grow"><img src="messages.svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" > </a></li>
			
				  <li><a href="profile.php"><span class="hvr-grow"></span><img src="hand.svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" > <?php echo $_SESSION['login_user2']; ?> </a></li>
				  
			

				  
		        	
			  
			  
			   <li><a href="indexx.php"><span class="hvr-grow"></span> <div><img src="log-out.svg"alt="https://www.flaticon.com/authors/freepik" width="40px" height="40px" >
			  
              </a></li>
            
				
			
	
				  <style>
				  .nav-wrapper
				  {background-color:#0F6EB6;
				   text-align: center;
  padding: 14px 16px;
					  }
				  .hvr-grow
					  {color: #0F6EB61;}
				  </style>

		        
		        
		      </ul>
	      </div>
		  </nav>
		</div>

	</section>