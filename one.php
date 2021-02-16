<h1>Hello</h1>
<?PHP
function sendMessage() {
    $content      = array(
        "en" => 'English Message'
    );
    $headings      = array(
        "en" => 'Kodai Hikerswebsite'
    );
    $hashes_array = array();
    array_push($hashes_array, array(
        "id" => "like-button-2",
        "text" => "Like",
        "icon" => "https://www.kodaihikers.com/images/kodai_logo.png",
        "chrome_web_image" => "https://www.kodaihikers.com/images/kodai_logo.png",
        "url" => "https://kodaihikers.com"
    ));
    $fields = array(
        'app_id' => "678fdb16-8824-4b99-b872-4281424bafbd",
        'included_segments' => array(
            'Subscribed Users'
        ),
        'contents' => $content,
        'headings' => $headings,
        'web_buttons' => $hashes_array
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
?>