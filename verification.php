<?php
#verification.php
if(isset($_GET['date']) && isset($_GET['timing'])) {
	$dateValue = $_GET['date'];
	$timing = $_GET['timing'];
}else {
	header("Location:timing.php");
}
include('header.php');
?>


<?php
if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) {
	$customer = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$_COOKIE['username']."'");
	$customer1 = mysqli_fetch_array($customer);
	$mobile = $customer1['cust_mobile'];
} else {
	$mobile= '';
}
?>

<link rel="stylesheet" href="css/qaModalChunk-d5020c0ce4ff05d365f1.css">
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Beautician should contact you on </h2>
				<div class="col-md-6 col-md-offset-3 animate-box">
					<div class="col-lg-12 animate-box">
						<form action="otp.php" id="timing_form" name="timing_form" method="post">
							<input type="hidden" name="do" value="nextOtp">
							<input type="hidden" name="timing" value="<?php echo $timing; ?>">
							<input type="hidden" name="dateValue" value="<?php echo $dateValue; ?>">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Enter your contact no:</label>
									<div class="input-group">
										<div class="input-group-addon">+91</div>
										<input type="text" id="contact_no" name="contact_no" placeholder="Contact No" class="form-control" value="<?php echo $mobile; ?>" required="required" pattern="^[6789]\d{9}$" title="Enter 10 digit valid mobile number" maxlength="10" autocomplete="off" /></span>
									</div>   
								</div>
							</div>
							<input type="submit" value="Continue" class="btn btn-primary btn-outline btn-lg" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); ?>