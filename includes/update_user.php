<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$doc_id = $_SESSION['user'];

// get the document
try {
    $doc = $client->getDoc($doc_id);
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
        echo "Document " . $doc_id . " does not exist !";
    }
    exit(1);
}

if ($_FILES['prof_pic']['name'] == "") {
    $image_path = $_SESSION['prof_pic'];
} else {
    move_uploaded_file($_FILES['prof_pic']['tmp_name'], "../img/profile_pics/" . $_FILES['prof_pic']['name']);
    $image_path = "img/profile_pics/" . $_FILES['prof_pic']['name'];
}

$cap_state = strtoupper($_POST['state']);

// make changes
$doc->_id = $_SESSION['user'];
$doc->f_name = $_POST['f_name'];
$doc->l_name = $_POST['l_name'];
$doc->city = $_POST['city'];
$doc->state = $cap_state;
$doc->bio = $_POST['bio'];
$doc->prof_pic = $image_path;

// update the document on CouchDB server
try {
    $response = $client->storeDoc($doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

$_SESSION['f_name'] = $_POST['f_name'];
$_SESSION['l_name'] = $_POST['l_name'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $cap_state;
$_SESSION['bio'] = $_POST['bio'];
$_SESSION['prof_pic'] = $image_path;

header ('location: ../profile.php');

?>