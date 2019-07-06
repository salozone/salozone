<?php 
#contact.php
include('header.php');
?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/contact.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">
								<b>Salozone Home Salon Services</b><br>
								Mithapur Bus Stand Road,<br>
								Opposite NIFT college,<br>
								Patna - 800001<br>
								Bihar.
							</li>
							<li class="phone"><a href="tel:8925070790" style="color:#fff;">+91 89250 70790</a></li>
							<li class="email"><a href="mailto:contact@salozone.com" style="color:#fff;">contact@salozone.com</a></li>
							<li class="url">salozone.com</li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="" name="contact" id="contact" method="post">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname" autocomplete="off" required="required" maxlength="75">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname" autocomplete="off" required="required" maxlength="50">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" class="form-control" placeholder="Your email address" autocomplete="off" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" maxlength="75">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message" autocomplete="off" required="required" maxlength="100">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" autocomplete="off" required="required" maxlength="1500"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input style="background-color:black;" type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
<?php include('footer.php'); ?>	