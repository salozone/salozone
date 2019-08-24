<?php
#response.php
include('header.php');
$postdata = $_POST;
$msg = '';
$status = '';
if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$salt				=   "yPny25lkcE";
	$txnid 				= 	$postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
	$udf5				=   $postdata['udf5'];
	$mihpayid			=	$postdata['mihpayid'];
	$status				= 	$postdata['status'];
	$resphash				= 	$postdata['hash'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
	$dateTime = date('Y-m-d H:i:s');
	$orderId = strtotime(date('Y-m-d H:i:s'));
	
	if ($status == 'success'  && $resphash == $CalcHashString) {
		
		$msg = "Transaction Successful and Hash Verified...";
		//Do success order processing here...
		#$payInsert = mysqli_query($con, "INSERT INTO `tbl_payment` SET `customer_id` = '".$_COOKIE['username']."', `customer_email` = '".$email."', `payment_date` = '".$dateTime."', `txnid` = '".$txnid."', `paid_amount` = '".$amount."', `payment_status` = '".$status."', `payment_id` = '".$orderId."'"); 
	}
	else {
		//tampered or failed
		$msg = "Payment failed for Hasn not verified...";
	} 
}
else exit(0);
?>
<?php  ?>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 animate-box">
				<h3 class="text-center">Payment Status</h3>
				<ul class="_2mioG8IfFu0HyLapNQp2db">
					<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
						<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
							<div class="_1kb-XXNt4wePQ_svwAQnhG">Transaction Status:</div>
							<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);"><?php echo $status; ?></div>
						</div>
						<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
							<div class="_1kb-XXNt4wePQ_svwAQnhG">Message:</div>
							<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);"><?php echo $msg ?></div>
						</div>
					</div>
				</ul>
<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= 'https://salozone.com/confirm.php';
}, 1000);
</script>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>