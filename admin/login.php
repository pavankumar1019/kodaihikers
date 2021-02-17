<?php
include '../db_connection/db.php';
    session_start();
    $message="";
    if(count($_POST)>0) {
        
        $result = mysqli_query($conn,"SELECT * FROM kh_admin_login WHERE email='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["email"])) {
    header("Location: index.php");
    }
?>
<html>
<head>

<title>KODI HIKERS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Kodai Hikers is a best tours and travels agency in Kodaikanal ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>

</body>
</html>