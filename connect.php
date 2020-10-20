<?php

$conn = mysqli_connect("localhost", "stagingmode", "abcd1234", "eja");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
