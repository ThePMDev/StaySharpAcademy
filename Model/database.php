<?php 

$host = "database-1.ciostpx6j9o3.us-east-1.rds.amazonaws.com"; //host name
$username = "admin"; // mysql username
$password = "d2d457dx"; // mysql password
$db_name = "Stay Sharp";

//connect to server and select database: 
$conn = new mysqli ($host, $username, $password, $ db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

