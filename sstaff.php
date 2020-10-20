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
<br>

<?php
  $db = mysqli_connect("localhost", "root", "", "unclejack");
 
  $msg = "";
  if (isset($_POST['upload'])) {
  	
	
  	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
    
				
	

 
  	$sql = "INSERT INTO staff (username,password) VALUES ('$username','$password')";
  
	if(!mysqli_query($db,$sql)) 
{
    die('Error: ' . mysqli_error($db));
}

else
{

    echo '<script language="javascript">';
    echo 'alert("Successfully Insert the Data"); ';
    echo '</script>';
}   
 
  
  }
  $result = mysqli_query($db, "SELECT * FROM staff");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>The Perfect Food at Your Door!</title>

	

	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



<title>Image Upload</title>
<style type="text/css">
body{
	background-image:url("sabo.gif");
	background-repeat: no-repeat;

  background-size: 1700px 870px;
}
 
   #content{
   width: 50%;
   margin: 20px auto;
   border: 1px solid black;
   }
   form{
   width: 50%;
   margin: 20px auto;
   }
   form div{
   margin-top: 5px;
   }
   #img_div{
   width: 80%;
   padding: 5px;
   margin: 15px auto;
   border: 1px solid #cbcbcb;
	    background: #767272;
	   color: white;
   }
   #img_div:after{
   content: "";
   display: block;
   clear: both;

	  
   }

</style>
</head>
<body>


<br>
<br>
<br>
<br><br>
<br>
<div id="content">

  <form  method="POST"  action="sstaff.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	
  	
	   <div >
						<label style="color: black;font-size: 20px;" for="username">Nama Guru</label>
						<input type="text" name="username" placeholder="" required value=""/>
						<span>
					</div>
      <div >
						<label style="color: black;font-size: 20px;" for="password">Kata Laluan</label>
						<input type="password" name="password" placeholder="" required value=""/>
						<span>
					</div>

					
					
		
			
				
					
 
  	<div>
  
	   <a class="btn btn-primary" href="loginstaff.php">Log Masuk</a>
		<button class="btn btn-primary" type="submit" name="upload">Daftar Masuk</button>
  	</div>
  </form>
</div>


</body>
</html>