<?php
#makeup.php
//session_start();
$pageTitle = 'Bridal | Body Polishing | Party | Engagement | Make Up | Reception';
$pageDesc = 'Makeup Service';
$slider = 'makeup';
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

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/bridal12.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1 style="font size:300px">BRIDAL, PRE-BRIDAL AND OTHERS </h1>
								
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
														<h3>Light</h3>
														Light make up for occasional events
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 500</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[92] ?></div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][92])  || $_SESSION["qty"][92] == 0){?>
													<a href="#!" onclick="cart(92);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(92)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][92] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(92)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Air Brush</h3>
														Premium Quality Light Make Up
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 799</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[102] ?></div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][102])  || $_SESSION["qty"][102] == 0){?>
													<a href="#!" onclick="cart(102);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(102)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][102] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(102)" style="margin: 0px; cursor: pointer;">+</span>
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
														Includes complete dress up and make up for Bride
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 8000</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE"> ₹ <?php echo $amounts[93] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][93])  || $_SESSION["qty"][93] == 0){?>
													<a href="#!" onclick="cart(93);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(93)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][93] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(93)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Bridal HD</h3>
														High Quality Premium Make Over
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 11999</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[108] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][108])  || $_SESSION["qty"][108] == 0){?>
													<a href="#!" onclick="cart(108);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(108)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][108] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(108)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Complete Pre-Bridal</h3>
														Includes complete Pre Bridal Treatments including facial and body polishing
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 5499</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[107] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][107])  || $_SESSION["qty"][107] == 0){?>
													<a href="#!" onclick="cart(107);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(107)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][107] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(107)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Body Polishing</h3>
														Waxing, Bleach, DeTanning, Scrub, Massage, Oiling and Polishing
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 4999</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[103] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][103])  || $_SESSION["qty"][103] == 0){?>
													<a href="#!" onclick="cart(103);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(103)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][103] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(103)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Bridal Facial</h3>
														Premium Quality Facial designed specially for Brides
 													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 1199</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[104] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][104])  || $_SESSION["qty"][104] == 0){?>
													<a href="#!" onclick="cart(104);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(104)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][104] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(104)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Engagement</h3>
														Light and Premium Make Over
 													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 2999</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[105] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][105])  || $_SESSION["qty"][105] == 0){?>
													<a href="#!" onclick="cart(105);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(105)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][105] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(105)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Reception</h3>
														Perfect Blend of Texture and Light Make Up
 													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 2999</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ <?php echo $amounts[106] ?></div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][106])  || $_SESSION["qty"][106] == 0){?>
													<a href="#!" onclick="cart(106);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(106)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][106] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(106)" style="margin: 0px; cursor: pointer;">+</span>
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