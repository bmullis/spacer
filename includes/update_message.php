<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$doc_id = $_GET['msg_id'];

// get the document
try {
    $doc = $client->getDoc($doc_id);
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
        echo "Document " . $doc_id . " does not exist !";
    }
    exit(1);
}

$doc->unread = false;

// update the document on CouchDB server
try {
    $response = $client->storeDoc($doc);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

header ('location: ../view_message.php?msg_id=' . $doc_id);

?>