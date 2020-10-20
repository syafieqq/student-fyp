<?php

function Connect()
{
	$dbhost = "us-cdbr-east-02.cleardb.com";
	$dbuser = "b6493e740390c8";
	$dbpass = "4e6ff6a6";
	$dbname = "heroku_50e9ff92ea1da4e";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>