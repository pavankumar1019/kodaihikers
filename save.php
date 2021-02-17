<?php
	include 'db_connection/db.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	$sql = "INSERT INTO `kh_get_in_touch`( `name`, `email`, `mobile_number`, `message`) 
	VALUES ('$name','$email','$phone','$message')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>