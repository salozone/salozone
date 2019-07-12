<?php
#offers.php
//session_start();
$pageTitle = 'Offers';
$pageDesc = 'Offer (Promo Codes)';
$slider = 'Offers';
include('header.php');

?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/aboutus.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>OFFERS</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<style>
	h4 {
		color:#d1c286;
	}
</style>
<?php sliderMenu($slider); ?>
	<div id="fh5co-product">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div class="desc">
							<ul class="_2mioG8IfFu0HyLapNQp2db">
								<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
									<div class="text-center">
										<span class="text-success"><b>EXCLUSIVE INTRODUCTORY OFFERS</b></span>
									</div>
									<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">
										<p><span><i class="icon-check"></i></span>We are already at our best pricing.</p>
										<p><span><i class="icon-check"></i></span>Introductory offers has been directly applied and prices are reduced.</p>
										<p><span><i class="icon-check"></i></span>Enjoy our quality service at minimal price possible.</p>

										</div>
									</div>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>