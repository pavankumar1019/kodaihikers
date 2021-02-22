<?php
//action.php
include 'db_connection/db.php';

if(isset($_POST["action"]))
{

 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_add_hire_vehicles where id=2";
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
   $output .= ?>
   <tr>
   <td><?php echo $row["pickup_place"]; ?></td>
   <td><?php echo $row["drop_place"]; ?></td>
   <td><?php echo $row["vehicle_name"]; ?></td>
   <td><?php echo $row["description"]; ?></td>
   <td><?php echo $row["price"]; ?></td>
   <td><?php echo $row["duration"]; ?></td>
   <td><?php echo $row["distance_km"]; ?>
   <td><?php echo $row["duration"]; ?></td>
   <td><?php echo $row["distance_km"]; ?>
   <td><?php echo $row["distance_km"]; ?>
   </tr>


<?php
  }
  $output .= '

  </table>';
  echo $output;
 }
}
 ?>

 
