<?php
if(!empty($_FILES['picture']['name'])){
    //Include database configuration file
    include_once '../db_connection/db.php';
    
    
    //File uplaod configuration
    $result = 0;
    $uploadDir = "../../images/";
    $fileName = time().'_'.basename($_FILES['picture']['name']);
    $targetPath = $uploadDir. $fileName;
    $userId=$_POST['id'];
    //Upload file to server
    if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
        //Get current user ID from session
        
        
        //Update picture name in the database
        $update = $conn->query("UPDATE kh_dynamic_scrolling_banners SET path = '".$fileName."' WHERE id = $userId");
        
        //Update status
        if($update){
            $result = 1;
        }
    }
    
    //Load JavaScript function to show the upload status
    echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>  ';
}