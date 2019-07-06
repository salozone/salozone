<?php 
#feedback.php
include('header.php');

?>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<h3>Please provide us your valuable feedback so that we can serve you still better next time.</h3>
					<?php if(isset($_GET['success']) && $_GET['success'] == '1') {
							echo "<h3 class='text-center text-danger'><b>Feedback Send Successfully.</b></h3>";
					}
					?>
					<form action="method.php" name="feedbackForm" id="feedbackForm" method="post" enctype="multipart/form-data">
						<input type="hidden" name="do" value="feedback">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="Full Name" style="color:#d1c286;">Full Name:</label>
								<input type="text" id="fname" name="fname" class="form-control" placeholder="Your name" autocomplete="off" required="required" maxlength="75">
							</div>
							<div class="col-md-6">
								<label for="Full Name" style="color:#d1c286;">Contact No:</label>
								<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Your contact no" autocomplete="off" required="required" maxlength="50">
							</div>
						</div>

						<div class="row form-group">
							<label for="Website experience" class="col-md-6" style="color:#d1c286;">Website experience:</label>
							<div class="col-md-6">
								<input type="radio" id="website1" name="website" class="radio-inline" value="1"> Poor
								<input type="radio" id="website2" name="website" class="radio-inline" value="2"> Unsatisfactory
								<input type="radio" id="website3" name="website" class="radio-inline" value="3"> Average
								<input type="radio" id="website4" name="website" class="radio-inline" value="4"> Good
							</div>
						</div>
						
						<div class="row form-group">
								<label for="Ease in placing order" class="col-md-6" style="color:#d1c286;">Ease in placing order:</label>
							<div class="col-md-6">
								<input type="radio" id="placing1" name="placing" class="radio-inline" value="1"> Poor
								<input type="radio" id="placing2" name="placing" class="radio-inline" value="2"> Unsatisfactory
								<input type="radio" id="placing3" name="placing" class="radio-inline" value="3"> Average
								<input type="radio" id="placing4" name="placing" class="radio-inline" value="4"> Good
							</div>
						</div>
						
						<div class="row form-group">
								<label for="Pricing" class="col-md-6" style="color:#d1c286;">Pricing:</label>
							<div class="col-md-6">
								<input type="radio" id="pricing1" name="pricing" class="radio-inline" value="1"> Poor
								<input type="radio" id="pricing2" name="pricing" class="radio-inline" value="2"> Unsatisfactory
								<input type="radio" id="pricing3" name="pricing" class="radio-inline" value="3"> Average
								<input type="radio" id="pricing4" name="pricing" class="radio-inline" value="4"> Good
							</div>
						</div>
						
						<div class="row form-group">
								<label for="Staff Behaviour" class="col-md-6" style="color:#d1c286;">Staff Behaviour:</label>
							<div class="col-md-6">
								<input type="radio" id="behaviour1" name="behaviour" class="radio-inline" value="1"> Poor
								<input type="radio" id="behaviour2" name="behaviour" class="radio-inline" value="2"> Unsatisfactory
								<input type="radio" id="behaviour3" name="behaviour" class="radio-inline" value="3"> Average
								<input type="radio" id="behaviour4" name="behaviour" class="radio-inline" value="4"> Good
							</div>
						</div>
						
						<div class="row form-group">
								<label for="Service Experience" class="col-md-6" style="color:#d1c286;">Service Experience:</label>
							<div class="col-md-6">
								<input type="radio" id="experience1" name="experience" class="radio-inline" value="1"> Poor
								<input type="radio" id="experience2" name="experience" class="radio-inline" value="2"> Unsatisfactory
								<input type="radio" id="experience3" name="experience" class="radio-inline" value="3"> Average
								<input type="radio" id="experience4" name="experience" class="radio-inline" value="4"> Good
							</div>
						</div>
						
						<div class="row form-group">
								<label for="Do you want to change your beautician next time" class="col-md-6" style="color:#d1c286;">Do you want to change your beautician next time:</label>
							<div class="col-md-6">
								<input type="radio" id="change1" name="change" class="radio-inline" value="1"> Yes (Change my beautician)<br>
								<input type="radio" id="change2" name="change" class="radio-inline" value="2"> No (I want same beautician next time also)
							</div>
						</div>

						<div class="row form-group">
							
								<label for="Any special suggestions" class="col-md-6" style="color:#d1c286;">Any special suggestions:</label>
							<div class="col-md-6">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say suggestions" autocomplete="off" required="required" maxlength="1500"></textarea>
							</div>
						</div>
						<div class="form-group" align="center">
							<input style="background-color:black;" type="submit" name="submit_34" value="Send Feedback" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
<?php include('footer.php'); ?>	