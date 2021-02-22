<?php
//action.php
include 'db_connection/db.php';

if(isset($_POST["action"]))
{

 if($_POST["action"] == "fetch")
 {
    $id=$_POST['id'];
  $query = "SELECT * FROM kh_add_hire_vehicles where id=$id";
  $result = mysqli_query($conn, $query);
  $output = '
  <table class="table table-striped table-hover mt-5"   id="transposeThis">  
  <tr>
  <th>Pick Up Place</th>
  <th>Drop Place</th> 
  <th>Distance</th>
        <th>Duration</th>
  <th>Indigo</th>
        <th>Swift Dzire</th>
  <th>Etios</th>
  <th>Tavera</th>
        <th>Innova</th>
  <th>Tempo Traveller</th>

</tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["pickup_place"].'</td>
     <td>'.$row["drop_place"].'</td>
     <td>'.$row["vehicle_name"].'</td>
     <td>'.$row["description"].'</td>
     <td>'.$row["price"].'</td>
     <td>'.$row["duration"].'</td>
     <td>'.$row["distance_km"].'</td>
     <td>'.$row["duration"].'</td>
     <td>'.$row["duration"].'</td>
     <td>'.$row["duration"].'</td>
    </tr>
   ';
  }
  $output .= '
  </table>';
  echo $output;
 }
}
 ?>


 
