<?php
session_start();
#resendOtp.php
if(isset($_GET['do']) && $_GET['do'] == 'resend') {
	$contact_no = $_SESSION['contact_no'];
	// Account details
	$apiKey = urlencode('nEAW3sPN9z4-Oq0BvoWL2VrEDywAnuxZLvV9xIQjb5');
	
	// Message details
	//$rndno= rand(1000, 9999);
	$rndno= $_SESSION['otp'];
	#$message = urlencode("OTP number".$rndno);
	$numbers = array(919786860702, '91'.$contact_no);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode("Your OTP is ".$rndno.". Welcome to the Salozone family. Proceed with your booking to experience your best ever salon time with us.");
	
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
	//echo $response;	
	header("Location:verify.php");
} else {
	//echo "test";exit;
	header("Location:verify.php");
}
?>