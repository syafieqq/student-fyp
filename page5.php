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

<!DOCTYPE html>
<html lang="en">
<head>
  

 <br> 
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br>
<style>

body {
  background-image: url("KOLAMMM.gif");
  background-repeat: no-repeat, repeat;
 background-size: 100% 770px;
 background-color:black;

  
}

.container{
    margin: 100;
    padding: 60;
    width: 190%;
   
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.glow-on-hover {
    width: 300px;
    height: 70px;
    border: BLACK;
    outline: BLACK;
    color: #0C0C01;
    background: #FFEF00;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 20px;

}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, BLACK, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, white);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: white
}

.glow-on-hover:active:after {
    background: white;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: 	#1FCBBF	;
    left: 0;
    top: 0;
    border-radius:20px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 800% 0; }
    100% { background-position: 0 0; }
}



</style>

   <div class="container">
  <li><a href="pelajar1.php"><span ></span> <button  style="margin:10px;" class="glow-on-hover" type="button">SUKU KATA TERBUKA</button>

  <li><a href="pelajar2.php"><span ></span> <button  style="margin:10px;" class="glow-on-hover" type="button">SUKU KATA TERBUKA DAN TERTUTUP</button>


</body>


</html> 
