<?php
// Opens a connection to a MySQL server.
$connection=mysqli_connect ("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6","heroku_50e9ff92ea1da4e");
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'accounts');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/