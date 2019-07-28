<?php
#login_check.php
include('header.php');
if(isset($_SESSION['contact_no']) && isset($_SESSION['login_otp'])) {
?>


<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-12 animate-box">
					<h2>Login</h2>
					<div class="col-md-12 animate-box">
						<?php 
						if(isset($_GET['success']) && $_GET['success'] == '1') {
							echo "<p class='text-danger'>Please filled all the details...</p>";
						}
						if(isset($_GET['success']) && $_GET['success'] == '2') {
							echo "<p class='text-danger'>Invalid Login Data...";
						}
						if(isset($_GET['success']) && $_GET['success'] == '3') {
							echo "<p class='text-danger'>Invalid OTP No...";
						}
						?>
						<form action="logininsert.php" id="login_form" name="login_form" method="POST" >
							<input type="hidden" name="do" value="sendOtp">
							<?php if(isset($_GET['member']) && $_GET['member'] == '1') { ?>
							<input type="hidden" name="member" value="1">
							<?php }else{ ?>
							<input type="hidden" name="member" value="0">
							<?php } ?>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Enter Your OTP No:</label>
										<input type="text" id="login_otp" name="login_otp" placeholder="Enter OTP No" class="form-control" value="" required="required" pattern=".{4,}" title="Enter 4 digit valid OTP number" maxlength="4" autocomplete="off" />
								</div>
							</div>
							<input type="submit" name="login" value="Send" class="btn btn-primary btn-outline btn-lg" />
						</form>
					</div>
				</div>
				<!--<div class="col-md-6 col-xs-12 animate-box">
					<h2>Register</h2>
					<div class="col-md-12 animate-box">
						<?php 
						if(isset($_GET['success']) && $_GET['success'] == 'Done') {
							echo "<p class='text-success'>Registered Successfully...</p>";
						}
						if(isset($_GET['success']) && $_GET['success'] == 'Failed') {
							echo "<p class='text-danger'>Please filled all the details...</p>";
						}
						if(isset($_GET['success']) && $_GET['success'] == 'Change') {
							echo "<p class='text-danger'>Entered email address was already registered, please change the email address...";
						}
						?>
						<form action="logininsert.php" id="register_form" name="register_form" method="POST">
							<input type="hidden" name="do" value="Register">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Full Name:</label>
									<input type="text" name="fname" required="required" id="fname" autocomplete="off" placeholder="Full Name" title="Alphabetics Only" maxlength="75" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Email Address:</label>
									<input type="email" id="email" name="email" placeholder="Email Address" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" required="required" maxlength="75" autocomplete="off" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mobile Number:</label>
									<input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control" required="required" pattern="^[6789]\d{9}$" title="Enter 10 digit valid mobile number" maxlength="10" autocomplete="off" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Password:</label>
									<input type="password" id="password" name="password" placeholder="Password" class="form-control" pattern=".{6,}" maxlength="15" title="Input string should be either empty or between 6 - 15 characters" required="required"  />
								</div>
							</div>
						
							<input type="submit" name="register" value="Register" class="btn btn-primary btn-outline btn-lg" />
						</form>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); 
} else {
	header("Location:login.php");
}
?>
