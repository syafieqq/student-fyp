
<!DOCTYPE html>
<html>

<head>


<meta charset="UTF-8">
	<title>The Perfect Food at Your Door!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php require('chunks/navbarn.php'); ?>

<title>Image Upload</title>
<style type="text/css">
body{
	background-image:url("Inkedba_LI.jpg");
	background-repeat: no-repeat;

  background-size: 1700px 870px;
   
}
 
   #content{
   width: 70%;
   margin: 50px auto;
   border: 1px solid #cbcbcb;
   }
   form{
   width: 50%;
   margin: 80px auto;
   }
   form div{
   margin-top: 10px;
   }
   #img_div{
   width: 100%;
   padding: 50px;
   margin: 40px auto;
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


<?php 

require_once("connect.php");
    $F_ID = $_GET['getid'];
    $query = " select * from products where F_ID='".$F_ID."'";
    $result = mysqli_query($conn,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {
        $F_ID= $row['F_ID'];
        $name = $row['name'];
		$description = $row['description'];
		$code = $row['code'];
        $price = $row['price'];
		$image = $row['image'];
      
    }
 
?>

 
        <div class="#img_div">  
 
                            <form action="update.php?F_ID=<?php echo $F_ID ?>" method="post">
                                <input type="text"  placeholder=" Product Name " name="name" value="<?php echo $name ?>">
								<input type="text"  placeholder=" Product Description " name="description" value="<?php echo $description ?>">
								<input type="text"  placeholder=" Product Code " name="code" value="<?php echo $code ?>">
                                <input type="price"  placeholder=" Product Price " name="price" value="<?php echo $price ?>">
                                <input type="img"  placeholder=" Product Image " name="image" value="<?php echo $image ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>
 
                <BR>       
    
</body>
</html>





