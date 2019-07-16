<?php
#hairstyling.php
//session_start();
$pageTitle = 'Hair Care Hair Spa | Smoothening | Straightening Services';
$pageDesc = 'Hairstyling Service';
$slider = 'hairstyling';
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

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/hairstyle1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Hair Care</h1>
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
														<h3>Half Hair Curls</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 250</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 149</div>
													
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][85])){?>
													<a href="#!" onclick="cart(85);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(85)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][85] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(85)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Full Hair Curls</h3>
													</div>
												</div>
												<!--<span class="vjh4-SZW6em1Ffdp2AMqH"><span data-icon="arrow-up"></span></span>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 300</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 199</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][86])){?>
													<a href="#!" onclick="cart(86);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(86)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][86] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(86)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Hair Style Designer</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 500</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 149(extra 50-150 may be charged)</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][87])){?>
													<a href="#!" onclick="cart(87);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(87)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][87] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(87)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Hair Spa - L'Oreal</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 849</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 549</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][109])){?>
													<a href="#!" onclick="cart(109);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(109)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][109] ?> </span>
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
														<h3>Hair Spa - Body Care</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 699</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 449</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][110])){?>
													<a href="#!" onclick="cart(110);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(110)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][110] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(110)" style="margin: 0px; cursor: pointer;">+</span>
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
														<h3>Hair Massage</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 499</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 249</div>
												</div>
												<div><!-- php is used to check the qty and display appropriate html -->
												<?php if(!isset($_SESSION["qty"][111])){?>
													<a href="#!" onclick="cart(111);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
												<?php }else { ?>
												
													<div class="_16cZZnX_tgIoQZPWgTijgv" id="show">
														<div class="_7as_2mMKYqXZrgetll6K1">
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														decrement_quantity(111)" style="margin: 0px; cursor: pointer; ">-</span>
														<span class="number" id="click" style="padding: 0 10px;
														margin-bottom: 0px; font-size: 16px;"> <?php echo $_SESSION["qty"][111] ?> </span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" onclick="
														increment_quantity(111)" style="margin: 0px; cursor: pointer;">+</span>
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