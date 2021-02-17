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
<title>User Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid">
<div class="card d-flex justify-content-center p-2" style="width: 28rem;">
  <div class="card-header">
    Admin Login Here.!
  </div>
  <div class="card-body">
  <form name="frmUser" method="post" action="" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="user_name" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input  type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
  <div class="message"><?php if($message!="") { echo $message; } ?></div>

  </div>
  <div class="mb-3">
  <input type="submit"  class="btn btn-primary" name="submit" value="Submit"><br><br>
<input  class="btn btn-success" type="reset">
  </div>
</form>
  </div>
</div>
</div>


</body>
</html>