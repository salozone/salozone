<?php
session_start();
#otp.php
if(isset($_POST['do']) && $_POST['do'] == 'nextOtp') {
	$timing = $_POST['timing'];
	$dateValue = $_POST['dateValue'];
	$contact_no = $_POST['contact_no'];
	
	// Account details
	$apiKey = urlencode('nEAW3sPN9z4-Oq0BvoWL2VrEDywAnuxZLvV9xIQjb5');
	
	// Message details
	$otp=rand(1000, 9999);
	#$message = urlencode("OTP number".$rndno);
	$numbers = array('91'.$contact_no);
	$sender = urlencode('SALZON');
	$message = rawurlencode("Your OTP is $otp.%nWelcome to the Salozone family. Proceed with your booking to experience your best ever salon time with us.%nThank You.%n https://salozone.com");
	
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
	//echo $response;exit;
	
	$_SESSION['otp'] = $otp;
	$_SESSION['timing'] = $timing;
	$_SESSION['dateValue'] = $dateValue;
	$_SESSION['contact_no'] = $contact_no;
	
	header("Location:verify.php");
} else {
	//echo "test";exit;
	header("Location:timing.php");
}
?>