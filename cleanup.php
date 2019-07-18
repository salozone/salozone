<?php
#cleanup.php
//session_start();
$pageTitle = 'Cleanup Service';
$pageDesc = 'Cleanup Service';
$slider = 'cleanup';
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

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/cleanup1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Cleanup</h1>
								
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
														<h3>Fruit-Face</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 150</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 99</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][28])  || $_SESSION["qty"][28] == 0){?>
													<a href="#!" onclick="cart(28);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(28)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][28] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(28)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Fruit-Hand</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 250</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 180</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][29])  || $_SESSION["qty"][29] == 0){?>
													<a href="#!" onclick="cart(29);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(29)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][29] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(29)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Anti Tan-Face</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 250</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][30])  || $_SESSION["qty"][30] == 0){?>
													<a href="#!" onclick="cart(30);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(30)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][30] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(30)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Anti Tan-Hand</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 450</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 299</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][31])  || $_SESSION["qty"][31] == 0){?>
													<a href="#!" onclick="cart(31);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(31)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][31] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(31)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>VLCC-Face</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 200</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 149</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][32])  || $_SESSION["qty"][32] == 0){?>
													<a href="#!" onclick="cart(32);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(32)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][32] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(32)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>VLCC-Hand</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 350</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 249</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][33])  || $_SESSION["qty"][33] == 0){?>
													<a href="#!" onclick="cart(33);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(33)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][33] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(33)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Whitening-Face</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 250</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][38])  || $_SESSION["qty"][38] == 0){?>
													<a href="#!" onclick="cart(38);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(38)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][38] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(38)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Whitening-Hand</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 450</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 299</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][39])  || $_SESSION["qty"][39] == 0){?>
													<a href="#!" onclick="cart(39);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(39)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][39] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(39)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Gold-Face</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 250</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][42])  || $_SESSION["qty"][42] == 0){?>
													<a href="#!" onclick="cart(42);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(42)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][42] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(42)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Gold-Hand</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 500</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 299</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][43])  || $_SESSION["qty"][43] == 0){?>
													<a href="#!" onclick="cart(43);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(43)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][43] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(43)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Diamond-Face</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 350</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 299</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][44])  || $_SESSION["qty"][44] == 0){?>
													<a href="#!" onclick="cart(44);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(44)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][44] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(44)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Diamond-Hand</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 600</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 399</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][45])  || $_SESSION["qty"][45] == 0){?>
													<a href="#!" onclick="cart(45);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(45)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][45] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(45)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Pearl-Face</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 250</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][46])  || $_SESSION["qty"][46] == 0){?>
													<a href="#!" onclick="cart(46);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(46)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][46] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(46)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Pearl-Hand</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 450</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 299</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][47])  || $_SESSION["qty"][47] == 0){?>
													<a href="#!" onclick="cart(47);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(47)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][47] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(47)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Lotus-Face</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 350</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 249</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][34])  || $_SESSION["qty"][34] == 0){?>
													<a href="#!" onclick="cart(34);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(34)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][34] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(34)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Lotus-Hand</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 600</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 349</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][35])  || $_SESSION["qty"][35] == 0){?>
													<a href="#!" onclick="cart(35);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(35)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][35] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(35)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Shehnaz-Face</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 600</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 449</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][36])  || $_SESSION["qty"][36] == 0){?>
													<a href="#!" onclick="cart(36);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(36)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][36] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(36)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Shehnaz-Hand</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 800</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 599</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][37])  || $_SESSION["qty"][37] == 0){?>
													<a href="#!" onclick="cart(37);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(37)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][37] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(37)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Charcoal-Face</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 600</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 449</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][40])  || $_SESSION["qty"][40] == 0){?>
													<a href="#!" onclick="cart(40);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(40)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][40] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(40)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Charcoal-Hand</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 800</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 599</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][41])  || $_SESSION["qty"][41] == 0){?>
													<a href="#!" onclick="cart(41);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(41)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][41] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(41)" style="margin: 0px; cursor: pointer;">+</span>
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