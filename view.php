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

	<link rel="stylesheet" href="css/style.css">

<title>Image Upload</title>
<style type="text/css">
body{
	
	background-repeat: no-repeat;

  background-size: 1700px 770px;
}
 
   #content{
   width: 50%;
   margin: 20px auto;
   border: 1px solid #cbcbcb;
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
<?php require('chunks/navbarn.php'); ?>
<?php 
 
    require_once("connect.php");
    $query = " select * from products ";
    $result = mysqli_query($conn,$query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
 
        <table>
		    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
            
                        <table class="table table-bordered">
                            <tr>
                                <td> Products ID </td>
                                <td> Product Name </td>
								<td> Product Description </td>				
                                <td> Product Code </td>
                                <td> Product Price </td>
                                <td> Product Image </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
  </tr>
</thead>
             
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['F_ID'];
                                        $name = $row['name'];
										$description = $row['description'];
									    $code = $row['code'];
                                        $price = $row['price'];
										$image = $row['image'];
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $description ?></td>
                                        <td><?php echo $code ?></td>
										<td><?php echo $price ?></td>
										<td><img src="<?php echo $row["image"]; ?>" class="img-responsive" width="200" height="150" /><br /></td>  
                                        <td><a href="edit.php?getid=<?php echo $id ?>">Edit</a></td>
										
                                        <td><a href="delete.php?Del=<?php echo $id?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                  							  
 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>


<!DOCTYPE html>

<html>
 <head>
  
  
 </head>

<body>

 <div id="page-container">
   <div id="content-wrap">
    
   </div>
   <footer id="footer">
     <img src="il.jpg"  style="width:1700px;height:280px;">
  
 
 </div>
 

 </style>
</body>

</html>