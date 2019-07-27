<?php
include("header.php");
#otp.php
if(isset($_POST['do']) && $_POST['do'] == 'Login') {
	$contact_no = $_POST['contact_no'];
	$check = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_mobile` = '".$contact_no."'");
	$count = mysqli_num_rows($check);
	if($count != 0) {
		// Account details
		$apiKey = urlencode('nEAW3sPN9z4-Oq0BvoWL2VrEDywAnuxZLvV9xIQjb5');
		
		// Message details
		$otp=rand(1000, 9999);
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
		
		$_SESSION['login_otp'] = $otp;
		$_SESSION['contact_no'] = $contact_no;
		
		if(isset($_POST['member']) && $_POST['member'] == '1') { 
			header("Location:login_check.php?member=1");
			 }else{ 
				header("Location:login_check.php");
			 } 
		
	} else {
		header("Location:login.php?success=2");
	}
} else {
	//echo "test";exit;
	header("Location:timing.php");
}
?>