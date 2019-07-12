<?php 
#complaints.php
include('header.php');
?>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/contact.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Complaints/ Suggestions</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<script type="text/javascript">
function ShowHideDiv2() {
    var reason = document.getElementById("type");
    var dvPassport = document.getElementById("dvPassport");
    dvPassport.style.display = reason.value == "1" ? "block" : "none";
	var dvPassport2 = document.getElementById("dvPassport2");
    dvPassport2.style.display = reason.value == "2" ? "block" : "none";
}
</script>	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row col-md-12">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<p>We have nothing more valuable than our customers. Please provide us with your valuable suggestions or complaints here. We will act upon that at earliest.
					</p>
					<p>Your problems are our responsibilities.</p>
					<p>We will provide you with partial/complete refund if your complaint is found relevant.</p>
					<p>Contact Us Now: 
						<a href="tel:8925070790" title="Book Through" class="cart"><span><img src="images/call32.png" width="40" height="40"/></span></a>
						<a href="https://api.whatsapp.com/send?phone=918925070790" title="Whatsapp" class="cart"><span><img src="images/whatsapp.png" width="50" height="50"/></span></a>
					</p>
					<h3>Request for a Call Back After filling this Box.</h3>
					<?php if(isset($_GET['success']) && $_GET['success'] == '1') {
							echo "<h3 class='text-center text-danger'><b>Complaint/ Suggestion Send Successfully.</b></h3>";
					}
					?>
					<form action="method.php" name="contact" id="contact" method="post" enctype="multipart/form-data">
						<input type="hidden" name="do" value="complaints">
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
							<label for="Full Name" style="color:#d1c286;" class="col-md-6">Complaint/ Suggestions:</label>
							<div class="col-md-6">
								<select id="type" name="type" class="form-control" required="required" onchange="ShowHideDiv2();">
									<option value="">Select Option</option>
									<option value="1">Suggestions</option>
									<option value="2">Complaint</option>
								</select>
							</div>
						</div>
						
						<div id="dvPassport" style="display: none">
							<div class="row form-group">
								<label for="Any special suggestions" style="color:#d1c286;" class="col-md-6">Give us you suggestion here, in brief. We will respond to it at earliest:</label>
								<div class="col-md-6">
									<textarea name="suggestions" id="suggestions" cols="30" rows="10" class="form-control" placeholder="Say suggestions" autocomplete="off"  maxlength="1500"></textarea>
								</div>
							</div>
						</div>
						
						<div id="dvPassport2" style="display: none">
							<div class="row form-group">
								<label for="Complaint" style="color:#d1c286;" class="col-md-6">Complaint Type:</label>
								<div class="col-md-6">
									<select id="ctype" name="ctype" class="form-control"  >
										<option value="">Select Option</option>
										<option value="Order/ Payment problems">Order/ Payment problems</option>
										<option value="Staff Misbehaved">Staff Misbehaved</option>
										<option value="Unsatisfactory Service">Unsatisfactory Service</option>
										<option value="Others">Others</option>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<label for="Any special suggestions" style="color:#d1c286;" class="col-md-6">Write your complaint here, we will get back to you at earliest. Your problem is our
								responsibility:</label>
								<div class="col-md-6">
									<textarea name="complaint" id="complaint" cols="30" rows="10" class="form-control" placeholder="Say complaint" autocomplete="off"  maxlength="1500"></textarea>
								</div>
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