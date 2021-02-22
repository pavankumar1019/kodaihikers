<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_add_hire_vehicles";
  $result = mysqli_query($conn, $query);
  $output = '';
  while($row = mysqli_fetch_array($result))
  {
   $output .= $row["distance_km"];
  }
  $output .= '';
  echo $output;
}
 }
 ?>