<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_add_hire_vehicles";
  $result = mysqli_query($conn, $query);
  $output = '
  <table class="table table-striped table-hover mt-5"   id="transposeThis"> 
  <tr>
           <td> "'.$row["pickup_place"].'"</td>
           <td> "'.$row["drop_place"].'"</td>
           <td>"'.$row["vehicle_name"].'"</td>
           <td>"'.$row["description"].'" </td>
           <td>"'.$row["price"].'"</td>
           <td>"'.$row["duration"].'" </td>
           <td> "'.$row["distance_km"].'"</td>
           <td> "'.$row["duration"].'"</td>
           <td> "'.$row["distance_km"].'"</td>
           <td>"'.$row["distance_km"].'"</td>
           </tr>
 <tbody id="myTable" >
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
           
   ';
  }
  $output .= '</tbody></table>';
  echo $output;
}
 }
 ?>