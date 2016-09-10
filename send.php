<?php
set_time_limit(128);

$url = 'https://rest.nexmo.com/sms/json?api_key=64ea2569&api_secret=78a55a178ef1394c&from=12674280424&to=16478789158&text=FuckingWork&callback=http://boshencui.com/dear-me-calls/recieve.php';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

echo $response;
?>