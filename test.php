<?php
// Account details
	$apiKey = urlencode('nEAW3sPN9z4-Oq0BvoWL2VrEDywAnuxZLvV9xIQjb5');
 
	// Prepare data for POST request
	$data = $apiKey;
 
	// Send the GET request with cURL
	$ch = curl_init('https://api.txtlocal.com/get_templates/?' . $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;exit;
?>