<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$new_doc = new stdClass();
$new_doc->msg_to = $_POST['msg_to'];
$new_doc->msg_from = $_POST['msg_from'];
$new_doc->msg_subject = $_POST['msg_subject'];
$new_doc->msg_message = $_POST['msg_message'];
$new_doc->timestamp = date("Y-m-d");
$new_doc->type = 'message';
$new_doc->unread = true;
try {
    $response = $client->storeDoc($new_doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

header ('location: ../dashboard.php');

?>