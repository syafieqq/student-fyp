
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
    $PRO_ID = $_GET['getid'];
    $query = " select * from promosi where PRO_ID='".$PRO_ID."'";
    $result = mysqli_query($conn,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {$PRO_ID= $row['PRO_ID'];
        $JPRO_ID= $row['JPRO_ID'];
        $JPRO_TRKMULA = $row['JPRO_TRKMULA'];
		$JPRO_TRKTAMAT = $row['JPRO_TRKTAMAT'];
		
      
    }
 
?>

 
        <div class="#img_div">  
 
                            <form action="updatepromo.php?PRO_ID=<?php echo $PRO_ID ?>" method="post">
							<input type="NUMBER"  placeholder=" Type of Promotion ID " name="JPRO_ID" value="<?php echo $JPRO_ID ?>">
                                <input type="DATE"  placeholder=" Start Date " name="JPRO_TRKMULA" value="<?php echo $JPRO_TRKMULA ?>">
								<input type="DATE"  placeholder=" End Date " name="JPRO_TRKTAMAT" value="<?php echo $JPRO_TRKTAMAT ?>">
							
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>
 
                       
    
</body>
</html>





