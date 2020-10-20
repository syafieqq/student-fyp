
<section class="fnavbar">

		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
				<img src="images/uc.jpg" alt="" width="314" height="64" />
		          
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
			    <li class="nav-item">
				
		 
		  
		        <li><a href="" class="hvr-grow">Home</a></li>
		       
		      
		        <li><a href="userAccount.php" class="hvr-grow">Foods</a></li>
 <li><a href="aboutusbeforelogin.php" class="hvr-grow">About us</a></li>
  <li><a href="loginmanager.php" class="hvr-grow">Login Manager</a></li>
  <li><a href="loginstaff.php" class="hvr-grow">Login Staff</a></li>
   <li><a href="loginadmin.php" class="hvr-grow">Login Admin</a></li>
    <li><a href="userAccount.php" class="hvr-grow">Login User</a></li>
  <li><a href="su.php" class="hvr-grow">Register?</a></li>

		       
		      
		 
				
				
				
 <form method="post">
     
	
 
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
	<html>
  <head>

</head>
<body> 
<style>
.slideshow > div {
    position: absolute;
    max-width: 100%;
    width: 100%;
    height: 240px;
    max-height: 100%;
}

.slideshow-container > div > img {
    height: 640px;
    width: 100%;
}
</style>
<div class="slideshow-container">

<div class="mySlides fade">
 
  <img src="home-deals.jpg" >
  
</div>

<div class="mySlides fade">
 
  <img src="menu.jpg"  >

</div>

<div class="mySlides fade">
 
  <img src="a.jpg">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>



  </head>
  