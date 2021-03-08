<?php 
include '../../db_connection/db.php';
$id = $_POST['idelete'];
$query = "delete from kh_book_my_tours  where id = '".$id."'";  //query 
if(mysql_query($conn, $query)){ //check is true or false 
 echo "deleted id ".$id." ";//out put if ture
 }
 else{ 
 echo "Delete fail";//out put if false
} 
?>