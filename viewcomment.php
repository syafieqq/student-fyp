<!DOCTYPE html>
<title>EJA</title>
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

	
	<?php require('chunks/indexlainnn.php'); ?>
	
				 

		        
		      </ul>
	      </div>
		  </nav>
		</div>

	</section>
	
</head>

<style>

body:before{

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

<body>


<br>
<br>
<?php 
 
    require_once("connect.php");
    $query = " select * from contactus ";
    $result = mysqli_query($conn,$query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>

 
<body class="bg-dark">
 
   
             <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="20%">Id Komen</th>
<th width="20%">Nama Pelajar</th>
<th width="20%">Penambahbaikan </th>
<th width="20%">Pendapat Pelajar</th>
<th width="10%">Tarikh</th>
</tr>
</thead>
                 
             
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $cid = $row['cid'];
                                        $username = $row['username'];
										$subject = $row['subject'];
										$description = $row['description'];
										$order_date = $row['order_date'];
                            ?>
                                    <tr>
                                        <td><?php echo $cid ?></td>
                                        <td><?php echo $username ?></td>
										  <td><?php echo $subject ?></td>
                                        <td><?php echo $description ?></td>
										<td><?php echo $order_date ?></td>
										
                                      
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
     
  
 
 </div>
 

 </style>
</body>

</html>