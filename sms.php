<?php 

error_reporting(0);

$key ="sS4WwBPm47oTTXXB7c02kNOVm";
$to ="0207728823";
$msg ="Payment received for GHS 1000.00 from Mustapha Rafick Current Balance:GHS 1000.06.Available Balance:GHS 1000.06.Reference:1111.Transaction ID:1234576343.TRANSACTION FEE:0.00.                  From:MTNMobileMoney.";
$sender_id ="HMS-TaTU";//11 characters maximum

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";

$response = file_get_contents($url);
echo $response;

 ?>