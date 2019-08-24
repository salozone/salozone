<?php //session_start();
#checkout.php
include('header.php');
?>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
	<style>
	@media screen and (max-width: 768px) {
		.gototop { position:unset; }
	}
	</style>
<style>
ul {
    list-style-type: none;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}
.amount {
    display: block;
    font-size: 1.17em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}

@media screen and (max-width: 768px) {
	.gototop { position:unset; }
}
</style>
<style>
.value-button {
  color:#000;
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  /*height: 20px;*/
  text-align: center;
  vertical-align: middle;
  /*padding: 11px 0;*/
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.value-button:hover {
  cursor: pointer;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

.number {
  text-align: center;
  border: none;
  /*border: 1px solid #ddd;*/
  margin: 0px;
  width: 40px;
  /*height: 40px;*/
  color:#000;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>	
<script>
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>
<script>
function increment_quantity(cart_id) {
    var inputQuantityElement = document.getElementById('input-quantity-'+cart_id).value;
    var newQuantity = parseInt(inputQuantityElement)+1;
    //document.getElementById("input-quantity-"+cart_id).value = newQuantity;
	save_to_db(cart_id, newQuantity);
}

function decrement_quantity(cart_id) {
    var inputQuantityElement = document.getElementById('input-quantity-'+cart_id).value;
	
    if(inputQuantityElement > 1) 
    {
    var newQuantity = parseInt(inputQuantityElement) - 1;
		//document.getElementById("input-quantity-"+cart_id).value = newQuantity;
		save_to_bd(cart_id, newQuantity);
    }
}

function save_to_db(cart_id, new_quantity) {
	//alert(new_quantity);
    $.ajax({
		url : "cart.php",
		data : "cart_id="+cart_id+"&new_quantity="+new_quantity,
		type : 'post',
		success : function(response) {
			location.reload();
			//console.log(response);
			//document.getElementById("input-quantity-"+cart_id).value = new_quantity;
		}
	});
}

function save_to_bd(cart_id, new_quantity) {
	//alert(new_quantity);
    $.ajax({
		url : "cart.php",
		data : "cart_id="+cart_id+"&minus_quantity="+new_quantity,
		type : 'post',
		success : function(response) {
			location.reload();
			//console.log(response);
			//document.getElementById("input-quantity-"+cart_id).value = new_quantity;
		}
	});
}
</script>	
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Items in Cart</h2>
							<br>
                            <br>
                            <?php
                            if ( isset($_SESSION["cart"]) && $_SESSION["cart"] != 0 && $_SESSION["cart"] != '') {
								$numbers = "";
                                $total = 0;
                                $noQty = 0;
								$n = 1;
                                foreach ( $_SESSION["cart"] as $i ) {
									$numbers.=$i.",";
									$cate = $_SESSION["cart"][$i];
									#echo $cate1 = $products[1];
                            ?>
								<div class="_22sNqyb5wdkrBAIZDQ2taJ">
									<ul class="_2mioG8IfFu0HyLapNQp2db">
										<li class="_3jrW267vh0aDPPhnRT_hUr">
											<div class="clearfix _1gEr9qY7kjBQEL00TCslQ4">
												<div class="_2_zFy-1lucSUR_Du1Q018L">
													<h3><?php echo( $products[$_SESSION["cart"][$i]] ); ?></h3>
													<div class="U7DStEWrPcwr-0_rYHtNO">
														<div class="amount">₹ <?php echo( $_SESSION["amounts"][$i] ); ?></div>
														<a href="cart.php?delete=<?php echo($i); ?>" title="Delete">
														<span class="_5iDG5-g_aEFcnjUHO2LgR"><span><i class="icon-trash"></i></span></span></a>
													</div>
												</div>
												<div class="_2EgDYr1YDcUmvMenP84XQ5" style="width:150px;margin-top:40px;">
													<?php if($_SESSION["qty"][$i] == 1) { ?>
														<a href="cart.php?delete=<?php echo ($i);?>"  class="value-button" id="decrease">-</a>
													<?php } else { ?>
														<div class="value-button" id="decrease" onClick="decrement_quantity('<?php echo $i; ?>');" value="Decrease Value">-</div>
													<?php } ?>
													<input type="number" class="number" id="input-quantity-<?php echo $i; ?>" value="<?php if($_SESSION["qty"][$i] != '') { echo $_SESSION["qty"][$i]; } else { echo 1; } ?>" min="1" style="color:#000"/>
													<div class="value-button" id="increase" onClick="increment_quantity('<?php echo $i?>');" value="Increase Value">+</div>
													<span>-</span>
													
												</div>
												<h3>₹ <?php echo $_SESSION["price"][$i]; ?></h3>
											</div>
										</li>
									</ul>
								</div>
                            <?php
									$total = $total + $_SESSION["amounts"][$i];
									$noQty += $_SESSION["qty"][$i];
									$n++;
                                }
                                $_SESSION["total"] = $total;
                                $_SESSION["noQty"] = $noQty;
								if($total >= 100) { $delivery = 0; } else { $delivery = 0; }
								$_SESSION["delivery"] = $delivery;
								if(isset($_SESSION["wallet_pts"]) && $_SESSION["wallet_pts"] > 0){
								echo '
								<br><form name = "walletPointsNotif" action = "" method = "POST">
								<input type="submit" id = "useWalletPoints" name="useWalletPoints" value="Use Wallet Points: '. $_SESSION["wallet_pts"] . '" style = "border-radius: 5px; color: grey; "/>
								</form><br>';
								if(isset($_POST['useWalletPoints']))
								{

									$total = $total - $_SESSION["wallet_pts"];
									$_SESSION['walletPointsUsed'] = true;
									echo '<script> document.getElementById("useWalletPoints").style.visibility = "hidden";
									</script>';
								}
								}
								$_SESSION["gtotal"] = $total+$delivery;
								
                            ?>
								<ul class="_2mioG8IfFu0HyLapNQp2db">
									<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
										<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
											<div class="_1kb-XXNt4wePQ_svwAQnhG">Subtotal</div>
											<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($total); ?></div>
										</div>
										<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
											<div class="_1kb-XXNt4wePQ_svwAQnhG">Delivery Charges</div>
											<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($delivery); ?></div>
										</div>
										<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
											<div class="_1kb-XXNt4wePQ_svwAQnhG">Total</div>
											<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($total+$delivery); ?></div>
										</div>
									</div>
								</ul>
							<br>
                            <br>
                            <br>
                            
                            <?php
                                } else {
                            ?>
								<span>Your Cart is Empty...</span>
							
							<?php } ?>
							<a class="btn btn-primary btn-outline btn-lg" href="index.php">Continue Shopping</a>
							<?php if(isset($total) && $total != '') {
						     ?>
									<a class="btn btn-primary btn-outline btn-lg" href="added.php">Continue Checkout</a>
									
							<?php } else { ?>
							<a class="btn btn-primary btn-outline btn-lg" href="main.php">Continue Checkout</a>
							<?php } ?>
                        </div>
					</div>
				</div>
			</div>
			
		</div>
		<?php if ( isset($_SESSION["cart"]) ) { ?>
		<div id="cartFooter" class="_1LETt-B9P8OaDZEUDWkA1R clearfix">
			<div class="_2hEPDSDdzr7qDls1i-ha_E clearfix">
				<div class="_32Q_Im_MCQ1Q1ZhnbBsaV9">
					<div class="_1fEoAtqLYX8y_v8J9euc1b">
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2GGL50SAl2PqjDcW_ug_HR"><?php echo $noQty; ?></div>
						</div>
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<span class="_1Cwk39HAqLUX4TCWB3Qug-" data-icon=""></span>
						</div>
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2zgkMefshvvvhjDF8R_K8r">
								<p class="_2-SpOqCHS84AG4E491eVtE">₹ <?php echo $_SESSION["total"]; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="sBsQi9wQvPA9gC7IuDqpF">
					<a href="added.php" style="color:#fff;"><span class="_32tH5ONd-X_lIEgzefZTOu">Continue</span>
					<span class="_3CdNMpKO9QvNBUY7iKuiu-"><span><i class="icon-long-arrow-right"></i></span></span></a>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div id="cartFooter" class="_1LETt-B9P8OaDZEUDWkA1R clearfix">
			<div class="_2hEPDSDdzr7qDls1i-ha_E clearfix">
				<div class="_32Q_Im_MCQ1Q1ZhnbBsaV9">
					<div class="_1fEoAtqLYX8y_v8J9euc1b">
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2GGL50SAl2PqjDcW_ug_HR">0</div>
						</div>
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<span class="_1Cwk39HAqLUX4TCWB3Qug-" data-icon=""></span>
						</div>
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2zgkMefshvvvhjDF8R_K8r">
								<p class="_2-SpOqCHS84AG4E491eVtE">₹ 0</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sBsQi9wQvPA9gC7IuDqpF">
					<a href="main.php" style="color:#fff;"><span class="_32tH5ONd-X_lIEgzefZTOu">Continue</span>
					<span class="_3CdNMpKO9QvNBUY7iKuiu-"><span><i class="icon-long-arrow-right"></i></span></span></a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
<?php
	include('footer.php');
?>