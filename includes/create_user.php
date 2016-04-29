<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$new_doc = new stdClass();
$new_doc->_id = $_POST['email'];
$new_doc->email = $_POST['email'];
$new_doc->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$new_doc->f_name = '';
$new_doc->l_name = '';
$new_doc->city = '';
$new_doc->state = '';
$new_doc->bio = '';
$new_doc->prof_pic = '';
$new_doc->type = 'user';
try {
    $response = $client->storeDoc($new_doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

$_SESSION['user'] = $_POST['email'];
header ('location: ../dashboard.php');

?>