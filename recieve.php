<?php
// work with get or post

error_log("webhook recieved ");

require 'send.php';

require 'dialog.php';

require 'connectToDB.php';

require 'getSentMessages.php';

require 'sendAndUpdate.php';


error_log('inbound message ID: ' . $request['messageId']);
error_log('inbound message from: ' . $request['msisdn']);
error_log('inbound message body: ' . $responseText);
error_log('inbound message type: ' . $request['type']);

error_log("webhook finished ");


error_log('');
error_log('');
error_log('');


$conn->close();


?>