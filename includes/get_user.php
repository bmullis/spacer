<?php

session_start();
require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

//set URL
$client = new couchClient($endpoint, $db_name);

//doc id is user email input
$doc_id = $_POST['email'];
//password is user password input
$password_input = $_POST['password'];

//establish connection
try {
    $doc = $client->getDoc($doc_id);
} catch ( Exception $e ) {
    //if user isn't found return error
    if ( $e->getCode() == 404 ) {
        $_SESSION['error_message'] = 'We couldn\'t find that email address';
        header ('location: ../index.php');
    }
    exit(1);
}
$password = $doc->password;
$match = password_verify($password_input, $password);
//test if passwords match then redirect to dashboard
if ($match == TRUE) {
    $_SESSION['user'] = $doc->email;
    $_SESSION['password'] = $doc->password;
    $_SESSION['f_name'] = $doc->f_name;
    $_SESSION['l_name'] = $doc->l_name;
    $_SESSION['city'] = $doc->city;
    $_SESSION['state'] = $doc->state;
    $_SESSION['bio'] = $doc->bio;
    $_SESSION['prof_pic'] = $doc->prof_pic;
    //if passwords match add online token and unset error message
    //redirect to dashboard
    require_once ('add_online.php');
    unset($_SESSION['error_message']);
    header ('location: ../dashboard.php');
} else {
    //if passwords do not match redirect back to index with error set
    $_SESSION['error_message'] = 'Incorrect password';
    header ('location: ../index.php');
}

?>