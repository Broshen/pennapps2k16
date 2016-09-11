<?php
//get the post request

error_log("get sent messages started");
$request = array_merge($_GET, $_POST);
$responseText = '';

if(!isset($request['text']) || !isset($request['type'])){
    error_log('not a text');
    return;
}
else{
	http_response_code(200);
}

if (isset($request['concat']) AND $request['concat'] == true ) {
    sendMsg($request['msisdn'], "Sorry, your message was too long! Please split it up into multiple messages.");
}
if($request['type']!="text"){
    sendMsg($request['msisdn'], "Sorry, your message wasn't recorded! There appears to be non UTF-8 characters, which are not supported at the moment.");
}
else{
    $responseText = $request['text'];
}


error_log("get sent messages ended");
?>