<?php 
include '../../db_connection/db.php';
$id = $_POST['idelete'];
$query = "delete from kh_animated_gallery  where id = '".$id."'";  //query 
if(mysqli_query($conn, $query)){ //check is true or false 
 echo "deleted id ".$id." ";
 $_SESSION['messaged2'] = "Deleted.!";
 header('location: ../table.php#gallery');
 exit();//out put if ture
 }
 else{ 
    header('location: ../table.php#gallery');//out put if false
} 
?>