<?php

require_once "couchPHP/couch.php";
require_once "couchPHP/couchClient.php";
require_once "couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

try {
    $messages = $client->descending(TRUE)->getView('sofa','all_messages');
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
        echo "Document " . $view . " does not exist !";
    }
    exit(1);
}

?>