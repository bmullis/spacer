<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$owner_id = $_SESSION['user'];

move_uploaded_file($_FILES['space_image']['tmp_name'], "../img/space_images/" . $_FILES['space_image']['name']);

$image_path = "img/space_images/" . $_FILES['space_image']['name'];

$new_doc = new stdClass();
$new_doc->_id = $_POST['space_name'];
$new_doc->space_name = $_POST['space_name'];
$new_doc->space_type = $_POST['space_type'];
$new_doc->space_desc = $_POST['space_desc'];
$new_doc->space_owner = $owner_id;
$new_doc->space_city = $_POST['space_city'];
$new_doc->space_state = $_POST['space_state'];
$new_doc->space_image = $image_path;
$new_doc->type = 'space';
try {
    $response = $client->storeDoc($new_doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

?>