<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EJA</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>



	<?php require('chunks/indexlain.php'); ?>
	<img src="SUNGGUH.gif" alt="Girl in a jacket" width="100%" height="100%">





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
<?php


if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}

?>

<br>
<br>
<br>

  <li><a href="page3.php"><span ></span> <div><img src="bulan-removebg-preview.png"alt="https://www.flaticon.com/authors/freepik" width="370px" height="370px" class="column">
  
 <img src="1-removebg-preview.png"alt="https://www.flaticon.com/authors/freepik" width="300px" height="100px" class="column">
    <li><a href="test1.php"><span></span> <div><img src="ss.png"alt="https://www.flaticon.com/authors/freepik"width="370px" height="370px" class="column">
	<img src="2-removebg-preview.png"alt="https://www.flaticon.com/authors/freepik" width="300px" height="100px" class="column">
	  <li><a href="hurufkonsonan.php"><span ></span> <div><img src="roket-removebg-preview.png"alt="https://www.flaticon.com/authors/freepik" width="370px" height="370px" class="column" >
	  
	  <img src="3-removebg-preview.png"alt="https://www.flaticon.com/authors/freepik" width="390px" height="140px" class="column">
	  
	  
	<br>
	<br>

			<style>
@import url('https://fonts.googleapis.com/css?family=Amatic+SC');



.button_container {
	position: absolute;
  left: 80px;
  right: 0%;
  top: 80%;
}

.column {

 display: block;
  margin: 0 auto;
 
}

</style>	
			
	
   <style>
   
   .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 
}
  .nav-wrapper
  {background-color: #357EC7;
  }
  .hvr-grow
  {color: white;}
					  
 .card {
 
  max-width: 290px;
  margin: 15px;
  text-align: center;
  font-family: arial;
  float:left;

 


  
}

.price {
  color: black;
  font-size: 22px;
  font-family: 'Amatic SC', cursive;
}

.description {
  color: grey;
  font-size: 16px;
  font-family: 'Amatic SC', cursive;
}

.quantity {
  color: black;
  font-size: 18px;
  font-family: 'Amatic SC', cursive;
}

.name {
  color: black;
  font-size: 22px;
  font-family: 'Amatic SC', cursive;
  
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

body {
 background-image: url("SABARR.gif");
 background-color: #cccccc;
}
				  </style>

		        
		      </ul>
	      </div>
		  </nav>
		</div>

	</section>



<html>



<?php
if(isset($_SESSION['login_user1'])){

?>

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

  

      </div>
      </div>
      <div class="item">
     
      <div class="carousel-caption">
      </div>
      </div>
    

  <div class="container">
         
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>




<div class="container" style="width:100%;">

<!-- Display all Food from food table -->


 


<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>


<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

 

  <?php

}

?>

   
</body>
</html>


<!DOCTYPE html>

<html>
 <head>
  
  
 </head>

<body>

 <div id="page-container">
   <div id="content-wrap">
    
   </div>
   <footer id="footer">
   <?php require('chunks/footer.php'); ?></footer>
   
 </div>
 

 </style>
</body>

</html>