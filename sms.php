<?php 

error_reporting(0);

$key ="API_KEY";
$to ="RECEIVER_NUMBER";
$msg ="YOUR_MESSAGE_HERE";
$sender_id ="YOUR_SENDER_ID";//11 characters maximum

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";

$response = file_get_contents($url);
echo $response;

 ?>
