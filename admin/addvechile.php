<?php
include("../db_connection/db.php");

$pickupplace=$_POST['pickupplace'];
$dropplace=$_POST['dropplace'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$Indigo=$_POST['Indigo'];
$Swift=$_POST['Swift'];
$Etios=$_POST['Etios'];
$Tavera=$_POST['Tavera'];
$Innova=$_POST['Innova'];
$Tempo=$_POST['Tempo'];

$description=$_POST['description'];

// Check if image file is a actual image or fake image
if(isset($_POST["save5"])) {
    $stu_query = "INSERT INTO kh_add_hire_vehicles (pickup_place,drop_place,distance_km,duration,indigo,swift,etios,tavera,innova,tempo,description) VALUES ('$pickupplace','$dropplace','$distance','$duration','$Indigo','$Swift','$Etios','$Tavera','$Innova',$Tempo,'$description')";
$result = mysqli_query($conn, $stu_query);
if ($result) {
  session_start();
  $_SESSION['message5'] = "Vehicle Added.!";
    header('location: index.php#Vehicles');
    exit();
}
}
?>