<?php
include("../db_connection/db.php");

$target_dir = "../tourpackages/";
$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$packagename=$_POST['packagename'];
$noofdays=$_POST['noofdays'];
$price=$_POST['price'];
$numberofperson=$_POST['numberofperson'];
$litnerary=$_POST['litnerary'];
$inclusion=$_POST['inclusion'];
$exclusion=$_POST['exclusion'];
$termsconditions=$_POST['terms&conditions'];
// $description=$_POST['description'];

// Check if image file is a actual image or fake image
if(isset($_POST["save1"])) {
  $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["fileToUpload1"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload1"]["name"])). " has been uploaded.";
   $first_name=$_FILES["fileToUpload1"]["name"];
    $stu_query = "INSERT INTO kh_book_my_tours (package_name,no_of_days,photo,price,no_of_person,litnerary,inclusion,exclusion,terms_and_conditions) VALUES ('$packagename','$noofdays',' $first_name','$price','$numberofperson','$litnerary','$inclusion','$exclusion','$termsconditions')";
$result = mysqli_query($conn, $stu_query);

if ($result) {
  session_start();
  $_SESSION['message2'] = "Added successfully.!";
    header('location: index.php#package');
    exit();
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>