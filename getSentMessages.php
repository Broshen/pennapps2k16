<?php
//get the post request
$request = array_merge($_GET, $_POST);
$responseText = '';

if(!isset($request['text']) || !isset($request['type'])){
    error_log('not a text');
    return;
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
?>