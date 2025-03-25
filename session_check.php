<?php
$response = array("sessionActive" => false);

if (isset($_COOKIE['username'])) {
    $response["sessionActive"] = true;
}

header('Content-Type: application/json');
echo json_encode($response);
?>
