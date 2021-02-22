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
 <tbody id="myTable" >
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
           <tr>
           <td>jhgj</td>
           <td>ghfhf</td>
           <td>jhgjh</td>
           <td>hjgjhg</td>
           <td>hggj</td>
           <td>hjgjg</td>
           <td>jhghjg</td>
           <td>jhgjg</td>
           <td>hjggh</td>
           <td>hghjg</td>
           </tr>
   ';
  }
  $output .= '</tbody>
  </table>';
  echo $output;
}
 }
 ?>