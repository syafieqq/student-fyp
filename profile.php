

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
.button {
  background-color:#DAA520;
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

</style>
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



<br>
<br>
<br>
<br>
<br>
<br>

<?php

if(!isset($_SESSION['login_user2'])){
header("location:: indexlogin.php"); 
}
extract($_REQUEST);
include("connection.php");
$gtotal=array();
$ar=array();
$total=0;

 if(isset($_SESSION['login_user2']))
 {
 $login_user2=$_SESSION['login_user2'];
 
$conn = Connect();

$sql = "select * from users where username='$login_user2'";
$result = mysqli_query($conn, $sql); }



 
 
 //update section
  $cust_details=mysqli_query($conn,"select * from users where username='$login_user2'");
  $det_res=mysqli_fetch_array($cust_details);
 
  $username=$det_res['username'];
   
  $address=$det_res['address'];
  $city=$det_res['city'];

  $mobile=$det_res['mobile'];
  $fld_password=$det_res['password'];
  if(isset($update))
  {
	   
	 if(mysqli_query($conn,"update users set username='$username',address='$add',city='$c',mobile='$mob',password='$pswd' where username='$username'"))
      {
	   header("location:customerupdatee.php");
	  }
  }
  

  
?>
<BR><BR><BR><BR>
<br>
	
			<!--tab 2 starts-->
            <div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="manageaccount-tab">
			    <div id="content">
				
				<form method="post" enctype="multipart/form-data">
                   
					
					
					
				
					<div class="form-group"  style="font-size: 25px;">
                      <label style="color: black;font-size: 20px;" for="username">Nama Pelajar :</label>
                      <input  type="text" id="username" name="username" value="<?php if(isset($username)){ echo $username;}?>" class="form-control"  readonly/>
                    </div>
					
					
					<div class="form-group">
                      <label style="color: black;font-size: 20px;" for="add">Kelas :</label>
                      <input  type="text" id="add" value="<?php if(isset($address)){ echo $address;}?>" class="form-control" name="add" required="required"/>
                    </div>
					
						<div class="form-group">
                      <label style="color: black;font-size: 20px;" for="c">Nama Guru :</label>
                      <input type="text" id="c" value="<?php if(isset($city)){ echo $city;}?>" class="form-control" name="c" required="required"/>
                    </div>
					
					
						
					<div class="form-group">
                      <label style="color: black;font-size: 20px;" for="mob">Nombor Telefon Ibu Bapa/Penjaga :</label>
                      <input type="text" id="mob" value="<?php if(isset($mobile)){ echo $mobile;}?>" class="form-control" name="mob" required="required"/>
                    </div>
					
                   <div class="form-group">
                      <label style="color: black;font-size: 20px;" for="pwd">Kata Laluan :</label>
                     <input type="password" name="pswd" value="<?php if(isset($fld_password)) { echo $fld_password; }?>"class="form-control"  id="pwd" required/>
                   </div>
				   
				   <br>
 
                  <button type="submit" name="update"  class="button button2">Kemaskini</button>
                  <div><?php if(isset($ermsg)) { echo $ermsg; }?><?php if(isset($ermsg2)) { echo $ermsg2; }?></div>
			 </form>
			</div>
			<!--tab 2 ends-->
			 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>EJA</title>

	



<title>Image Upload</title>

<style type="text/css">


body{
	background-image:url("maklumatanda.gif");
	background-repeat: no-repeat;

  background-size: 1700px 1020px;
}
 
   #content{
   width: 50%;
   margin: 20px auto;
   border: 1px solid black;
   }
   form{
   width: 60%;
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

	  
   }body:before{

  height:100%;
  display:inline-block;
  vertical-align:middle;
}

button{
  background:#DAA520;
  color:#fff;
  border:none;
  position:relative;
  height:43px;
  font-size:1.1em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
button:hover{
  background:#fff;
  color:#DAA520;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background:#FFDF00;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}

</style>
</head>


</body>
</html>


<body>

 <div id="page-container">
   <div id="content-wrap">
    
   </div>

 
 </div>
 

 </style>
</body>

</html>