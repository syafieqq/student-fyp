<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Eja</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- <meta http-equiv="refresh" content="1"> -->

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <link rel="stylesheet" href="css/style.css">


</head>

<body>

     <?php require('chunks/navbarafterloginn.php'); ?>


     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <script src="js/loaders.js"></script>
     <script src="js/ajax.js"></script>
</body>

</html>

<br><br>
<br><br>
<br><br>
<br>

<?php

if (isset($_SESSION['login_user2'])) {
     $login_user2 = $_SESSION['login_user2'];
     require_once("connect.php");
     $query = " select * from orders where username='$login_user2'";
     $result = mysqli_query($conn, $query);
}
?>

<?php
$connect = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");
$sql = "SELECT distinct Orders.Order_ID,Orders.foodname,Orders.price,Orders.quantity,Orders.order_date,Orders.username,Orders.total,Orders.gtotal, Locations.lat,Locations.lng,Locations.description,orders.status,Locations.username FROM Orders left outer JOIN Locations ON Orders.username=locations.username where locations.username='$login_user2'";

$result = mysqli_query($connect, $sql);
?>



</head>


<body>




</body>

</html>
</section>
<br>
<br>

<body>
     <br />
     <div class="container" style="width:1800px;">

          <div class="table-responsive">
               <table class="table table-striped">
                    <tr>

                         <th width="5%">Order_date</th>
                         <th width="5%">Food Name</th>

                         <th width="5%">Food Quantity</th>
                         <th width="5%">Price per Food</th>
                         <th width="5%">Price X Quantity</th>
                         <th width="5%">Total Price</th>

                         <th width="5%">Location</th>
                         <th width="5%">Status</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                         while ($row = mysqli_fetch_array($result)) {
                    ?>
                              <tr>


                                   <td><?php echo $row["order_date"]; ?></td>
                                   <td><?php echo $row["foodname"]; ?></td>
                                   <td><?php echo $row["quantity"]; ?></td>
                                   <td><?php echo $row["price"]; ?></td>
                                   <td><?php echo $row["total"]; ?></td>
                                   <td><?php echo $row["gtotal"]; ?></td>

                                   <td><?php echo $row["description"]; ?></td>
                                   <td><?php echo $row["status"]; ?></td>
                              </tr>
                    <?php
                         }
                    }
                    ?>
               </table>
          </div>
     </div>
     <br />
</body>



<style type="text/css">
     body {
          background-image: url("aa.png");
          background-repeat: no-repeat;



     }

     #content {
          width: 50%;
          margin: 20px auto;
          border: 1px solid #cbcbcb;
     }

     form {
          width: 60%;
          margin: 20px auto;
     }

     form div {
          margin-top: 5px;
     }

     #img_div {
          width: 80%;
          padding: 5px;
          margin: 15px auto;
          border: 1px solid #cbcbcb;
          background: #767272;
          color: white;
     }

     #img_div:after {
          content: "";
          display: block;
          clear: both;


     }
</style>
</head>


</body>

</html>


<body>
     <footer>

          <img src="kk.jpg" style="width:1700px;height:650px;">




     </footer>
     </style>
</body>

</html>