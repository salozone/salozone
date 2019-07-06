<?php
#session_start();
include("header.php");
	
//Feedback
if(isset($_POST['do']) && $_POST['do'] == "feedback") {
	$fullname = $_POST['fname'];
	$contact_no = $_POST['mobile'];
	$website = $_POST['website'];
	$placing = $_POST['placing'];
	$pricing = $_POST['pricing'];
	$behaviour = $_POST['behaviour'];
	$experience = $_POST['experience'];
	$change = $_POST['change'];
	$message = $_POST['message'];
	if($website == 1) { $wName = "Poor"; } elseif($website == 2) { $wName = "Unsatisfactory"; } elseif($website == 3) { $wName = "Average"; } elseif($website == 4) { $wName = "Good"; } else { $wName = "None"; }
	if($placing == 1) { $plName = "Poor"; } elseif($placing == 2) { $plName = "Unsatisfactory"; } elseif($placing == 3) { $plName = "Average"; } elseif($placing == 4) { $plName = "Good"; } else { $plName = "None"; }
	if($pricing == 1) { $pName = "Poor"; } elseif($pricing == 2) { $pName = "Unsatisfactory"; } elseif($pricing == 3) { $pName = "Average"; } elseif($pricing == 4) { $pName = "Good"; } else { $pName = "None"; }
	if($behaviour == 1) { $bName = "Poor"; } elseif($behaviour == 2) { $bName = "Unsatisfactory"; } elseif($behaviour == 3) { $bName = "Average"; } elseif($behaviour == 4) { $bName = "Good"; } else { $bName = "None"; }
	if($experience == 1) { $eName = "Poor"; } elseif($experience == 2) { $eName = "Unsatisfactory"; } elseif($experience == 3) { $eName = "Average"; } elseif($experience == 4) { $eName = "Good"; } else { $eName = "None"; }
	if($change == 1) { $cName = "Yes (Change my beautician)"; } elseif($change == 2) { $cName = "No (I want same beautician next time also)"; } else { $cName = "None"; }
	

	$companyName = 'SALOZONE';
	$companyMobile = '+91 89250 70790';
	$companyEmail = 'contact@salozone.com';
	$from = $companyEmail;
	$fromName = $companyName;
	$to = $companyEmail;
	$toName = 'SALOZONE';
	$subject = "Feedback From Customer";
	$signature = '--<br>';
	$signature .= 'Sincerely,<br>';
	$signature .= 'SALOZONE Team<br>';
	$showMessage = "<b><u>Feedback from customer, details are given below:</u></b> <br><br>";
	$showMessage .= "<b>Full Name:</b> ". ucfirst($fullname)."<br>";
	$showMessage .= "<b>Contact No:</b> ". $contact_no."<br>";
	$showMessage .= "<b>Website experience:</b> ". $wName."<br>";
	$showMessage .= "<b>Ease in placing order:</b> ". $plName."<br>";
	$showMessage .= "<b>Pricing:</b> ". $pName."<br>";
	$showMessage .= "<b>Staff Behaviour:</b> ". $bName."<br>";
	$showMessage .= "<b>Service Experience:</b> ". $eName."<br>";
	$showMessage .= "<b>Do you want to change your beautician next time:</b> ". $cName."<br>";
	$showMessage .= "<b>Any special suggestions:</b> ". $message."<br>";
	$body =<<<EOF
		Dear $toName,<br><br>
		$showMessage<br>
EOF;

	sendEmail($from, $fromName, $to, $toName, $subject, $body, $signature);
	header("Location:feedback.php?success=1");
}

//Complaints
if(isset($_POST['do']) && $_POST['do'] == "complaints") {
	$fullname = $_POST['fname'];
	$contact_no = $_POST['mobile'];
	$type = $_POST['type'];
	$suggestions = $_POST['suggestions'];
	$ctype = $_POST['ctype'];
	$complaint = $_POST['complaint'];
	if($type == 1) { $tName = "Suggestions"; } else { $tName = "Complaints"; }
	
	$companyName = 'SALOZONE';
	$companyMobile = '+91 89250 70790';
	$companyEmail = 'contact@salozone.com';
	$from = $companyEmail;
	$fromName = $companyName;
	$to = $companyEmail;
	$toName = 'SALOZONE';
	$subject = "Request For Complaints/ Suggestions";
	$signature = '--<br>';
	$signature .= 'Sincerely,<br>';
	$signature .= 'SALOZONE Team<br>';
	$showMessage = "<b><u>Complaints/ Suggestions, details are given below:</u></b> <br><br>";
	$showMessage .= "<b>Full Name:</b> ". ucfirst($fullname)."<br>";
	$showMessage .= "<b>Contact No:</b> ". $contact_no."<br>";
	$showMessage .= "<b>Complaint/ Suggestions:</b> ". $tName."<br>";
	if($type == 1) {
		$showMessage .= "<b>Give us you suggestion here, in brief. We will respond to it at earliest:</b> ". $suggestions."<br>";
	} else {
		$showMessage .= "<b>Complaint Type:</b> ". $ctype."<br>";
		$showMessage .= "<b>Write your complaint here, we will get back to you at earliest. Your problem is our responsibility:</b> ". $complaint."<br>";
	}
	$body =<<<EOF
		Dear $toName,<br><br>
		$showMessage<br>
EOF;
	$to = "raman@redbacksolutions.in";
	$sender = 'contact@salozone.com';
	$headers = 'From:'.$sender."\r\n";
	$headers .= 'MIME-Version: 1.0'."\n";
	$headers .= 'Content-type: text/HTML; charset=utf-8'."\r\n";
	$body = "<html><body style='font-family: Tahoma;'>".htmlspecialchars(nl2br($_POST['msg']))."<br><font color='#0000FF'>".$_POST['email']."</font></body></html>";
	$send=mail($to, "WadiOnline News (Feedback) > ".$subject, $body, $headers);
	if($send){
	echo 'Thanks for your feedback!';
	} else {
	echo 'An Error happened in sending.';
	}
	exit;
	sendEmail($from, $fromName, $to, $toName, $subject, $body, $signature);
	header("Location:complaints.php?success=1");
}


//Professional
if(isset($_POST['do']) && $_POST['do'] == "professional") {
	$fullname = $_POST['fname'];
	$contact_no = $_POST['mobile'];
	$experience = $_POST['experience'];
	$yourself = $_POST['yourself'];
	$hire = $_POST['hire'];
	
	$companyName = 'SALOZONE';
	$companyMobile = '+91 89250 70790';
	$companyEmail = 'contact@salozone.com';
	$from = $companyEmail;
	$fromName = $companyName;
	$to = $companyEmail;
	$toName = 'SALOZONE';
	$subject = "Join as a Professional";
	$signature = '--<br>';
	$signature .= 'Sincerely,<br>';
	$signature .= 'SALOZONE Team<br>';
	$showMessage = "<b><u>Join as a Professional, details are given below:</u></b> <br><br>";
	$showMessage .= "<b>Full Name:</b> ". ucfirst($fullname)."<br>";
	$showMessage .= "<b>Contact No:</b> ". $contact_no."<br>";
	$showMessage .= "<b>Experience in Year:</b> ". $experience."<br>";
	$showMessage .= "<b>Write something about yourself (minimum 50 words):</b> ". $yourself."<br>";
	$showMessage .= "<b>Why should we hire you?:</b> ". $hire."<br>";
	
	$body =<<<EOF
		Dear $toName,<br><br>
		$showMessage<br>
EOF;

	sendEmail($from, $fromName, $to, $toName, $subject, $body, $signature);
	header("Location:join.php?success=1");
}
?>