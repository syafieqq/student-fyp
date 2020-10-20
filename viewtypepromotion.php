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
    $query = " select * from jns_promosi ";
    $result = mysqli_query($conn,$query);
 
?>
 <BR>
<BR>
<BR>
<!DOCTYPE html>
<html lang="en">
<head>
   <BR>
<BR>
<BR>
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
                                <td> Type of Promotion ID </td>
							
                                <td> Promotion Name </td>
								<td> Promotion Flag </td>	
								<td> Amount Needed to Get Promotion </td>									
                                <td> Delete </td>
                            </tr>
  </tr>
</thead>
             
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['JPRO_ID'];
										$JPRO_NAME = $row['JPRO_NAME'];
                                        $JPRO_FLAG = $row['JPRO_FLAG'];
										$JPRO_AMAUN = $row['JPRO_AMAUN'];
								
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
										
                                        <td><?php echo $JPRO_NAME ?></td>
                                        <td><?php echo $JPRO_FLAG ?></td>
										<td><?php echo $JPRO_AMAUN ?></td>
                                      
                                       
										
                                        <td><a href="deletepromotion.php?Del=<?php echo $id?>">Delete</a></td>
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
<BR>
<BR>
<BR>
<BR>
<BR>
<BR> <BR>
<BR>
<BR>
 <div id="page-container">
   <div id="content-wrap">
    
   </div>
   <footer id="footer">
     <img src="il.jpg"  style="width:1700px;height:280px;">
  
 
 </div>
 

 </style>
</body>

</html>