<?php

require_once ('secret.php');
require_once ('functions.php');
session_start();

$url = $endpoint;

$ch = curl_init();
$id = $_POST['email'];
$password_input = $_POST['password'];
$url = $endpoint;

curl_setopt($ch, CURLOPT_URL, $url . $id);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$key");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Accept: application/json'
));

$response = curl_exec($ch);
$result = json_decode($response);
$arrLength = count($result);
$password = $result->password;

curl_close($ch);

$match = password_verify($password_input, $password);

if ($match == TRUE) {
    $_SESSION['user'] = $result->email;
    header ('location: ../dashboard.php');
} else {
    echo "no good.";
}

?>