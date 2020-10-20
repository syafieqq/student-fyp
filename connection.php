<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "stagingmode";
	$dbpass = "abcd1234";
	$dbname = "eja";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
