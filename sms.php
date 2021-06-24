<?php
// SEND SMS
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://sms.arkesel.com/sms/api?action=send-sms&api_key=OkJhdFo3ZGpYb21nRDZNWnQ=&to=0207728823&from=MoMo&sms=Payment received for GHS 1000.00 from Mustapha Rafick Current Balance:GHS 1000.06.Available Balance:GHS 1000.06.Reference:1111.Transaction ID:1234576343.TRANSACTION FEE:0.00.From:MobileMoney ',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 10,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET', ));
$response = curl_exec($curl);
curl_close($curl);
if ($response) {
	echo $response;
}
else{
	echo "<script>alert('Message not sent')</script>";
}


