<?php
	// Account details
	$apiKey = urlencode('nEAW3sPN9z4-Oq0BvoWL2VrEDywAnuxZLvV9xIQjb5');
	
	// Message details
	$numbers = array(918507005231, 918248963788);
	$sender = urlencode('TXTLCL');
	$rndno=rand(1000, 9999);
	$message = urlencode("OTP number".$rndno);
	
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>