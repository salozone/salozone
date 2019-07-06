<?php 
//session_start();
#payment.php
include('header.php');

if(isset($_SESSION["total"])) {
	$total = isset($_SESSION["total"]) ? $_SESSION["total"] : 0;
	if($total >= 100) { $delivery = 0; $_SESSION['delivery'] = $delivery; } else { $delivery = 0; $_SESSION['delivery'] = $delivery; }
	$amount = isset($_SESSION['newtotal']) ? (($total +$delivery) - 0) : ($total + $delivery);

	if(isset($_POST['do']) && $_POST['do'] == 'Paynow') {
		header("Location:paymentnow.php");
	}
	
?>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
<script type="text/javascript">
function ShowHideDiv2() {
    var reason = document.getElementById("payment_type");
    var dvPassport = document.getElementById("dvPassport");
    dvPassport.style.display = reason.value == "1" ? "block" : "none";
	var dvPassport2 = document.getElementById("dvPassport2");
    dvPassport2.style.display = reason.value == "2" ? "block" : "none";
}
</script>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 animate-box">
					<h3 class="text-center">Payment Page</h3>
					<div class="col-md-12">
						
					
					<ul class="_2mioG8IfFu0HyLapNQp2db">
						<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
							<?php if(isset($_GET['promo']) && $_GET['promo'] == '2') {
							echo "<h4 class='text-center text-danger'><b>Promo Code Expired.</b></h4>";
							} elseif(isset($_GET['promo']) && $_GET['promo'] == '1') {
									echo "<h4 class='text-center text-danger'><b>Promo Code Expired.</b></h4>";
							} elseif(isset($_GET['promo']) && $_GET['promo'] == '3') {
									echo "<h4 class='text-center text-danger'><b>Promo Code Expired.</b></h4>";
							}
							?>
							
							<form action="logininsert.php" name="promoForm" id="promoForm" method="post">
								<input type="hidden" name="do" value="Promo"/>
								<div class="col-md-12 form-group">
									<div class="col-lg-9">
										<input type="text" id="promo_code" name="promo_code" class="form-control" style="background-color:#d0c185;color:#000;" placeholder="Promo Code" autocomplete="off" required="required" maxlength="10">
									</div>
									<div class="row col-lg-3" align="center">
										<input style="background-color:black;margin-top:10px;" type="submit" name="promo_34" value="Apply" class="btn btn-primary">
									</div>
								</div>
							</form>
								<div class="row">&nbsp;</div>
							<form action="#" name="checkPay" id="checkPay" >
								<div class="col-md-12 form-group">
									<label for="Full Name" style="color:#000;" class="col-md-6">Payment Type:</label>
									<div>
										<select name="payment_type" id="payment_type" class="form-control" required="required" onchange="ShowHideDiv2();" style="background-color:#d0c185;color:#000;">
											<option value="">Select Option</option>
											<option value="1">Pay After Service</option>
											<option value="2">Pay Now</option>
										</select>
									</div>
								</div>
							</form>
							<form action="confirm.php" name="payOffline" id="payOffline" method="post">
								<div id="dvPassport" style="display: none">
									<div class="col-md-12 form-group">
										<label for="Full Name" style="color:#000;" class="col-md-6">Pay After Service (Online/ Cash):</label>
										<div class="col-md-6">
											<input type="radio" id="pas1" name="pas" value="1"> <span style="color:#000;">Pay Online After Service</span>
											<br><input type="radio" id="pas1" name="pas" value="2"> <span style="color:#000;">Pay Cash</span>
										</div>
									</div>
									<div class="form-group text-center">
										<input style="background-color:black;" type="submit" name="submit_34" value="Proceed" class="btn btn-primary">
									</div>
								</div>
							</form>
							<form action="" name="payment_form" id="payment_form" method="post">
								<input type="hidden" name="do" value="Paynow"/>
								<div id="dvPassport2" style="display: none">
									<div class="form-group text-center">
										<input type="submit" name="submit_35" value="Pay Online" style="background-color:black;margin-top:10px;" class="btn btn-primary" />
									</div>
								</div>
							</form>
							<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
								<div class="_1kb-XXNt4wePQ_svwAQnhG">Service Total</div>
								<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($total); ?></div>
							</div>
							<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
								<div class="_1kb-XXNt4wePQ_svwAQnhG">Delivery Charge</div>
								<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($delivery); ?></div>
							</div>
							<?php if(isset($_SESSION['newtotal']) && $_SESSION['newtotal'] != '') { ?>
								<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
									<div class="_1kb-XXNt4wePQ_svwAQnhG">Applied Promo Code (-)</div>
									<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ 0</div>
								</div>
							<?php } ?>
							<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
								<div class="_1kb-XXNt4wePQ_svwAQnhG">Amount Payable</div>
								<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($amount); ?></div>
							</div>
						</div>
					</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>	
<?php 
	} else {
		header("Location:checkout.php");
	}
include('footer.php'); ?>
