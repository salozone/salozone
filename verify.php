<?php
//session_start();
#verify.php
include('header.php');
if(isset($_POST['do']) && $_POST['do'] == "verifyOtp") {
	$eotp = $_POST['otp'];
	$ootp = $_SESSION['otp'];
	if($ootp == $eotp) {
	    //Set Session 
		$contact_no = $_SESSION['contact_no'];
		$fname = $_SESSION['fname'];
		$email = $_SESSION['email'];
		$house_no = $_SESSION['house_no'];
		$locality = $_SESSION['locality'];
		$landmark = $_SESSION['landmark'];
		$message = $_SESSION['message'];
		$getList = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_mobile` = '".$contact_no."'");
		$getCount = mysqli_num_rows($getList);
		if($getCount == 1) {
			$getRow = mysqli_fetch_array($getList);
			
			$update = mysqli_query($con, "UPDATE `customer` SET `cust_houseno` = '".$house_no."', `cust_locality` = '".$locality."', `cust_landmark` = '".$landmark."', `cust_message` = '".$message."' WHERE `cust_id` = '".$getRow['cust_id']."'");
			setcookie("isLogin", 1, time()+60*60*24*100);
            setcookie("username", $getRow['cust_id'], time()+60*60*24*100);
		} else {
			$insert = mysqli_query($con, "INSERT INTO `customer` SET `cust_name` = '".$fname."', `cust_email` = '".$email."', `cust_houseno` = '".$house_no."', `cust_locality` = '".$locality."', `cust_landmark` = '".$landmark."', `cust_message` = '".$message."', `cust_added` = '".date('Y-m-d H:i:s')."', `cust_mobile` = '".$contact_no."'");
			if($insert) {
				$insertId = mysqli_insert_id();
				$getList = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_mobile` = '".$contact_no."'");
				$getCount = mysqli_num_rows($getList);
				if($getCount != 0) {
					$getRow = mysqli_fetch_array($getList);
					setcookie("isLogin", 1, time()+60*60*24*100);
					setcookie("username", $getRow['cust_id'], time()+60*60*24*100);
				}
			}
		}
		header('Location:payment.php');
	} else {
		header('Location:verify.php?otp=wrong');
	}
}

?>
<link rel="stylesheet" href="css/qaModalChunk-d5020c0ce4ff05d365f1.css">
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<h2 class="text-center">OTP Verification </h2>
				<div class="col-md-6 col-md-offset-3 animate-box">
					<div class="col-lg-12 animate-box">
						<div class="col-md-6">
							<a href="verification.php" title="Back" class="btn btn-primary btn-outline btn-sm"> Back </a>
						</div>
						<div class="col-md-6" align="right">
							<a href="verification.php?date=<?php echo $_SESSION['dateValue']; ?>&timing=<?php echo $_SESSION['timing']; ?>" title="Resend" class="btn btn-primary btn-outline btn-sm"> Resend </a>
						</div>
						<?php
							if(isset($_GET['otp'])) {
								echo "<div class='text-center'><b>Enter valid OTP</b></div>";
							}
							//echo $_SESSION['otp'];
						?>
						<form action="" id="verify_form" name="verify_form" method="post">
							<input type="hidden" name="do" value="verifyOtp">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Enter OTP:</label>
									<input type="text" id="otp" name="otp" placeholder="OTP No" class="form-control" value="" required="required" title="Enter 4 digit valid OTP number" maxlength="4" autocomplete="off" /></span>
								</div>
							</div>
							<div align="center"><input type="submit" value="Continue" class="btn btn-primary btn-outline btn-lg" /></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); ?>