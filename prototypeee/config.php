<?php
$servernane = "localhost";
$userName = "root";
$password = "123456";
$dbName = "htu";
 
// Create database connection
$mysqli =new \MySQLi("localhost", "root", "123456", "htu");
 
// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
 
 ?>