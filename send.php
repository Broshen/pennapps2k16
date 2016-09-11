<?php
//set_time_limit(128);
// work with get or post

function sendMsg($PhoneNumber, $Text){

	error_log("sendMsg started");
	$url = 'https://rest.nexmo.com/sms/json?api_key=64ea2569&api_secret=78a55a178ef1394c&from=12674280424&to='.$PhoneNumber.'&text='.urlencode($Text);
	echo $url;

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$response = curl_exec($ch);

	error_log("sendMsg completed");
	return $response;
}


	error_log("send.php loaded");
?>