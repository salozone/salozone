<?php
#added.php
include('header.php');
if ($_SESSION["cart"] == "") {
	header("Location:checkout.php");
}
?>

<?php
if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) {
	$customer = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$_COOKIE['username']."'");
	$customer1 = mysqli_fetch_array($customer);
	$fname = $customer1['cust_name'];
	$email = $customer1['cust_email'];
	$house_no = $customer1['cust_houseno'];
	$locality = $customer1['cust_locality'];
	$landmark = $customer1['cust_landmark'];
	$cmessage = $customer1['cust_message'];
} else {
	$fname = '';
	$email = '';
	$house_no = '';
	$locality = '';
	$landmark = '';
	$cmessage = '';
}
?>
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="col-lg-12 animate-box">
					<h2>Billing Info</h2>
						<?php
						if(isset($_GET['success']) && $_GET['success'] == "Failed") {
							echo "<p class='text-danger'>Please filled all required details...</p>";
						}
						?>
						<form action="logininsert.php" method="post" id="payment_form" name="payment_form" class="form-horizontal" >
							<input type="hidden" name="do" value="Billing">
							<div class="row form-group">
								<div class="col-lg-6">
									<input type="text" id="fname" name="fname" placeholder="Full Name*" class="form-control" value="<?php echo $fname; ?>" required="required" autocomplete="off" maxlength="75" style="margin-top:5px;"/>
								</div>
								<div class="col-lg-6">
									<input type="email" id="email" name="email" placeholder="Email Address*" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" required="required" autocomplete="off" maxlength="75" style="margin-top:5px;" value="<?php echo $email; ?>"/>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<input type="text" id="house_no" name="house_no" placeholder="House Name/ Room No*" class="form-control" required="required" maxlength="250" autocomplete="off" style="margin-top:5px;" value="<?php echo $house_no; ?>" />
								</div>
								<div class="col-md-6">
									<input type="text" id="locality" name="locality" placeholder="Locality*" class="form-control" value="<?php echo $locality; ?>" required="required" maxlength="250" style="margin-top:5px;"/></span>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="landmark" name="landmark" maxlength="250" placeholder="Landmark" class="form-control" value="<?php echo $landmark; ?>"/></span>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Any Special Request/ Demand" maxlength="1000" ><?php echo $cmessage; ?></textarea>
								</div>
							</div>
							<div align="center">
							<input type="submit" value="Save" class="btn btn-primary btn-outline btn-lg " />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); ?>