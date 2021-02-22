<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_add_hire_vehicles";
  $result = mysqli_query($conn, $query);
 
  while($row = mysqli_fetch_array($result))
  {
   $output .=?>
   <table class="table table-striped table-hover mt-5"   id="transposeThis"> 
   <tr>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?> </td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            <td><?php echo $row["pickup_place"];?></td>
            </tr>
  <tbody id="myTable" >
   <?php;
  }
  $output .= '</tbody></table>';
  echo $output;
}
 }
 ?>