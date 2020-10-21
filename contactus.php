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

<style>
  .button {
    background-color: #DAA520 border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4s;
  }

  .button1 {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  }
</style>

<body>

  <?php require('chunks/indexlain.php'); ?>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="js/loaders.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>



< <br>
  <br>

  <br>

  <?php
  $db = mysqli_connect("us-cdbr-east-02.cleardb.com",  "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");

  $msg = "";
  if (isset($_POST['upload'])) {
    $subject = mysqli_real_escape_string($db, $_POST['subject']);

    $description = mysqli_real_escape_string($db, $_POST['description']);





    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');


    if (mysqli_query($db, "INSERT INTO contactus (subject,description,order_date, username) VALUES ('$subject','$description','$order_date','$username')")) {
    }
  }
  $result = mysqli_query($db, "SELECT * FROM contactus");
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <title>The Perfect Food at Your Door!</title>





    <title>Image Upload</title>
    <style type="text/css">
      body {
        background-image: url("Thank.gIF");
        background-repeat: no-repeat;

        background-size: 1700px 780px;
      }

      #content {
        width: 50%;
        margin: 20px auto;
        border: 1px solid black;
      }

      form {
        width: 60%;
        margin: 20px auto;
        color: black;
      }

      form div {
        margin-top: 5px;
      }

      #img_div {
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid black;
        background: black;
        color: black;
      }

      #img_div:after {
        content: "";
        display: block;
        clear: both;


      }

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

      ::placeholder {
        color: black;
        opacity: 1;
        /* Firefox */
      }

      :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: black;
      }

      ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: black;
      }
    </style>
  </head>
  <br><br><br><br><br><br><br>

  <body>
    <h1 style="text-align:center; ">
      <div>
    </h1>
    <div id="content">

      <form method="POST" action="contactus.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="input-field">
          <label for="subject" style="font-size:25px;color:black;">Penambahbaikan</label>
          <input type="text" name="subject" placeholder="" required value="" />
          <span>
        </div>


        <div style="font-size:15px;">
          <textarea id="text" cols="40" rows="4" name="description" placeholder="Pendapat Anda?"></textarea>
        </div>







        <div>
          <button class="button button2 " type="submit" name="upload">Hantar</button>

        </div>
      </form>
    </div>


  </body>

  </html>

  <body>

    <div id="page-container">
      <div id="content-wrap">

      </div>



    </div>


    </style>
  </body>

  </html>