<?php
$servername = "localhost";
$database = "u815129216_dev";
$username = "u815129216_dev";
$password = "Rats1851";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 ?>