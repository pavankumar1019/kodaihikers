<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{

 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_add_hire_vehicles where id=2";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_array($result))
  {
   $output = '
    <tr>
     <td>'.$row["id"].'</td>
     <td>'.$row["id"].'</td>
     <td>'.$row["id"].'</td>
     <td>'.$row["id"].'</td>
     <td>'.$row["id"].'</td>
    </tr>
   ';
  }
  echo $output;
 }
}
 ?>

 
