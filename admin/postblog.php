<?php
include("../db_connection/db.php");

$target_dir = "../blogimages/";
$fileName=$_FILES["fileToUpload2"]["name"];
$random=rand(1111,9999);
 $newFileName=$random.$fileName;
$target_file = $target_dir . $newFileName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$title=$_POST['title'];
$message=$_POST['message'];

// Check if image file is a actual image or fake image
if(isset($_POST["save2"])) {
  $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
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
if ($_FILES["fileToUpload2"]["size"] > 500000) {
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
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload2"]["name"])). " has been uploaded.";
    $first_name=$newFileName;
    $stu_query = "INSERT INTO kh_blog (title,image,description) VALUES ('$title','$first_name','$message')";
$result = mysqli_query($conn, $stu_query);

if ($result) {
  session_start();
  $_SESSION['message3'] = " Blog Posted.!";
    header('location: index.php#blog');
    exit();
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>