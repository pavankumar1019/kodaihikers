<?php
	include 'db_connection/db.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['number'];
	$noofperson=$_POST['noofperson'];
	$pickupdate=$_POST['pickupdate'];
	$dropdate=$_POST['dropdate'];
	$pickupplace=$_POST['pickupplace'];
	$dropplace=$_POST['dropplace'];
	$message=$_POST['message'];
	$sql = "INSERT INTO `kh_hire_vehicles`(`id`, `name`, `mobile_number`, `email`, `no_of_person`, `pickup_date`, `drop_date`, `pickup_place`, `drop_place`, `message`) 
	VALUES ('$name','$email','$phone','$noofperson','$pickupdate','$dropdate','$pickupplace','$dropplace','$message')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>