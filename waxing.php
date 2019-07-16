<?php
#waxing.php
#session_start();
$pageTitle = 'Waxing Service';
$pageDesc = 'Waxing Service';
$slider = 'waxing';
include('header.php');
?><!-- this script is used to increase or decrease values , it is the same script that is used in checkout.php where u can +/- cart item quantity -->
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
	
		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/waxing1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Waxing</h1>
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
														<h3>UnderArm-HoneyBee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"> 
												<div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 40</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 30</div>
												</div>
												<div>													
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][4])){?>
													<a href="#!" onclick="cart(4);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(4)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][4] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(4)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>UnderArm-Chocolate</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"> 
												<div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 60</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 50</div>
												</div>
												<div>
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][5])){?>
													<a href="#!" onclick="cart(5);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(5)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][5] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(5)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullHand-HoneyBee</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"> 
												<div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 180</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 119</div>
												</div>
												<div>
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][6])){?>
													<a href="#!" onclick="cart(6);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(6)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][6] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(6)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullHand-Chocolate</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"> 
											<div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 300</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
												</div>
												<div>
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][7])){?>
													<a href="#!" onclick="cart(7);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(7)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][7] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(7)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>HalfLegs-HoneyBee</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 180</div>
										 
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 119</div>
												</div>
												<div>
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][8])){?>
													<a href="#!" onclick="cart(8);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(8)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][8] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(8)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>HalfLegs-Chocolate</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E">
											<div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 200</div>
											 
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 149</div>
												</div>
												<div>
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][9])){?>
													<a href="#!" onclick="cart(9);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(9)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][9] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(9)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullLegs-HoneyBee</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 300</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
												</div>
												<div>		<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][10])){?>
													<a href="#!" onclick="cart(10);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(10)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][10] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(10)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullLegs-Chocolate</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 300</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 249</div>
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][11])){?>
													<a href="#!" onclick="cart(11);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(11)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][11] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(11)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullHands+FullLegs-Honeybee</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 480</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 299</div>
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][12])){?>
													<a href="#!" onclick="cart(12);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(12)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][12] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(12)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullHands+FullLegs-Chocolate</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 600</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 449</div>
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][13])){?>
													<a href="#!" onclick="cart(13);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(13)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][13] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(13)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullHands+FullLegs+Underarms-Honeybee</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 530</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 329</div>
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][14])){?>
													<a href="#!" onclick="cart(14);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(14)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][14] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(14)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullHands+FullLegs+Underarms-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 650</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 499</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][15])){?>
													<a href="#!" onclick="cart(15);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(15)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][15] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(15)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullFace-Honeybee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 150</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 99</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][16])){?>
													<a href="#!" onclick="cart(16);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(16)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][16] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(16)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullFace-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 180</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 119</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][17])){?>
													<a href="#!" onclick="cart(17);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(17)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][17] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(17)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>UpperLip-Honeybee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 30</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 20</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][18])){?>
													<a href="#!" onclick="cart(18);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(18)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][18] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(18)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>UpperLip-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 35</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 25</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][19])){?>
													<a href="#!" onclick="cart(19);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(19)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][19] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(19)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullBody-Honeybee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 900</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 599</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][20])){?>
													<a href="#!" onclick="cart(20);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(20)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][20] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(20)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullBody-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 1050</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 799</div>
													
												</div>
												<div>		<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][21])){?>
													<a href="#!" onclick="cart(21);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(21)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][21] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(21)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullBack(upper)-Honeybee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 200</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 149</div>
													
												</div>
												<div>		<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][22])){?>
													<a href="#!" onclick="cart(22);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(22)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][22] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(22)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>FullBack(upper)-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 280</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 175</div>
													
												</div>
												<div>
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][23])){?>
													<a href="#!" onclick="cart(23);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(23)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][23] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(23)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Stomach-Honeybee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 220</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 150</div>
													
												</div>
												<div>		<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][24])){?>
													<a href="#!" onclick="cart(24);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(24)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][24] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(24)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Stomach-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 280</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 175</div>
													
												</div>
												<div>		<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][25])){?>
													<a href="#!" onclick="cart(25);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(25)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][25] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(25)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Forehead-Honeybee</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 50</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹  30</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][26])){?>
													<a href="#!" onclick="cart(26);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(26)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][26] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(26)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Forehead-Chocolate</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 60</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 45</div>
													
												</div>
												<div>		
												<!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][27])){?>
													<a href="#!" onclick="cart(27);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(27)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][27] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(27)" style="margin: 0px; cursor: pointer;">+</span>
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