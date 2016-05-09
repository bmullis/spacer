<?php

session_start();
require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

//check if username already exists
//set url for request
$client = new couchClient($endpoint, $db_name);
//get users
try {
    $users = $client->getView('sofa','all_users');
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
    }
    exit(1);
}
//check for username match
$arrLength = count($users->rows);
$matches = 0;
for ($i = 0; $i < $arrLength; $i++) {
    if ($users->rows[$i]->value->email == $_POST['email']) {
        $matches++;
        $_SESSION['error_message'] = 'That username already exists';
        header ('location: ../index.php');
    }
}

if ($matches == 0) {
    //no match, so create new user
    $new_client = new couchClient($endpoint, $db_name);

    $new_doc = new stdClass();
    $new_doc->_id = $_POST['email'];
    $new_doc->email = $_POST['email'];
    $new_doc->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $new_doc->f_name = '';
    $new_doc->l_name = '';
    $new_doc->city = '';
    $new_doc->state = '';
    $new_doc->bio = '';
    $new_doc->prof_pic = 'img/blank_user.png';
    $new_doc->type = 'user';

    try {
        $response = $new_client->storeDoc($new_doc);
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage() . " (" . $e->getCode() . ")<br>\n";
    }
//add online token for user
    require_once('add_online.php');
//set session variables and redirect to dashboard
    unset($_SESSION['error_message']);
    $_SESSION['user'] = $_POST['email'];
    $_SESSION['prof_pic'] = 'img/blank_user.png';
    header('location: ../dashboard.php');
}

?>