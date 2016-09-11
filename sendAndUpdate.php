<?php

$newresponse=0;

error_log("send and updated started");
if($responseText == $request['text']){
	//send reply to database

    //send back the next message (if dialog needs to be continued)
    if($response != 0 && $response != 4 && $response != 6){

		sendMsg($phonenumber, $text[$response]);
	    
	    //increment response, and wrap around 
	    $newresponse = $response + 1;
	    if($newresponse == 9){
	        $newresponse = 0;
	    }
	    

	    //update the counter in the database
	    $result = $conn->query("UPDATE `userstates` SET `state`=".$newresponse." WHERE 1");

    }
    else{
		error_log("need to manually send next prompt");
    }


    //update the text values

}

error_log("send and updated finished");

?>