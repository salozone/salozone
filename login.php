<?php
#login.php
include('header.php');
?>


<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 animate-box">
					<center><h2>Login</h2></center>
					<div class="col-md-12 animate-box">
						<?php 
						if(isset($_GET['success']) && $_GET['success'] == '1') {
							echo "<p class='text-danger'>Please filled all the details...</p>";
						}
						if(isset($_GET['success']) && $_GET['success'] == '2') {
							echo "<p class='text-danger'>Invalid Login Data...";
						}
						
						?>
						<form action="login2.php" id="login_form" name="login_form" method="POST" >
							<input type="hidden" name="do" value="Login">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Enter Your Mobile No:</label>
									<div class="input-group">
										<div class="input-group-addon">+91</div>
										<input type="text" id="contact_no" name="contact_no" placeholder="Contact No" class="form-control" value="" required="required" pattern="^[6789]\d{9}$" title="Enter 10 digit valid mobile number" maxlength="10" autocomplete="off" /></span>
									</div>
								</div>
							</div>
							<div align="center">
							<input type="submit" name="login" value="Login" class="btn btn-primary btn-outline btn-lg " />
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 animate-box">
					<h2>Register</h2>
					<div class="col-md-12 animate-box">
					<?php 
						if(isset($_GET['success']) && $_GET['success'] == 'Done') {
							echo "<p class='text-success'>Registered Successfully...</p>";
						}
						if(isset($_GET['success']) && $_GET['success'] == 'Failed') {
							echo "<p class='text-danger'>Please filled all the details...</p>";
						}
						if(isset($_GET['success']) && $_GET['success'] == 'email') {
							echo "<p class='text-danger'>Entered email address was already registered, please change the email address...";
						}
						if(isset($_GET['success']) && $_GET['success'] == 'phone') {
							echo "<p class='text-danger'>Entered mobile number was already registered, please change the mobile number...";
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
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); ?>
