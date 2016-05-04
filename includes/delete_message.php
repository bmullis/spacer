<?php

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);
$message = $_GET['msg_id'];

// get the document
try {
    $doc = $client->getDoc($message);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

// permanently remove the document
try {
    $client->deleteDoc($doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

header ('location: ../inbox.php');

?>