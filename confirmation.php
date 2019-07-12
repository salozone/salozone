<?php 
//session_start();
#confirmation.php
$slider='';
include('header.php');
if(isset($_COOKIE['gTotal'])) {

	unset($_SESSION["qty"]); //The quantity for each product
    unset($_SESSION["amounts"]); //The amount from each product
    unset($_SESSION["total"]); //The total cost
    unset($_SESSION["cart"]); //Which item has been chosen
    unset($_SESSION["price"]); //Which item price
    unset($_SESSION["contact_no"]); //Which contact no
    unset($_SESSION["otp"]); //Which otp no
    unset($_SESSION["delivery"]); //Which otp no
    unset($_SESSION["gTotal"]); //Which otp no
    session_destroy();

	$customer = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$_COOKIE['username']."'");
	$customer1 = mysqli_fetch_array($customer);
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
										<p>Hey <?php echo $customer1['cust_name']; ?>, Your order has been successfully placed. We assure your best ever on-time salon experience. If you get any issues after service, just send us a complaint, we are always there for you. Reach us anytime on <a href="tel:918925070790">+91 89250 70790</a> or <a href="mailto:contact@salozone.com">contact@salozone.com</a>
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
													<div class="amount">₹ <?php echo( $amounts[$n] ); ?></div>
												</div>
											</div>
											<div class="_2EgDYr1YDcUmvMenP84XQ5" style="width:150px;margin-top:40px;">
												<span class="text-danger"><b> No of Qty: <?php if($qtys[$n] != '') { echo  $qtys[$n]; } else { echo 1; } ?></b></span>
											</div>
											<h3>₹ <?php echo $amounts[$n]; ?></h3>
										</div>
									</li>
								</ul>
							<?php $n++; } ?>
									<ul class="_2mioG8IfFu0HyLapNQp2db">
										<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
											<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
												<div class="_1kb-XXNt4wePQ_svwAQnhG">Subtotal</div>
												<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo $_COOKIE['totalAmt']; ?></div>
											</div>
											<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
												<div class="_1kb-XXNt4wePQ_svwAQnhG">Delivery Charges</div>
												<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo $_COOKIE['delivery']; ?></div>
											</div>
											<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
												<div class="_1kb-XXNt4wePQ_svwAQnhG">Gross Total</div>
												<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo $_COOKIE['gTotal']; ?></div>
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
				<div class="col-md-12">
					<h3 style="color:#fff;" class="text-center">Recommended Service</h3>
					<?php sliderMenu($slider); ?>
				</div>
			</div>
			
		</div>
	</div>
	
<?php include('footer.php'); 
} else {
    #header("Location:index.php");
}

?>	