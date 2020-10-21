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




  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="js/loaders.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>

<?php
include_once 'header.php';
include 'locations_model.php';
$username = $_SESSION["login_user2"];
//get_unconfirmed_locations();exit;
?>
<?php

//5/6
/*if(!isset($_SESSION['login_user2'])){
header("location: payment.php"); 
$batch_id=$_SESSION["batch_id"];
}*/
?>
<?php

if (!isset($_SESSION['login_user2'])) {
  header("location:: indexlogin.php");
}
extract($_REQUEST);
include("connectionn.php");
$gtotal = array();
$ar = array();
$total = 0;

if (isset($_SESSION['login_user2'])) {
  $login_user2 = $_SESSION['login_user2'];
  $qq = mysqli_query($con, "select * from users where username='$login_user2'");
  $qqr = mysqli_fetch_array($qq);
}

$batchid = $_GET['batchid'];
?>
<img src="dd.png" alt="Italian Trulli" class="center">
<br>
<br>





<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:900i');

  * {
    box-sizing: border-box;
  }

  body {

    justify-content: center;

  }

  .wrapper {
    display: flex;
    justify-content: center;
  }

  .cta {
    display: flex;
    padding: 10px 40px;
    text-decoration: none;
    font-family: 'Poppins', ;
    font-size: 20px;
    color: white;
    background: #DAA520;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
  }

  .cta:focus {
    outline: none;
  }

  .cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC638;
  }

  .cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
  }

  .cta:hover span:nth-child(2) {
    transition: 0.5s;
    margin-right: 35px;
  }

  span {
    transform: skewX(15deg)
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }

  /**************SVG****************/

  path.one {
    transition: 0.4s;
    transform: translateX(-60%);
  }

  path.two {
    transition: 0.5s;
    transform: translateX(-30%);
  }

  .cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
  }

  .cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
  }

  .cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
  }

  /* SVG animations */

  @keyframes color_anim {
    0% {
      fill: white;
    }

    50% {
      fill: #FBC638;
    }

    100% {
      fill: white;
    }
  }
</style>



<script>
  $(window).ready(function() {
    $(".boton").wrapInner('<div class=botontext></div>');

    $(".botontext").clone().appendTo($(".boton"));

    $(".boton").append('<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>');

    $(".twist").css("width", "25%").css("width", "+=3px");
  });
</script>
<!--script type="text/javascript" 
			src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyAR5yQUg67xmIQbwrihpUUo6NBBT5f-Kbc">
    </script-->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR5yQUg67xmIQbwrihpUUo6NBBT5f-Kbc" type="text/javascript"></script>
<div id="map" style="height: 600px;"></div>
<script>
  //src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw">
  /**
   * Create new map
   */

  var infowindow;
  var map;
  var red_icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
  var yellow_icon = 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png';
  var locations = <?php get_confirmed_locations() ?>;
  var myOptions = {
    zoom: 7,
    center: new google.maps.LatLng(5.2948, 103.1374),
    mapTypeId: 'roadmap'
  };
  map = new google.maps.Map(document.getElementById('map'), myOptions);

  /**
   * Global marker object that holds all markers.
   * @type {Object.<string, google.maps.LatLng>}
   */
  var markers = {};

  /**
   * Concatenates given lat and lng with an underscore and returns it.
   * This id will be used as a key of marker to cache the marker in markers object.
   * @param {!number} lat Latitude.
   * @param {!number} lng Longitude.
   * @return {string} Concatenated marker id.
   */
  var getMarkerUniqueId = function(lat, lng) {
    return lat + '_' + lng;
  };

  /**
   * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
   * This function can be useful for getting new coordinates quickly.
   * @param {!number} lat Latitude.
   * @param {!number} lng Longitude.
   * @return {google.maps.LatLng} An instance of google.maps.LatLng object
   */
  var getLatLng = function(lat, lng) {
    return new google.maps.LatLng(lat, lng);
  };

  /**
   * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
   */
  var addMarker = google.maps.event.addListener(map, 'click', function(e) {
    var lat = e.latLng.lat(); // lat of clicked point
    var lng = e.latLng.lng(); // lng of clicked point
    var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
    var marker = new google.maps.Marker({
      position: getLatLng(lat, lng),
      map: map,
      animation: google.maps.Animation.DROP,

      html: "    <div id='info_" + markerId + "'>\n" +


        "                <td><a>Location:</a></td>\n" +
        "                <td><textarea id='manual_description' placeholder='Put Location Here'></textarea></td></tr>\n" +
        "            <tr><td></td><td><input  type='button' value='Save' onclick='saveData(" + lat + "," + lng + "," + <?= $batchid; ?> + ")'/></td></tr>\n"


    });
    markers[markerId] = marker; // cache marker in markers object
    bindMarkerEvents(marker); // bind right click event to marker
    bindMarkerinfo(marker); // bind infowindow with click event to marker
  });

  /**
   * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
   * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
   */
  var bindMarkerinfo = function(marker) {
    google.maps.event.addListener(marker, "click", function(point) {
      var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
      var marker = markers[markerId]; // find marker
      infowindow = new google.maps.InfoWindow();
      infowindow.setContent(marker.html);
      infowindow.open(map, marker);
      // removeMarker(marker, markerId); // remove it
    });
  };

  /**
   * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
   * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
   */
  var bindMarkerEvents = function(marker) {
    google.maps.event.addListener(marker, "rightclick", function(point) {
      var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
      var marker = markers[markerId]; // find marker
      removeMarker(marker, markerId); // remove it
    });
  };

  /**
   * Removes given marker from map.
   * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
   * @param {!string} markerId Id of marker.
   */
  var removeMarker = function(marker, markerId) {
    marker.setMap(null); // set markers setMap to null to remove it from map
    delete markers[markerId]; // delete marker instance from markers object
  };


  /**
   * loop through (Mysql) dynamic locations to add markers to map.
   */


  /**
   * SAVE save marker from map.
   * @param lat  A latitude of marker.
   * @param lng A longitude of marker.
   */
  function saveData(lat, lng, batchid) {
    var description = document.getElementById('manual_description').value;
    var url = 'locations_model.php?add_location&description=' + description + '&lat=' + lat + '&lng=' + lng + '&batchid=' + batchid;
    console.log(url);
    downloadUrl(url, function(data, responseCode) {
      if (responseCode === 200 && data.length > 1) {
        var markerId = getMarkerUniqueId(lat, lng); // get marker id by using clicked point's coordinate
        var manual_marker = markers[markerId]; // find marker
        manual_marker.setIcon(yellow_icon);
        infowindow.close();
        infowindow.setContent("<div style=' color: green; font-size: 25px;'> Our Staff Will Reach You!!</div>");
        infowindow.open(map, manual_marker);

      } else {
        console.log(responseCode);
        console.log(data);
        infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
      }
    });
  }

  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
      new ActiveXObject('Microsoft.XMLHTTP') :
      new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        callback(request.responseText, request.status);
      }
    };

    request.open('GET', url, true);
    request.send(null);
  }
