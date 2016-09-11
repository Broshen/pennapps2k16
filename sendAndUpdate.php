<?php

if($responseText == $request['text']){


	//increment response, and wrap around 
    $newresponse = $response + 1;
    if($newresponse == 9){
        $newresponse = 0;
    }

    $result = $conn->query("UPDATE `userstates` SET `state`=".$newresponse." WHERE 1");



}

?>