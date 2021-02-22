<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{

 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_social_media_links ORDER BY id DESC";
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
     <td>'.$row["id"].'</td>
    
     <td>'.$row["info"].'</td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 ?>