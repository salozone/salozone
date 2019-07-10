<?php
#dressup.php
//session_start();
$pageTitle = 'Dressup Service';
$pageDesc = 'Dressup Service';
$slider = 'dressup';
include('header.php');
?>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(withouttext/dressup1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1 style="font-family: 'Cinzel', serif;text-shadow: 2px 2px #FF5733;color:#F4F0EC;">Dressup</h1>
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
														<h3>Dressup</h3>
													</div>
												</div>
												<!--<a href="cart.php" style="color:#000;" title="Delete"><span class="vjh4-SZW6em1Ffdp2AMqH" title="Delete"><span><i class="icon-trash"></i></span></span></a>-->
											</div>
											<div class="_1uGiX5DrQ7U17G8-N73t9E"><div class="_3SZyCgc61sD1kpi28Hif22 k6o2mAfYFzlWUusv_7kvE">₹ 100</div>
												<div class="_3WEEdfo6HvqjUVVkX8c5Tt XcqLOYdtiv_3WgzzX_6P_">
													<div class="k6o2mAfYFzlWUusv_7kvE">₹ 200</div>
													
												</div>
												<div>
													<a href="#!" onclick="cart(94);">
													<div class="_16cZZnX_tgIoQZPWgTijgv">
														<span class="_7as_2mMKYqXZrgetll6K1" style="margin-bottom:0px;">Add</span>
														<span class="_2JNlxwVH0JA0AJjntj75LL" style="margin-bottom:0px;">+</span>
													</div>
													</a>
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