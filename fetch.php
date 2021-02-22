<?php
//action.php
include 'db_connion/db.php';

if(isset($_POST["action"]))
{

 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM kh_add_hire_vehicles where id=2";
  $result = mysqli_query($conn, $query);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row3 = $result->fetch_assoc()) {
  
                                ?>
        <tr>	
        <td>

        <div class="offers_item rating_4">
<div class="row">
        <div class="col-lg-12">
        <div class="offers_content">
            <div class="offers_price"><h2><?php echo $row3["pickup_place"]; ?></h2> <i class="fa fa-arrows-v" aria-hidden="true"></i> <h2><?php echo $row3["drop_place"]; ?></h2><span></span></div>
            <div class="rating_r rating_r_4 offers_rating" data-rating="4">
            <h4>Vehicle&nbsp; - &nbsp; <?php echo $row3["vehicle_name"]; ?></h4>
            </div>
            <p class="offers_text"><?php echo $row3["description"]; ?></p>
            <div class="offers_icons">
            <div class="offers_price">₹<?php echo $row3["price"]; ?><span></span></div>
            </div>
            <div class="button book_button"><a href="#">book now<span></span><span></span><span></span></a></div>
            
        </div>
        <div class="offer_reviews" style="font-size:3vw;">
                <div class="offer_reviews_content">
                    <div class="offer_reviews_title">Kilometers</div>
                    <div class="offer_reviews_subtitle"><?php echo $row3["duration"]; ?></div>
                </div>
                <div class="offer_reviews_rating text-center"><?php echo $row3["distance_km"]; ?></div>
            </div>
    </div>
</div>
</div>
        </td>	
</tr>

<?php
    }
    }
  }
 }
 ?>