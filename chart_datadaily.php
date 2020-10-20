<?php


//address of the server where db is installed
$servername = "us-cdbr-east-02.cleardb.com";

//username to connect to the db
//the default value is root
$username = "b6493e740390c8";

//password to connect to the db
//this is the value you would have specified during installation of WAMP stack
$password = "4e6ff6a6";

//name of the db under which the table is created
$dbName = "heroku_50e9ff92ea1da4e";

//establishing the connection to the db.
$conn = new mysqli($servername, $username, $password, $dbName);

//checking if there were any error during the last connection attempt
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//the SQL query to be executed
$query = "select day(order_date) as month , sum(total) as total from orders where year(order_date)='2020' group by year(order_date) , day(order_date) order by day(order_date) LIMIT 0, 30";

//storing the result of the executed query
$result = $conn->query($query);

//initialize the array to store the processed data
$jsonArray = array();

//check if there is any data returned by the SQL Query
if ($result->num_rows > 0) {
  //Converting the results into an associative array
  while ($row = $result->fetch_assoc()) {
    $jsonArrayItem = array();
    $jsonArrayItem['label'] = $row['month'];
    $jsonArrayItem['value'] = $row['total'];
    //append the above created object into the main array.
    array_push($jsonArray, $jsonArrayItem);
  }
}

//Closing the connection to DB
$conn->close();

//set the response content type as JSON
header('Content-type: application/json');
//output the return value of json encode using the echo function. 
echo json_encode($jsonArray);
