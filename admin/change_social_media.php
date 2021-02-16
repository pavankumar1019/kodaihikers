<?php
include '../db_connection/db.php';
if(isset($_POST['save2']))
{	 
	 $id=$_POST['socail_media'];
	 $link=$_POST['links'];

	 $sql = "UPDATE `kh_social_media_links` SET `links`='" . $link . "' WHERE id =2";
	 if (mysqli_query($conn, $sql)) {
        session_start();
  $_SESSION['message3'] = "Link Posted successfully !";
    header('location: form.php#social_media');
    exit();
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>