</script>

<br>
<br> <br>

<div class="wrapper">

  <br>
  <a class="cta" href="ci2.php">
    <span>We will reach You</span>
    <span>
      <svg width="40px" height="26px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span>
  </a>

</div>


<?php
include_once 'footer.php';

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


</head>

<style>
  body {
    background-image: url('k.jpg');
    background-repeat: no-repeat;
    background-size: 1700px 880px;
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

<body>

  <?php require('chunks/navbarafterloginn.php'); ?>



</body>

</html>
</section>
<?php
if (isset($_SESSION['login_user1'])) {

?>


<?php
} else if (isset($_SESSION['login_user2'])) {
?>

  <li class="active"><a href="index.php"><span class="glyphicon glyphicon-shopping-cart"></span>


    <?php
  } else {

    ?>


    <?php
  }
    ?>


    </div>

    </div>
    </nav>


    <?php
    if (!empty($_SESSION["cart"])) {
    ?>
      <div class="container">
        <div class="jumbotron">

          <div class="container">
            <div>

              <br>
              <br>
              <br>

              <?php

              $total = 0;
              foreach ($_SESSION["cart"] as $keys => $values) {
              ?>
              <?php

              }
              ?>
              <tr>

                <td></td>
              </tr>
              </table>
              <br>

            </div>
            <br><br><br><br><br><br><br>
          <?php
        }
        if (empty($_SESSION["cart"])) {
          ?>


          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
        }
        ?>


        <?php


        if (isset($_POST["add"])) {
          if (isset($_SESSION["cart"])) {
            $item_array_id = array_column($_SESSION["cart"], "food_id");
            if (!in_array($_GET["id"], $item_array_id)) {
              $count = count($_SESSION["cart"]);

              $item_array = array(
                'food_id' => $_GET["id"],
                'food_name' => $_POST["hidden_name"],
                'food_price' => $_POST["hidden_price"],
                'R_ID' => $_POST["hidden_R_ID"],
                'food_quantity' => $_POST["quantity"]
              );
              $_SESSION["cart"][$count] = $item_array;
              echo '<script>window.location="cart.php"</script>';
            } else {
              echo '<script>alert("Products already added to cart")</script>';
              echo '<script>window.location="cart.php"</script>';
            }
          } else {
            $item_array = array(
              'food_id' => $_GET["id"],
              'food_name' => $_POST["hidden_name"],
              'food_price' => $_POST["hidden_price"],
              'F_ID' => $_POST["hidden_f_ID"],
              'food_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
          }
        }
        if (isset($_GET["action"])) {
          if ($_GET["action"] == "delete") {
            foreach ($_SESSION["cart"] as $keys => $values) {
              if ($values["food_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Food has been removed")</script>';
                echo '<script>window.location="cart.php"</script>';
              }
            }
          }
        }

        if (isset($_GET["action"])) {
          if ($_GET["action"] == "empty") {
            foreach ($_SESSION["cart"] as $keys => $values) {

              unset($_SESSION["cart"]);
              echo '<script>alert("Cart is made empty!")</script>';
              echo '<script>window.location="cart.php"</script>';
            }
          }
        }


        ?>
        <?php

        ?>

        </body>


        </html>
        <br>
        <footer>
          <img src="il.jpg" alt="Italian Trulli" style="width:100%;height:300px;">
        </footer>