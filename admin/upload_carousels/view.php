<?php
include '../../db_connection/db.php';
	$sql = "SELECT * FROM kh_dynamic_scrolling_banners";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		        <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Home page Carousels</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                               <img class="img-fluid" style="width: 300px;" src="../images/<?=$row['path'];?>" alt="">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Choose Image To Change</label>
                                                <input type="hidden" name="" value="<?=$row['id'];?>">
                                                <input id="uploadImage" type="file" accept="image/*" name="image" class="uploadimg"/>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div>
                                                <button type="button" name="save" class="buttonload btn btn-outline-primary btn-lg btn-block"  id="upload_carousels"> 
                                      <i class="loder fa fa-refresh fa-spin"></i>Change Image</button>
                                            </div>
                                        </form>
                                        <br>
                                        <span  id="err" style="color: rgb(2, 172, 121);visibility: hidden;" class="border border-success"></span>
                                    </div>
                                </div>
                            </div>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
  