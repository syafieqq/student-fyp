<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Uncle Jack</title>

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
$connect = mysqli_connect("localhost", "stagingmode", "abcd1234", "eja");
$sql = "SELECT distinct Orders.Order_ID,Orders.foodname,Orders.price,Orders.quantity,Orders.order_date,Orders.username,Orders.total,Orders.gtotal, Locations.lat,Locations.lng,Locations.description,Locations.location_status,Locations.username FROM Orders left outer JOIN Locations ON Orders.username=locations.username where locations.username='$login_user2'";

$result = mysqli_query($connect, $sql);
?>



</head>

<style>
     button {
          background: #DAA520;
          color: #fff;
          border: none;
          position: relative;
          height: 43px;
          font-size: 1.1em;
          padding: 0 2em;
          cursor: pointer;
          transition: 80ms ease all;
          outline: none;
     }

     button:hover {
          background: #fff;
          color: #DAA520;
     }

     button:before,
     button:after {
          content: '';
          position: absolute;
          top: 0;
          right: 0;
          height: 2px;
          width: 0;
          background: #FFDF00;
          transition: 400ms ease all;
     }

     button:after {
          right: inherit;
          top: inherit;
          left: 0;
          bottom: 0;
     }

     button:hover:before,
     button:hover:after {
          width: 100%;
          transition: 800ms ease all;
     }
</style>

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
                         <th width="5%">Username</th>
                         <th width="5%">Order_date</th>
                         <th width="5%">Food Name</th>

                         <th width="5%">Food Quantity</th>
                         <th width="5%">Price per Food</th>
                         <th width="5%">Price X Quantity</th>
                         <th width="5%">Total Price</th>
                         <th width="5%">Latitude</th>
                         <th width="5%">Longitude</th>
                         <th width="5%">Location</th>
                         <th width="5%">Status</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                         while ($row = mysqli_fetch_array($result)) {
                    ?>
                              <tr>

                                   <td><?php echo $row["username"]; ?></td>
                                   <td><?php echo $row["order_date"]; ?></td>
                                   <td><?php echo $row["foodname"]; ?></td>
                                   <td><?php echo $row["quantity"]; ?></td>
                                   <td><?php echo $row["price"]; ?></td>
                                   <td><?php echo $row["total"]; ?></td>
                                   <td><?php echo $row["gtotal"]; ?></td>
                                   <td><?php echo $row["lat"]; ?></td>
                                   <td><?php echo $row["lng"]; ?></td>
                                   <td><?php echo $row["description"]; ?></td>
                                   <td><?php echo $row["location_status"]; ?></td>
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
<footer>

     <img src="k.jpg" style="width:1700px;height:650px;">




</footer>

</html>