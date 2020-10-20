
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
 <BR>
<BR>
<BR>
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
    $JPRO_ID = $_GET['getid'];
    $query = " select * from jns_promosi where JPRO_ID='".$JPRO_ID."'";
    $result = mysqli_query($conn,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {
      
        $JPRO_NAME = $row['JPRO_NAME'];
		$JPRO_FLAG = $row['JPRO_FLAG'];
		$JPRO_AMAUN= $row['JPRO_AMAUN'];
		
      
    }
 
?>

 
        <div class="#img_div">  
 
                            <form action="updatetypepromotion.php?JPRO_ID=<?php echo $JPRO_ID ?>" method="post">
							
                                <input type="TEXT"  placeholder=" Promotion Name " name="JPRO_NAME" value="<?php echo $JPRO_NAME ?>">
								<input type="NUMBER"  placeholder=" Promotion Flag " name="JPRO_FLAG" value="<?php echo $JPRO_FLAG ?>">
											<input type="NUMBER"  placeholder=" Amount Needed to Get Promotion " name="JPRO_AMAUN" value="<?php echo $JPRO_AMAUN ?>">
							
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>
 
                       
    
</body>
</html>





