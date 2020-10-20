

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

	


		       <?php require('chunks/navbar.php'); ?>

				 
				 
		       
			
	
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


<?php


session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      } 
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
   
}
?>

<br>
<center><p><font face = "courier" font size = "7" color = "darkgray">
           About Us
         </font>
      </p></center></center>

<center><p><font face = "courier" font size = "4" color = "black">
          The Uncle Jack Restaurant serves traditionally prepared steamed, roasted, honey barbecued and soy sauce chicken as its signature products. These signature dishes are served with fluffy chicken flavoured rice cooked to perfection from a recipe passed down through the generations, originating from Hainan Island.
         </font>
      </p></center></center>
	  <center><p><font face = "courier" font size = "4" color = "black">
     Yet, staying true to our promise of 'Chicken Rice...and More', our menu also features more than 5 other local favourites.
         </font>
      </p></center></center>
	   <center><p><font face = "courier" font size = "4" color = "black">
    Our R&D team has continuously over the years introduced innovative dishes to give our guests a wide selection of delectable local dishes and to ensure that they enjoy a memorable dining experience at The Uncle Jack Restaurant every time. Innovative products for special festive occasions such as Hari Raya Puasa, Chinese New Year, Deepavali and Christmas are also introduced to celebrate the respective Malaysian festivities.
         </font>
      </p></center></center>


<!DOCTYPE html>
<html>
   <head>
      
   </head>

   <body>
   <br>
  
   
     <style>
      .img-container {
        text-align: center;
      }
    </style>
	<center><p><font face = "courier" font size = "7" color = "darkgray">
          Find Our Restaurant
         </font>
      </p></center></center>
	  
	<!--Google map-->
<div id="map-container-google-1"  style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=uncle jack kuala terengganu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
  
    style="  width: 100%;
    height: 500px;
    border-radius: 0px;
    margin: 0px auto;" allowfullscreen></iframe>
</div>
<br>
<br>
<br>
<center><p><font face = "courier" font size = "7" color = "darkgray">
          Our Restaurant
         </font>
      </p></center></center>






<div>
  <img src="unclejack3.jpg" alt="Denim Jeans" style="width:100%">
   <img src="unclejack5.jpg" alt="Denim Jeans" style="width:100%">
  
 
 
 
</div>


<br>
<br>
<br>
	<div class="img-container">
      <img src="klkl.webp" alt="Simply Easy Learning" width="700"
         height="200">
   </body>
</html>

<!DOCTYPE html>

<html>
 <head>
   <link rel="stylesheet" type="text/css" href="chunks/main.css" />
  
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
