<?php 
//session_start();
#confirm.php
include('header.php');
if (isset($_SESSION["cart"]) ) {
$fname = $_SESSION['fname'];
$name = $_SESSION['fname'];
$email = $_SESSION['email'];
$house_no = $_SESSION['house_no'];
$landmark = $_SESSION['landmark'];
$locality = $_SESSION['locality'];
$cmessage = $_SESSION['message'];
$time = $_SESSION['timing'];
//$time = 'eight';
$date = $_SESSION['dateValue'];
//$date ='seventh';
$dateTime = date('Y-m-d H:i:s');
if(isset($_SESSION['newtotal']) && $_SESSION['newtotal'] != '') {
	$promo_code = $_SESSION['promo_code'];
	$promo_per = $_SESSION['promo_per'];
	$promo_amt = $_SESSION['promo_amt'];
} else {
	$promo_code = NULL;
	$promo_per = NULL;
	$promo_amt = NULL;
}

if(isset($_POST['pas']) && $_POST['pas'] != "") {
	if($_POST['pas'] == 1) { $payment = 'Pay After Service'; } elseif($_POST['pas'] == 2) { $payment = 'Pay Cash'; }
} else {
	$payment = "Pay Online";
}

	// Message Text Send to User
	$apiKey = urlencode('nEAW3sPN9z4-Oq0BvoWL2VrEDywAnuxZLvV9xIQjb5');
	$contact_no = $_SESSION['contact_no'];
	$contact = $_SESSION['contact_no'];
	// Message details
	#$rndno=rand(1000, 9999);
	#$message = urlencode("OTP number".$rndno);
	$numbers = array('91'.$contact_no);
	$sender = urlencode('SALZON');
    $message = ("Hey, $name. Your order has been successfully placed. We assure your best ever on-time salon experience.%nReach us anytime on +91 89250 70790 or contact@salozone.com.%nThank You for trusting us.%nRegards, %nSalozone Home Salon Services.%n https://www.salozone.com/");
	// Send the POST request with cURL
	$numbers = implode(',', $numbers);
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	//echo $response;exit;
	$tM = 0;
	$tQ = 0;
	$items = "";
	foreach ( $_SESSION["cart"] as $i ) {
		$cM = $products[$_SESSION["cart"][$i]];
		$pM = $_SESSION["price"][$i];
		$qM = $_SESSION["qty"][$i];
		$items .= ($cM. ";Qty. :".$qM);
		$tM = $tM + $pM;
		$tQ += $qM;
	}	
	$numbers1 = array('918925070790');
	$message1 = ("$name $contact $items $date $time $payment");
	// Send the POST request with cURL
	$numbers1 = implode(',', $numbers1);
	$data = array('apikey' => $apiKey, 'numbers' => $numbers1, "sender" => $sender, "message" => $message1);
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	//echo $response;exit;
	
		$numbers = "";
		$total = 0;
		$noQty = 0;
		$n = 1;
		$cate = array();
		$price = array();
		$qty = array();
		$mailText = '';
		$n = 0;
		foreach ( $_SESSION["cart"] as $i ) { 
			$numbers.=$i.",";
			$cate[] = $products[$_SESSION["cart"][$i]];
			$price[] = $_SESSION["price"][$i];
			$qty[] = $_SESSION["qty"][$i];
		?>
		<?php 
			$mailText .="
			<tr>
				<td valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;padding-top: 25px; color: #000000; font-family: sans-serif;' class='paragraph'>
					<table width='100%' border='1'>
						<tr>
						<td width='70%'>".$products[$_SESSION['cart'][$i]]."</td>
							<td width='15%'>".$_SESSION['price'][$i]."</td>
							<td width='15%'>".$_SESSION['qty'][$i]."</td>
						</tr>
					</table>
				</td>
			</tr>"; 
			$total = $total + $_SESSION["amounts"][$i];
			$noQty += $_SESSION["qty"][$i];
			$n++;
		}
		$totalAmt = $total;
		$totalQty = $noQty;
		$delivery = $_SESSION['delivery'];
		if(isset($_SESSION['newtotal']) && $_SESSION['newtotal'] != '') {
			$gTotal = ($_SESSION['gtotal']) - 0;//change done here to remove promo code
		} else {
			$gTotal = ($_SESSION['gtotal']);
		}
		$mailText .="
			<tr>
				<td valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;padding-top: 25px; color: #000000; font-family: sans-serif;' class='paragraph'>
					<table width='100%' border='1'>
						<tr>
						<td width='70%'></td>
							<td width='15%'><b>Sub Total:</b></td>
							<td width='15%'>".$total."</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;padding-top: 25px; color: #000000; font-family: sans-serif;' class='paragraph'>
					<table width='100%' border='1'>
						<tr>
						<td width='70%'></td>
							<td width='15%'><b>Delivery Charges:</b></td>
							<td width='15%'>".$delivery."</td>
						</tr>
					</table>
				</td>
			</tr>";
		
		if(isset($_SESSION['newtotal']) && $_SESSION['newtotal'] != '') {
			$mailText .="
			<tr>
				<td valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;padding-top: 25px; color: #000000; font-family: sans-serif;' class='paragraph'>
					<table width='100%' border='1'>
						<tr>
						<td width='70%'></td>
							<td width='15%'><b>Applied Promo Code (-):</b></td>
							<td width='15%'>".$promo_amt."</td>
						</tr>
					</table>
				</td>
			</tr>";
		}
		
			$mailText .="
			<tr>
				<td valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;padding-top: 25px; color: #000000; font-family: sans-serif;' class='paragraph'>
					<table width='100%' border='1'>
						<tr>
						<td width='70%'></td>
							<td width='15%'><b>Gross Total:</b></td>
							<td width='15%'>".$gTotal."</td>
						</tr>
					</table>
				</td>
			</tr>";
 
		setcookie("payment_type", $_POST['pas'], time()+60*60*24*100);
		setcookie("billno", 1, time()+60*60*24*100);
		setcookie("paidStatus", "pending", time()+60*60*24*100);
		setcookie("totalQty", $totalQty, time()+60*60*24*100);
		setcookie("totalAmt", $totalAmt, time()+60*60*24*100);
		setcookie("qtys", serialize($qty), time()+60*60*24*100);
		setcookie("amounts", serialize($price), time()+60*60*24*100);
		setcookie("delivery", ($delivery), time()+60*60*24*100);
		setcookie("gTotal", ($gTotal), time()+60*60*24*100);
		setcookie("cartitems", serialize($cate), time()+60*60*24*100);
		#print_r($_COOKIE);
		#if(isset($_COOKIE['cartitems'])) { echo "teting"; } else { echo "working"; }
	
	
	// Send Mail to User
	$companyName = 'SALOZONE';
	$companyMobile = '+91 89250 70790';
	$companyEmail = 'contact@salozone.com';
	$from = $companyEmail;
	$fromName = $companyName;
	$to = $email;
	$toName = $fname;
	$subject = "Booking Confirmation";
	$signature = '--<br>';
	$signature .= 'Sincerely,<br>';
	$signature .= 'Salozone Home Salon Services<br>';
	$showMessage = "<b><u>Booking Confirmation, details are given below:</u></b> <br><br>";
	$showMessage .= "Hey $toName, Your order has been successfully placed. We assure your best ever on-time salon experience. If you get any issues after service just send us a complaint ,we are always there for you. Reach us anytime on <a href='tel:918925070790'>+91 89250 70790</a> or <a href='mailto:contact@salozone.com'>contact@salozone.com</a><br>";
	$showMessage .= $mailText."<br>";
	$showMessage .= "Thank You for trusting us,<br>";
	$body =<<<EOF
		Dear $toName,<br><br>
		$showMessage<br>
EOF;
	//echo $body;exit;
	sendEmail($from, $fromName, $to, $toName, $subject, $body, $signature);
	
	$showMessage1 = '';
	$showMessage1 .= "Hey Admin, He/She $toName, contact no $contact_no, email id $to, order date: $date, order time: $time, payment type: $payment, address: $house_no, $locality, $landmark order has been successfully placed. Service Details given below:<br>";
	$showMessage1 .= $mailText."<br>";
	$body1 =<<<EOF
		Dear Salozone,<br><br>
		$showMessage1<br>
EOF;
	//echo $body;exit;
	sendEmail($from, $fromName, $from, $fromName, $subject, $body1, $signature);
	
	// Process your response here
	//echo $response;
	
	
	//Insert Customer Data & Order Data
	$getList = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_mobile` = '".$contact."'");
	$getCount = mysqli_num_rows($getList);
	if($getCount == 1) {
		$getRow = mysqli_fetch_array($getList);
		$userId = $getRow['cust_id'];
	} else {
		$userId = 0;
	}
		$order_item = json_encode($cate);
		$order_amt = json_encode($price);
		$order_qty = json_encode($qty);
		$tot_qty = $totalQty;
		$order_tot_amt = $totalAmt;
		$delivery_amt = $delivery;
		$coupon_id = $promo_code."-".$promo_per;
		$coupon_amt = $promo_amt;
		$gross_amt = $gTotal;
	if(isset($_POST['pas']) && $_POST['pas'] != "") {
		$order_id = strtotime($dateTime);
		$payment_type = $_POST['pas'];
		$payment_status = 0;
	} else {
		$order_id = strtotime($dateTime);
		$payment_type = 3;
		$payment_status = 1;
	}
		
	//	$insert = mysqli_query($con, "INSERT INTO `order_items` SET `cname` = '".$fname."', `cemail` = '".$email."', `chouse` = '".$house_no."', `clocality` = '".$locality."', `clandmark` = '".$landmark."', `cmessage` = '".$message."', `user_id` = '".$userId."', `order_item` = '".$order_item."', `order_amt` = '".$order_amt."', `order_qty` = '".$order_qty."', `tot_qty` = '".$tot_qty."', `order_tot_amt` = '".$order_tot_amt."', `coupon_id` = '".$coupon_id."', `coupon_amt` = '".$coupon_amt."', `delivery_amt` = '".$delivery_amt."', `gross_amt` = '".$gross_amt."', `order_date` = '".date('Y-m-d', strtotime($date))."', `order_time` = '".$time."', `order_status` = '0', `payment_type` = '".$payment_type."', `payment_status` = '".$payment_status."', `datetime` = '".$dateTime."', `order_id` = '".$order_id."'");
	$insert = mysqli_query($con, "INSERT INTO `order_items` SET  `user_id` = '".$userId."', `order_item` = '".$order_item."', `order_amt` = '".$order_amt."', `order_qty` = '".$order_qty."', `tot_qty` = '".$tot_qty."', `order_tot_amt` = '".$order_tot_amt."', `coupon_id` = '".$coupon_id."', `coupon_amt` = '".$coupon_amt."', `delivery_amt` = '".$delivery_amt."', `gross_amt` = '".$gross_amt."', `order_date` = '".date('Y-m-d', strtotime($date))."', `order_time` = '".$time."', `order_status` = '0', `payment_type` = '".$payment_type."', `payment_status` = '".$payment_status."', `datetime` = '".$dateTime."', `order_id` = '".$order_id."'");

?>

<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
<style>
ul {
    list-style-type: none;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}
.amount {
    display: block;
    font-size: 1.17em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}

@media screen and (max-width: 768px) {
	.gototop { position:unset; }
}
</style>
<?php

#echo "none".$log = $loginnn2;
?>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 animate-box">
					<h3 style="color:#fff;" class="text-center">Confirmation</h3>
					<div class="col-md-12">
					<form action="#" name="contact" id="contact">
						<div>
							
							<ul class="_2mioG8IfFu0HyLapNQp2db">
								<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
									<div class="text-center">
										<span class="text-success" id="bookData"><b><span><i class="icon-check"></i></span> Booking Accepted</b></span>
									</div>
									<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
									
										<!--<div class="_1kb-XXNt4wePQ_svwAQnhG">Beautician will visit you at the scheduled time.  In case of any problem - time delay or unsatisfactory service , we will provide you your refund. See our terms and conditions for more details</div>-->
										<div class="_1kb-XXNt4wePQ_svwAQnhG">
										<p>Hey <?php echo $fname; ?>, Your order has been successfully placed. We assure your best ever on-time salon experience. If you get any issues after service, just send us a complaint, we are always there for you. Reach us anytime on <a href="tel:918925070790">+91 89250 70790</a> or <a href="mailto:contact@salozone.com">contact@salozone.com</a>
										</p>
										<p>Thank You for trusting us,</p>
										<p>Regards,</p>
										<p>Salozone Home Salon Services.</p>
										</div>
									</div>
								</div>
							</ul>
							<?php  //print_r($_COOKIE[1]); ?>
							<?php if (isset($_COOKIE)) {   ?>
							<ul class="_2mioG8IfFu0HyLapNQp2db">
								<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
									<div class="text-center">
										<span class="text-success" id="bookData"><b>Your Suggested Services:</b></span>
									</div>
									<?php if(isset($_COOKIE['payment_type'])) {
											if($_COOKIE['payment_type'] == 1) { $paymentT = "Pay After Service"; } elseif($_COOKIE['payment_type'] == 2) { $paymentT = "Pay Cash"; } else { $paymentT = "Pay After Service"; } 
									?>
									<div class="text-center">
										<span class="text-danger" id="bookData"><b>Payment Type: <?php echo $paymentT; ?></b></span>
									</div>
									<?php } ?>									
							<?php $n = 0; 
								$cartitems =  unserialize($_COOKIE['cartitems'], ["allowed_classes" => false]);
								$amounts =  unserialize($_COOKIE['amounts'], ["allowed_classes" => false]);
								$qtys =  unserialize($_COOKIE['qtys'], ["allowed_classes" => false]);
							foreach($cartitems as $i) {
							?>
								<ul class="_2mioG8IfFu0HyLapNQp2db">
									<li class="_3jrW267vh0aDPPhnRT_hUr">
										<div class="clearfix _1gEr9qY7kjBQEL00TCslQ4">
											<div class="_2_zFy-1lucSUR_Du1Q018L">
												<h3><?php echo $i; ?></h3>
												<div class="U7DStEWrPcwr-0_rYHtNO">
													<div class="amount">? <?php echo( $amounts[$n] ); ?></div>
												</div>
											</div>
											<div class="_2EgDYr1YDcUmvMenP84XQ5" style="width:150px;margin-top:40px;">
												<span class="text-danger"><b> No of Qty: <?php if($qtys[$n] != '') { echo  $qtys[$n]; } else { echo 1; } ?></b></span>
											</div>
											<h3>? <?php echo $amounts[$n]; ?></h3>
										</div>
									</li>
								</ul>
							<?php $n++; } ?>
									<ul class="_2mioG8IfFu0HyLapNQp2db">
										<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
											<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
												<div class="_1kb-XXNt4wePQ_svwAQnhG">Subtotal</div>
												<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">? <?php echo $_COOKIE['totalAmt']; ?></div>
											</div>
											<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
												<div class="_1kb-XXNt4wePQ_svwAQnhG">Delivery Charges</div>
												<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">? <?php echo $_COOKIE['delivery']; ?></div>
											</div>
											<?php if(isset($_SESSION['newtotal']) && $_SESSION['newtotal'] != '') { ?>
												<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
													<div class="_1kb-XXNt4wePQ_svwAQnhG">Applied Promo Code (-)</div>
													<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ 0); ?></div>
												</div>
											<?php } ?>
											<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
												<div class="_1kb-XXNt4wePQ_svwAQnhG">Gross Total</div>
												<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">? <?php echo $_COOKIE['gTotal']; ?></div>
											</div>
										</div>
									</ul>
								</div>
							</ul>
							<?php } ?>
							<div class="col-md-12 text-center">
								<label for="message">Need Help?</label>
								<a href="complaints.php" title="Or if You have any Special Request?" class="">Or if You have any Special Request?</a>
								<a href="tel:8925070790" title="Book Through" class="cart"><span><img src="images/call32.png" width="40" height="40"/></span></a>
								<a href="https://api.whatsapp.com/send?phone=918925070790" title="Whatsapp" class="cart"><span><img src="images/whatsapp.png" width="50" height="50"/></span></a>
							</div>
						</div>

					</form>	
					</div>
				</div>
			</div>
			
		</div>
	</div>
		
<?php 
	header("Location:confirmation.php");
include('footer.php'); 
} else { 
	header("Location:index.php");
} 
?>	