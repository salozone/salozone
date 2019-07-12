<?php 
#join.php
include('header.php');
?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/contact.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Join as a Professional</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<h3 class="text-center">Join as a Professional</h3>
					<?php if(isset($_GET['success']) && $_GET['success'] == '1') {
							echo "<h3 class='text-center text-danger'><b>Request Send Successfully.</b></h3>";
					}
					?>
					<form action="method.php" name="contact" id="contact" method="post" enctype="multipart/form-data">
						<input type="hidden" name="do" value="professional">
						<div class="row form-group">
							<label for="Full Name" style="color:#d1c286;" class="col-md-6">Full Name:</label>
							<div class="col-md-6">
								<input type="text" id="fname" name="fname" class="form-control" placeholder="Your name" autocomplete="off" required="required" maxlength="75">
							</div>
						</div>
						<div class="row form-group">
							<label for="Full Name" style="color:#d1c286;" class="col-md-6">Contact No:</label>
							<div class="col-md-6">
								<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Your contact no" autocomplete="off" required="required" maxlength="50">
							</div>
						</div>
						<div class="row form-group">
							<label for="Full Name" style="color:#d1c286;" class="col-md-6">Experience in Year:</label>
							<div class="col-md-6">
								<select id="experience" name="experience" class="form-control" required="required" >
									<option value="">Select Option</option>
									<option value="Less than a year">Less than a year</option>
									<option value="1 Year">1 Year</option>
									<option value="2 Years">2 Years</option>
									<option value="3 Years">3 Years</option>
									<option value="4 Years">4 Years</option>
									<option value="5 Years">5 Years</option>
									<option value="More than 5 Years">More than 5 Years</option>
								</select>
							</div>
						</div>
						
						<div class="row form-group">
							<label for="Write something about yourself(minimum 50 words)" style="color:#d1c286;" class="col-md-6">Write something about yourself (minimum 50 words):</label>
							<div class="col-md-6">
								<textarea name="yourself" id="yourself" cols="30" rows="10" class="form-control" placeholder="About Yourself" autocomplete="off" required="required" maxlength="1500"></textarea>
							</div>
						</div>
						
						<div class="row form-group">
							<label for="Why should we hire you?" style="color:#d1c286;" class="col-md-6">Why should we hire you? :</label>
							<div class="col-md-6">
								<textarea name="hire" id="hire" cols="30" rows="10" class="form-control" placeholder="Say Something" autocomplete="off" required="required" maxlength="1500"></textarea>
							</div>
						</div>
						
						<div class="form-group" align="center">
							<input style="background-color:black;" type="submit" name="submit_34" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
<?php include('footer.php'); ?>	