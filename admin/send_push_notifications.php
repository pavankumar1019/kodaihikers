<?php
$target_dir = "../push_notification/";
$target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$title=$_POST['title'];
$message=$_POST['message'];


// Check if image file is a actual image or fake image
if(isset($_POST["save3"])) {
  $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["fileToUpload2"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
      $first_name=$_FILES["fileToUpload2"]["name"];
      function sendMessage() {
        $content      = array(
            "en" => $message
        );
        $headings      = array(
            "en" => $title
        );
    
        $fields = array(
            'app_id' => "678fdb16-8824-4b99-b872-4281424bafbd",
            'included_segments' => array(
                'Subscribed Users'
            ),
            'contents' => $content,
            'headings' => $headings,
            "chrome_web_image" => "https://www.kodaihikers.com/push_notification/"."$first_name",
            "url" => "https://kodaihikers.com"
         
        );
        
        $fields = json_encode($fields);
        print("\nJSON sent:\n");
        print($fields);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic MmIyNzMxMzEtZjU3Zi00MjIzLWIyYmQtY2M1ODMxMzc2YTU3'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        return $response;
    }
    
    $response = sendMessage();
    $return["allresponses"] = $response;
    $return = json_encode($return);
    
    $data = json_decode($response, true);
    print_r($data);
    $id = $data['id'];
    print_r($id);
    
    print("\n\nJSON received:\n");
    print($return);
    print("\n");
      session_start();
      $_SESSION['message4'] = "Posted to all Subscribers.!";
        header('location: form.php#push_notification');
        exit();
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
?>