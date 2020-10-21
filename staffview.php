<?php
$connect = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");
$sql = "SELECT distinct Orders.batch_id, Orders.Order_ID,Orders.foodname,Orders.price,Orders.quantity,Orders.order_date,Orders.username,Orders.no_order,Orders.total,Orders.gtotal, Locations.lat,Locations.lng,Locations.description,Locations.location_status,Locations.username FROM Orders left outer JOIN Locations ON Orders.batch_id=locations.batch_id order by Orders.batch_id";

$result = mysqli_query($connect, $sql);
?>

<?php
session_start();

if (!isset($_SESSION['login_user2'])) {
  header("location: loginstaff.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Eja</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <meta http-equiv="refresh" content="1"> -->






  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link rel="stylesheet" href="css/style.css">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <img src="images/uc.jpg" alt="" width="314" height="64" />

        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

          <li><a href="homestaff.php"><span class="hvr-grow"></span>
              <div><img src="house.svg" alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px">



          <li><a href="aboutusstaff.php" class="hvr-grow">About us</a></li>






          <li><a href="admin-map.php" class="hvr-grow">Confirm Order</a></li>

          <li><a href="staffview.php" class="hvr-grow">View Order</a></li>



          <li><a href="viewcomment.php"><span class="hvr-grow"></span>
              <div><img src="call-center.svg" alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px">
          <li><a href="indexx.php"><span class="hvr-grow"></span>
              <div><img src="exit.svg" alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px">

            </a></li>



          <style>
            .nav-wrapper {
              background-color: gold;
            }

            .hvr-grow {
              color: #010101;
            }
          </style>


        </ul>
      </div>
    </nav>
  </div>

  </section>

</head>

<style>
  body:before {

    height: 100%;
    display: inline-block;
    vertical-align: middle;
  }

  button {
    background: #DAA520;
    color: #fff;
    border: none;
    position: relative;
    height: 43px;
    font-size: 1.1em;
    padding: 0 2em;
    cursor: pointer;
    transition: 800ms ease all;
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
          <th width="5%">Batch ID</th>
          <th width="5%">Username</th>
          <th width="5%">Order_date</th>
          <th width="5%">Food Name</th>

          <th width="5%">Food Quantity</th>
          <th width="5%">Price per Food</th>
          <th width="5%">Price X Quantity</th>
          <th width="5%">Total Price</th>
          <th width="5%">No Order</th>

          <th width="5%">Location</th>
          <th width="5%">Status</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>

              <td><?php echo $row["batch_id"]; ?></td>
              <td><?php echo $row["username"]; ?></td>
              <td><?php echo $row["order_date"]; ?></td>
              <td><?php echo $row["foodname"]; ?></td>
              <td><?php echo $row["quantity"]; ?></td>
              <td><?php echo $row["price"]; ?></td>
              <td><?php echo $row["total"]; ?></td>
              <td><?php echo $row["gtotal"]; ?></td>
              <td><?php echo $row["no_order"]; ?></td>

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