<?php
session_start();

if (!isset($_SESSION['login_user2'])) {
    header("location:: indexlogin.php");
}

?>
<?php
//5/6
/*if(!isset($_SESSION['login_user2'])){
header("location: payment.php"); 
$batch_id=$_SESSION["batch_id"];
}*/
?>
	<?php
    require("db.php");

    // Gets data from URL parameters.
    if (isset($_GET['add_location'])) {
        add_location();
    }
    if (isset($_GET['confirm_location'])) {
        confirm_location();
    }



    function add_location()
    {
        $con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");
        if (!$con) {
            die('Not connected : ' . mysqli_connect_error());
        }
        $lat = $_GET['lat'];
        $lng = $_GET['lng'];
        $description = $_GET['description'];
        $batchid = $_GET['batchid'];
        //$username =$_GET['username'];
        $username = $_SESSION["login_user2"];
        // Inserts new row with place data.
        $query = sprintf(
            "INSERT INTO locations " .
                " (id, lat ,lng, description,batch_id,username) " .
                " VALUES (NULL,'$lat','$lng','$description','$batchid','$username');",
            mysqli_real_escape_string($con, $lat),
            mysqli_real_escape_string($con, $lng),
            mysqli_real_escape_string($con, $description),
            mysqli_real_escape_string($con, $batchid),
            mysqli_real_escape_string($con, $username)
        );

        $result = mysqli_query($con, $query);
        echo "Inserted Successfully";
        if (!$result) {
            die('Invalid query: ' . mysqli_error($con));
        }
    }
    function confirm_location()
    {
        $con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");
        if (!$con) {
            die('Not connected : ' . mysqli_connect_error());
        }
        $id = $_GET['id'];
        $confirmed = $_GET['confirmed'];
        // update location with confirm if admin confirm.
        $query = "update locations set location_status = $confirmed WHERE id = $id ";
        $result = mysqli_query($con, $query);
        echo "Inserted Successfully";
        if (!$result) {
            die('Invalid query: ' . mysqli_error($con));
        }
    }
    function get_confirmed_locations()
    {
        $con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");
        if (!$con) {
            die('Not connected : ' . mysqli_connect_error());
        }
        // update location with location_status if admin location_status.
        $sqldata = mysqli_query($con, "
select id ,lat,lng,description,location_status as isconfirmed
from locations WHERE  location_status = '1'
  ");

        $rows = array();

        while ($r = mysqli_fetch_assoc($sqldata)) {
            $rows[] = $r;
        }

        $indexed = array_map('array_values', $rows);
        //  $array = array_filter($indexed);

        echo json_encode($indexed);
        if (!$rows) {
            return null;
        }
    }
    function get_all_locations()
    {
        $con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");
        if (!$con) {
            die('Not connected : ' . mysqli_connect_error());
        }
        // update location with location_status if admin location_status.
        $sqldata = mysqli_query($con, "
select id ,lat,lng,description,location_status as isconfirmed
from locations
  ");

        $rows = array();
        while ($r = mysqli_fetch_assoc($sqldata)) {
            $rows[] = $r;
        }
        $indexed = array_map('array_values', $rows);
        //  $array = array_filter($indexed);

        echo json_encode($indexed);
        if (!$rows) {
            return null;
        }
    }
    function array_flatten($array)
    {
        if (!is_array($array)) {
            return FALSE;
        }
        $result = array();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, array_flatten($value));
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    ?>