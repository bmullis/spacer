<?php

$online_user = new stdClass();
$online_user->_id = 'online_' . $_POST['email'];
$online_user->user = $_POST['email'];
$online_user->type = 'online_user';

try {
    $response = $client->storeDoc($online_user);
} catch (Exception $e) {
    echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
}

?>