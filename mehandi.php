<?php
#mehandi.php
//session_start();
$pageTitle = 'Mehandi Service';
$pageDesc = 'Mehandi Service';
$slider = 'mehandi';
include('header.php');
?>
<!-- this script is used to increase or decrease values , it is the same script that is used in checkout.php where u can +/- cart item quantity -->
<script>
function increment_quantity(cart_id) {
    var inputQuantityElement = document.getElementById("click").innerHTML ;
    var newQuantity = parseInt(inputQuantityElement)+1;
    //document.getElementById("input-quantity-"+cart_id).value = newQuantity;
	save_to_db(cart_id, newQuantity);
}

function decrement_quantity(cart_id) {
    var inputQuantityElement = document.getElementById("click").innerHTML ;
    if(inputQuantityElement > 1) 
    {
    var newQuantity = parseInt(inputQuantityElement) - 1;
		//document.getElementById("input-quantity-"+cart_id).value = newQuantity;
		save_to_bd(cart_id, newQuantity);
    }else {
			//alert(new_quantity);
			$.ajax({
		url : "cart.php",
		data : "delete="+cart_id,
		type : 'Get',
		success : function(response) {
			location.reload();
			//console.log(response);
			//document.getElementById("input-quantity-"+cart_id).value = new_quantity;
		}
	});
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

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/Mehendi1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Mehandi</h1>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

<?php sliderMenu($slider); ?>
		
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					
					<div class="row animate-box">
						<div class="col-md-12 text-center fh5co-heading">
							<h2>Services</h2>
							<br>
							<br>
							<ul class="_1DHBhD10Ng1cgRavn1k2gO">
								<li class="_3QIOJSEZcqAoi1Z0v761B- col-md-6">
									<div class="_3eR0Ps0OiYMoBRFr33yxgu">
										<div class="_20fQsT4R-EBnAmG2j8hXHy">
											<div class="_2eJX4e-DqumFa1IJYnSoa4">
												<div class="bV9pH8LGyb_s16WgD4UkH">
													<div class="_1mO91OZK1sBcC7N5welcDI">
														<h3>Simple</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 400</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 150(Extra 50-150 for designer)</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][95])  || $_SESSION["qty"][95] == 0){?>
													<a href="#!" onclick="cart(95);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(95)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][95] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(95)" style="margin: 0px; cursor: pointer;">+</span>
														</div>
													</div>
													<?php } ?>
												</div>
											</div>
											
										</div>
									</div>
								</li>
								<li class="_3QIOJSEZcqAoi1Z0v761B- col-md-6">
									<div class="_3eR0Ps0OiYMoBRFr33yxgu">
										<div class="_20fQsT4R-EBnAmG2j8hXHy">
											<div class="_2eJX4e-DqumFa1IJYnSoa4">
												<div class="bV9pH8LGyb_s16WgD4UkH">
													<div class="_1mO91OZK1sBcC7N5welcDI">
														<h3>Bridal</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 7000</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 5000</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][96])  || $_SESSION["qty"][96] == 0){?>
													<a href="#!" onclick="cart(96);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(96)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][96] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(96)" style="margin: 0px; cursor: pointer;">+</span>
														</div>
													</div>
													<?php } ?>
												</div>
											</div>
											
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php footerCart(); ?>	
<?php include('footer.php'); ?>