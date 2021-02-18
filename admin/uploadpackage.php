<?php
include("../db_connection/db.php");

$packagename=$_POST['packagename'];
$noofdays=$_POST['noofdays'];
$price=$_POST['price'];
$numberofperson=$_POST['numberofperson'];
$litnerary=$_POST['litnerary'];
$inclusion=$_POST['inclusion'];
$exclusion=$_POST['exclusion'];
$termsconditions=$_POST['terms&conditions'];
// $description=$_POST['description'];

// Check if image fileToUpload1 is a actual image or fake image
if(isset($_POST["save1"])) {
  $fileToUpload1 = rand(1000,100000)."-".$_fileToUpload1S['fileToUpload1']['name'];
  $fileToUpload1_loc = $_fileToUpload1S['fileToUpload1']['tmp_name'];
$fileToUpload1_size = $_fileToUpload1S['fileToUpload1']['size'];
$fileToUpload1_type = $_fileToUpload1S['fileToUpload1']['type'];
$folder="../tourpackages/";

/* new fileToUpload1 size in KB */
$new_size = $fileToUpload1_size/1024;  
/* new fileToUpload1 size in KB */

/* make fileToUpload1 name in lower case */
$new_fileToUpload1_name = strtolower($fileToUpload1);
/* make fileToUpload1 name in lower case */

$final_fileToUpload1=str_replace(' ','-',$new_fileToUpload1_name);

if(move_uploaded_fileToUpload1($fileToUpload1_loc,$folder.$final_fileToUpload1))
{
    echo "The fileToUpload1 ". htmlspecialchars( basename( $_fileToUpload1S["fileToUpload1ToUpload1"]["name"])). " has been uploaded.";
   $first_name=$_fileToUpload1S["fileToUpload1ToUpload1"]["name"];
    $stu_query = "INSERT INTO kh_book_my_tours (package_name,no_of_days,photo,price,no_of_person,litnerary,inclusion,exclusion,terms_and_conditions) VALUES ('$packagename','$noofdays','$first_name','$price','$numberofperson','$litnerary','$inclusion','$exclusion','$termsconditions')";
$result = mysqli_query($conn, $stu_query);

if ($result) {
  session_start();
  $_SESSION['message2'] = "Added successfully.!";
    header('location: index.php#package');
    exit();
}
  } 
}
?>