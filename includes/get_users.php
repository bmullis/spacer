<?php

require_once "couchPHP/couch.php";
require_once "couchPHP/couchClient.php";
require_once "couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

try {
    $users = $client->getView('sofa','all_users');
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
        echo "Document " . $view . " does not exist !";
    }
    exit(1);
}

?>