<?php
include("../db_connection/db.php");

$target_dir = "../dynamic_scrolling_banners/";
$fileName=$_FILES["fileToUpload"]["name"];
$random=rand(1111,9999);
 $newFileName=$random.$fileName;
$target_file = $target_dir . $newFileName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$id=$_POST['id'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $first_name=$newFileName;
    $stu_query = "UPDATE `kh_dynamic_scrolling_banners` SET `path`='" . $first_name . "' WHERE id ='" . $id . "'";
$result = mysqli_query($conn, $stu_query);

if ($result) {
  session_start();
  $_SESSION['success_message'] = "Carousel Changed.!";
    header('location: form.php');
    exit();
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>