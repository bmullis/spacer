<?php

session_start();

require_once "../couchPHP/couch.php";
require_once "../couchPHP/couchClient.php";
require_once "../couchPHP/couchDocument.php";
require_once "secret.php";

$client = new couchClient($endpoint, $db_name);

$doc_id = $_POST['email'];
$password_input = $_POST['password'];

try {
    $doc = $client->getDoc($doc_id);
} catch ( Exception $e ) {
    if ( $e->getCode() == 404 ) {
        echo "Document " . $doc_id . " does not exist !";
    }
    exit(1);
}
echo $doc->_id.' revision '.$doc->_rev;

$password = $doc->password;

$match = password_verify($password_input, $password);

if ($match == TRUE) {
    $_SESSION['user'] = $doc->email;
    $_SESSION['password'] = $doc->password;
    $_SESSION['f_name'] = $doc->f_name;
    $_SESSION['l_name'] = $doc->l_name;
    $_SESSION['city'] = $doc->city;
    $_SESSION['state'] = $doc->state;
    $_SESSION['bio'] = $doc->bio;
    $_SESSION['prof_pic'] = $doc->prof_pic;
    header ('location: ../dashboard.php');
} else {
    echo "no good.";
}

?>