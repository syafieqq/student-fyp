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
    background-color: #DAA520;
    border: none;
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

  <?php require('chunks/navbarafterloginstaff.php'); ?>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="js/loaders.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>



<br>
<br>
<br>
<br>

<?php

if (!isset($_SESSION['login_user2'])) {
  header("location: loginstaff.php");
}
extract($_REQUEST);
include("connectionn.php");
$gtotal = array();
$ar = array();
$total = 0;

if (isset($_SESSION['login_user2'])) {
  $login_user2 = $_SESSION['login_user2'];
  $qq = mysqli_query($con, "select * from staff where username='$login_user2'");
  $qqr = mysqli_fetch_array($qq);
}





//update section
$cust_details = mysqli_query($con, "select * from staff where username='$login_user2'");
$det_res = mysqli_fetch_array($cust_details);
$firstnames = $det_res['firstnames'];
$username = $det_res['username'];


$mobiles = $det_res['mobiles'];
$fld_password = $det_res['password'];
if (isset($update)) {

  if (mysqli_query($con, "update staff set firstnames='$name',mobiles='$mob',password='$pswd' where username='$username'")) {
    header("location:profilestaff.php");
  }
}



?>

<br>

<!--tab 2 starts-->
<div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="manageaccount-tab">
  <div id="content">

    <form method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="name">First Name</label>
        <input type="text" id="name" value="<?php if (isset($firstnames)) {
                                              echo $firstnames;
                                            } ?>" class="form-control" name="name" required="required" />
      </div>



      <div class="form-group">
        <label for="username">Email</label>
        <input type="text" id="username" name="username" value="<?php if (isset($username)) {
                                                                  echo $username;
                                                                } ?>" class="form-control" readonly />
      </div>





      <div class="form-group">
        <label for="mob">Mobile</label>
        <input type="text" id="mob" value="<?php if (isset($mobiles)) {
                                              echo $mobiles;
                                            } ?>" class="form-control" name="mob" required="required" />
      </div>

      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pswd" value="<?php if (isset($fld_password)) {
                                                    echo $fld_password;
                                                  } ?>" class="form-control" id="pwd" required />
      </div>

      <br>

      <button type="submit" name="update" class="button button2">Update</button>
      <div><?php if (isset($ermsg)) {
              echo $ermsg;
            } ?><?php if (isset($ermsg2)) {
                                                        echo $ermsg2;
                                                      } ?></div>
    </form>
  </div>
  <!--tab 2 ends-->
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <title>The Perfect Food at Your Door!</title>





    <title>Image Upload</title>
    <style type="text/css">
      body {
        background-image: url("f.png");
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
  </head>


  </body>

  </html>


  <body>

    <div id="page-container">
      <div id="content-wrap">

      </div>
      <footer id="footer">
        <img src="il.jpg" style="width:1700px;height:300px;">


    </div>


    </style>
  </body>

  </html>