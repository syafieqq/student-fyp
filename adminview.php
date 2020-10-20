<!DOCTYPE html>
<html>
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

<title>Image Upload</title>
<style type="text/css">
body{
	background-image:url("");
	background-repeat: no-repeat;

  background-size: 1700px 870px;
}
 
   

</style>
</head>
<body>
<?php require('chunks/indexlainnn.php'); ?>
<?php 
 
    require_once("connection.php");
    $conn = Connect();

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
 
?>
 <BR>
 <BR>
 <BR>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>View Records</title>
</head>
<body class="bg-dark">
 
        
            
                        <table class="table table-bordered" style="padding-left: 20px; padding-right: 200px;" >
                            <tr>
                                <td> User ID </td>
                                <td> User First Name </td>
											
                                
                              
                                <td> Contact Number </td>
                                 <td> User Password </td>
                               
                            </tr>
 
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $uid = $row['uid'];
                                      
										
										
									    $username = $row['username'];
                                        $mobile = $row['mobile'];
										  $password = $row['password'];
										    
										
                            ?>
                                    <tr>
                                        <td><?php echo $uid ?></td>
                                      
								   <td><?php echo $username ?></td>
                                        <td><?php echo $mobile ?></td>
                                        <td><?php echo $password ?></td>
										
										
										
										
										
										
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
</html>


	




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


