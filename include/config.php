<?php
$host = 'localhost'; // MySQL database host name
$username = 'root'; // MySQL database username
$password = 'toor'; // MySQL database password
$dbname = 'donatetheblood'; // MySQL database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
?>