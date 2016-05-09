<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$doc_id = $_POST['space_name'];

// get the document
try {
    $doc = $client->getDoc($doc_id);
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
        echo "Document " . $doc_id . " does not exist !";
    }
    exit(1);
}

if ($_FILES['space_image']['name'] == "") {
    $image_path = $_POST['space_curr_image'];
} else {
    move_uploaded_file($_FILES['space_image']['tmp_name'], "../img/space_images/" . $_FILES['space_image']['name']);
    $image_path = "img/space_images/" . $_FILES['space_image']['name'];
}

$cap_space = strtoupper($_POST['space_state']);

// make changes
$doc->_id = $_POST['space_name'];
$doc->space_name = $_POST['space_name'];
$doc->space_type = $_POST['space_type'];
$doc->space_desc = $_POST['space_desc'];
$doc->space_city = $_POST['space_city'];
$doc->space_state = $cap_space;
$doc->space_image = $image_path;

// update the document on CouchDB server
try {
    $response = $client->storeDoc($doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

header ('location: ../spaces.php');

?>