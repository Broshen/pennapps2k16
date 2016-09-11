<?php


error_log("initialize started ");
require 'send.php';

require 'dialog.php';

require 'connectToDB.php';

if($response == 0){
	sendMsg($phonenumber, $text[0]);
	 $newresponse = $response + 1;
	    if($newresponse == 9){
	        $newresponse = 0;
	    }

    $result = $conn->query("UPDATE `userstates` SET `state`=".$newresponse." WHERE 1");
}

elseif($response == 4){
	sendMsg($phonenumber, $text[4]);
	$newresponse = $response + 1;
    if($newresponse == 9){
        $newresponse = 0;
    }
	    
    $result = $conn->query("UPDATE `userstates` SET `state`=".$newresponse." WHERE 1");
}

elseif($response ==6){
	sendMsg($phonenumber, $text[6]);
	$newresponse = $response + 1;
	    if($newresponse == 9){
	        $newresponse = 0;
	    }
	    
    $result = $conn->query("UPDATE `userstates` SET `state`=".$newresponse." WHERE 1");
}

else{
	echo "not this time ".$response;
}
$conn->close();


error_log("initialize finished ");

?>