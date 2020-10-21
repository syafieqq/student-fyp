<?php
$db = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");

$msg = "";
if (isset($_POST['upload'])) {


  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);



  $sql = "INSERT INTO makeorder(date,time) VALUES ('$date', '$time')";

  if (!mysqli_query($db, $sql)) {
    die('Error: ' . mysqli_error($db));
  } else {

    echo '<script language="javascript">';
    echo 'alert("Successfully Insert the Data"); ';
    echo '</script>';
  }
}
$result = mysqli_query($db, "SELECT * FROM makeorder");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>The Perfect Food at Your Door!</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <meta http-equiv="refresh" content="1"> -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link rel="stylesheet" href="css/style.css">

  <title>Image Upload</title>
  <style type="text/css">
    body {
      background-image: url("Inkedba_LI.jpg");
      background-repeat: no-repeat;

      background-size: 1700px 770px;
    }

    #content {
      width: 50%;
      margin: 20px auto;
      border: 1px solid #cbcbcb;
    }

    form {
      width: 50%;
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

<body>
  <?php require('chunks/navbaradmin.php'); ?>
  <div id="content">

    <form method="POST" action="insertdate.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div>


      </div>


      <div>
        <label for="Date">Date</label>
        <input type="Date" name="Date" placeholder="Date" required value="" />
        <span>
      </div>
      <div>
        <label for="Time">Time</label>
        <input type="Time" name="Time" placeholder="Time" required value="" />
        <span>
      </div>





      <div>
        <button type="submit" name="upload">Upload</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="js/loaders.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>