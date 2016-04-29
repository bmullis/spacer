<?php

require_once ('secret.php');
session_start();

$url = $endpoint;

$fields = array(
    '_id' => $_POST['email'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    'f_name' => '',
    'l_name' => '',
    'city' => '',
    'state' => '',
    'bio' => '',
    'prof_pic' => '',
    'type' => 'user'
);

//url-ify the data for the POST
$fields_string = json_encode($fields);

//open connection
$ch = curl_init();
$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/json';

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$key");

//execute post
$result = curl_exec($ch);
$status = json_decode($result);

//close connection
curl_close($ch);

$_SESSION['rev'] = $result->_rev;
$_SESSION['user'] = $result->email;
$_SESSION['password'] = $result->password;
header ('location: ../dashboard.php');

?>