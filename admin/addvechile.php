<?php
include("../db_connection/db.php");

$pickupplace=$_POST['pickupplace'];
$dropplace=$_POST['dropplace'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$vechile=$_POST['vechile'];
$price=$_POST['price'];
$description=$_POST['description'];

// Check if image file is a actual image or fake image
if(isset($_POST["save5"])) {
    $stu_query = "INSERT INTO kh_add_hire_vehicles (pickup_place,drop_place,distance_km,duration,vehicle_name,price,description) VALUES ('$pickupplace','$dropplace','$distance','$duration','$vechile','$price','$description')";
$result = mysqli_query($conn, $stu_query);
if ($result) {
  session_start();
  $_SESSION['message5'] = "Vehicle Added.!";
    header('location: index.php#Vehicles');
    exit();
}
}
?>