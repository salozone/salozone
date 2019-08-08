<?php
#header.php

session_start();
ob_start();
ini_set('output_buffering', 'On');
include("admin_site/php_stuffs/connection.php");
if(isset($pageTitle)){ $pageTitle = $pageTitle; } else { $pageTitle = null; }
if(isset($pageDesc)){ $pageDesc = $pageDesc; } else { $pageDesc = null; }
$pageTitle = $pageTitle == '' ? ' | Index Page' : ' | ' . $pageTitle;
$pageDesc = $pageDesc == '' ? 'Salozone, Home Salone Services Threading, Waxing, Cleanup, Facial, Bleach, Pedicure/Manicure, Haircut, Hairstyling, Party Ready, Makeup, Dressup, Mehandi' : ' | ' . $pageDesc;
if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) {
	$getUser = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$_COOKIE['username']."'");
	$getUser1 = mysqli_fetch_array($getUser);
	$userName = $getUser1['cust_name'];
	$userEmail = $getUser1['cust_email'];
	$userPhone = $getUser1['cust_mobile'];
	$member = $getUser1['member'];
	date_default_timezone_set('Asia/Kolkata');
	$date1 = $getUser1['member_added'];
	$date2 = date('Y-m-d'); //today's date


	$diff = abs(strtotime($date2) - strtotime($date1));
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

	//If user is a tier 1 member
	if($member == 1)
	{
	if($months>=1)
	{
		$member = 0;
		$reset = "0000-00-00";
		$update = mysqli_query($con, "UPDATE `customer` SET `member` = '".$member."' , `member_added` = '".$reset."'");
		

	}
	}
	//If user is a tier 2 member
	if($member == 2)
	{
	if($months>=6)
	{
		$member = 0;
		$reset = "0000-00-00";
		$update = mysqli_query($con, "UPDATE `customer` SET `member` = '".$member."' , `member_added` = '".$reset."'");
	}
	}
} else {
	$userName = NULL;
	$userEmail = NULL;
	$userPhone = NULL;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salozone | Salon At Home Services in Patna Bihar <?php echo $pageTitle; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $pageDesc; ?>" />
	<meta name="keywords" content="<?php echo $pageDesc; ?>" />
	<meta name="author" content="AugWorld" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- Font Awesome-->
	<script src="https://kit.fontawesome.com/5878a489f6.js"></script>
	<!-- Font Awesome ends here-->
	<!-- Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Krub&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
	<!-- Google Fonts ends here-->
	<style type="text/css">
		#page::-webkit-scrollbar { width: 0 !important }
		.background-wrap {
			position: fixed;
			z-index: -1000;
			width: 100%;
			height: 100%;
			overflow: hidden;
			top: 0;
			left: 0;
		}
		#video-bg-elem {
			position: absolute;
			top: 0;
			left: 0;
			min-height: 100%;
			max-width:100%;
			width: auto;
			height: auto;
		}
		.content {
			position: absolute;
			width: 100%;
			min-height: 100%;
			z-index: 1000;
			background-color: rgba(0,0,0,0.2);
		}
		.content h5,h1 {
			text-align: center;
			font-size: 35px;
			text-transform: uppercase;
			font-weight: 300;
			color: #fff;
			padding-top: 15%;
			margin-bottom: 10px;
		}
	</style>

		</head>

		<body>
	<style>
		@media screen and (min-width: 768px) {
			.whatsapp { display:none; }
		}
		@media screen and (max-width: 768px) {
			.loginIcon { display:none !important; }
		}
		@media only screen and (max-width: 990px) and (min-width: 767px)  {
			.menu-1 { width:63%;margin-top:10px !important; }
			.navicon { margin-top:8px !important; }
			.log { margin-top:5px; }
		}
		@media screen and (max-width: 600px) {
			.navicon { margin-top:8px !important; padding: 0px !important; }
			.fh5co-nav ul li a { padding: 0px !important}
			.fh5co-nav a { padding: 0px !important; }
			.fh5co-nav-toggle { margin-top:6px !important; }
			.product .product-grid { height: 150px !important; }
		}
		.navicon { margin-top: 10px; }
		.menu-1 { margin-top:30px; }
	</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!--<div class="fh5co-loader"></div>-->
<style type="text/css">
@media screen and (max-width: 650px) {
		.fh5co-nav a{
			font-size: 14px!important;
		}
		.log{
			width:130px!important;
			height:40px!important;
		}
		.remove{
			display: none!important;
		}
		.cont{
			display: none!important;
		}
		.fh5co-nav img{
			max-width: 60%!important;
			height: auto;
		}
}
</style>

<div id="page">
<nav class="fh5co-nav" role="navigation" style="background-color: #F8C471;">
		<div class="container-fluid">
					<ul class="mb-0">
						<li class="float-left">

		 						<a href="index.php"><img src="withouttext/logobw2.png" style="max-width:45%; height:auto;" class="log" ></a>

						</li>


						<li class="has-dropdown remove">
							<a style="font-family: Open Sans, helvetica; color:#000000;">Services</a>
							<ul class="dropdown" class="nav-link">
								<li><a href="single.php">Threading</a></li>
								<li><a href="waxing.php">Waxing</a></li>
								<li><a href="cleanup.php">Cleanup</a></li>
								<li><a href="facial.php">Facial</a></li>
								<li><a href="bleaching.php">Bleach</a></li>
								<li><a href="pedicure.php">Pedicure/Manicure</a></li>
								<li><a href="haricut.php">Haircut</a></li>
								<li><a href="hairstyling.php">Hair Care</a></li>
								<li><a href="partyready.php">Party Ready</a></li>
								<li><a href="makeup.php">Bridal</a></li>
								<li><a href="dressup.php">Dress Up</a></li>
								<li><a href="mehandi.php">Mehandi</a></li>
							</ul>
						</li>
						<li class="remove"><a href="about.php" style="font-family: helvetica, sans-serif; color:#000000;" >About Us</a></li>
						<li class="remove"><a href="contact.php" style="font-family: helvetica, sans-serif; color:#000000;">Contact Us</a></li>
						<?php
														if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1 && $member == 0) { ?>
														<li><a href="member.php" style="font-family: helvetica, sans-serif; color:#000000;">Member</a></li>
														<?php } elseif(!isset($_COOKIE['isLogin'])) { ?>
															<li><a href="login.php?member=1" style="font-family: helvetica, sans-serif; color:#000000;">Member</a></li>
														<?php } ?>
						<li class="shopping-cart"><a href="tel:8925070790" title="Book Through"><span><img src="images/call3.png" width="30" height="30"/></span></a></li>
						<li class="shopping-cart"><a href="https://api.whatsapp.com/send?phone=918925070790" title="Whatsapp" class="cart"><span><img src="images/whatsapp.png" width="50" height="50"/></span></a></li>
						<li class="shopping-cart"><a href="checkout.php" title="Cart" ><span><img src="images/cart.png" width="50" height="45"/></span></a></li>
						<?php if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) { ?>
						<li class="shopping-cart loginIcon"><a href="logout.php" title="logout" ><span><img src="images/login1.png" width="40" height="40"/></span></a></li>
						<?php } else { ?>
						<li class="shopping-cart loginIcon"><a href="login.php" title="Login" class="cart"><span><img src="images/login.png" width="30" height="30"/></span></a></li>
						<?php } ?>
						<li>
											<span class="col-md-5 col-xs-6 text-center menu-1 navicon" >
							 					<ul>
													<span class="whatsapp" style="text-align:left">
														<li class="has-dropdown">
															<a>Services</a>
															<ul class="dropdown">
																<li><a href="single.php">Threading</a></li>
																<li><a href="waxing.php">Waxing</a></li>
																<li><a href="cleanup.php">Cleanup</a></li>
																<li><a href="facial.php">Facial</a></li>
																<li><a href="bleaching.php">Bleach</a></li>
																<li><a href="pedicure.php">Pedicure/Manicure</a></li>
																<li><a href="haricut.php">Haircut</a></li>
																<li><a href="hairstyling.php">Hair Care</a></li>
																<li><a href="partyready.php">Party Ready</a></li>
																<li><a href="makeup.php">Bridal</a></li>
																<li><a href="dressup.php">Dress Up</a></li>
																<li><a href="mehandi.php">Mehandi</a></li>
															</ul>
														</li>
														<li><a href="about.php">About Us</a></li>
														<li><a href="contact.php">Contact Us</a></li>
														<?php
														if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) { ?>
															<li><a href="#">Hello <?php echo $userName; ?></a></li>
															<li><a href="mybookings.php">My Bookings</a></li>
															<li><a href="logout.php" >Log Out</a></li>
														<?php } else { ?>
															<li><a href="login.php">Login/ Sign Up</a></li>
														<?php } ?>
														<li><a href="https://salozone.blogspot.com/" target="_blank">Blog</a></li>
														<li><a href="feedback.php">Feedback</a></li>
														<li><a href="complaints.php">Any complaints or Special Requests?</a></li>
														<li><a href="terms.php">Terms of Use</a></li>
														<li><a href="privacy.php">Privacy Policy</a></li>
														<li><a href="join.php">Join as as professional</a></li>
													</span>
												</ul>
									</span>
						</li>
					</ul>
					</div>
	</nav>




<?php
//Define the products and cost
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "VLCC-Face", "VLCC-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "VLCC", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Hand","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal","Threading + Full Hand Waxing + Clean Up(Fruit)","Facial(Gold) + Pedicure + Manicure","Facial(Gold) + Pedicure","Bleach(Oxy) + Hair Style Designer + Pedicure","Threading + Full Waxing(Hands+Legs+Under Arms) + Clean Up(Fruit)" ,"Air Brush","Body Polishing","Bridal Facial","Engagement","Reception","Pre-Bridal","Bridal HD", "Hair Spa-LOreal","Hair Spa-Body care","Hair Massage");
$amounts = array("15","25", "10","80","30","50","119","199","119","149","199","249","299","449","329","499","99","119","20","25","599","799","149","175","149","175","30","45","99","180","199","299","149","249","249","349","449","599","199","299","449","599","199","299","299", "399", "199", "299","499","649","499","649","1499","199","299","299", "499", "299", "499","99","199","299","119","259","379","99","199","349","75","149","199","199","149","30","50","100","100","120","100","100","100","100","50","50","50","149","199","149","450","550","600","700","199","4999","200","149","4999","250","650","620","420","420","399","2999","799","1999","1999","3499","7999","549","449","249");

if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1 && $member == 1) {
$discount = 15;
$discount = $discount/100;
for ($x=0;$x < sizeof($amounts);$x++){
	$amounts[$x] = $amounts[$x]*(1-$discount);
}
}
?>


	<div id="page" style="background:#100000;">
<?php function footerCart() { ?>
	<?php if ( isset($_SESSION["cart"]) ) { ?>
		<div id="cartFooter" class="_1LETt-B9P8OaDZEUDWkA1R clearfix">
			<div class="_2hEPDSDdzr7qDls1i-ha_E clearfix">
				<div class="_32Q_Im_MCQ1Q1ZhnbBsaV9">
					<div class="_1fEoAtqLYX8y_v8J9euc1b">
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2GGL50SAl2PqjDcW_ug_HR"><?php if(isset($_SESSION["noQty"])) { echo $_SESSION["noQty"]; } ?></div>
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
					<a href="checkout.php" style="color:#fff;"><span class="_32tH5ONd-X_lIEgzefZTOu">Continue</span>
					<span class="_3CdNMpKO9QvNBUY7iKuiu-"><span><i class="icon-long-arrow-right"></i></span></span></a>
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
					<a href="checkout.php" style="color:#fff;"><span class="_32tH5ONd-X_lIEgzefZTOu">Continue</span>
					<span class="_3CdNMpKO9QvNBUY7iKuiu-"><span><i class="icon-long-arrow-right"></i></span></span></a>
				</div>
			</div>
		</div>
		</div>
	<?php } ?>

<?php } ?>

<!-- START OF PRODUCT SLIDER-->

<?php function sliderMenu($slider = ''){ ?>
<link rel="stylesheet" href="jss/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/custom.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	@media screen and (max-width: 768px) {
		.gototop { position:unset; }
	}

.clearBoth {
	padding: 2em;
	clear: both;
}
ul {
    list-style-type: none;
}
._1DHBhD10Ng1cgRavn1k2gO {
    margin: 0;
    padding: 0;
}
._3eR0Ps0OiYMoBRFr33yxgu {
    display: flex;
    background-color: #fff;
    align-items: stretch;
}
*, :after, :before {
    box-sizing: border-box;
}
._20fQsT4R-EBnAmG2j8hXHy {
    width: 100%;
}
._20fQsT4R-EBnAmG2j8hXHy .bV9pH8LGyb_s16WgD4UkH {
    padding: 16px;
    flex: 1;
}
._16cZZnX_tgIoQZPWgTijgv { height: 100%; }
.k6o2mAfYFzlWUusv_7kvE {
    display: block;
    font-size: 1.57em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	padding:2px;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}
h3 {
    display: block;
    font-size: 1.57em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	padding:2px;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}
._20fQsT4R-EBnAmG2j8hXHy .vjh4-SZW6em1Ffdp2AMqH {
    width: 20px;
    height: 20px;
    display: inline-block;
    background-color: #bdbdbd;
    border-radius: 12px;
    color: #fff;
    pointer-events: none;
    margin-top: 18px;
    margin-right: 12px;
}
._20fQsT4R-EBnAmG2j8hXHy ._1uGiX5DrQ7U17G8-N73t9E {
    display: flex;
    height: 62px;
    background-color: #f9f9f9;
    padding: 0 16px;
    align-items: center;
}
.OyiF3KnmNwSIRGjG-ndyQ {
    max-height: 575px;
    font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}

	.smobile-wrap::-webkit-scrollbar { width: 0 !important }
	.smobile-wrap { overflow: -moz-scrollbars-none; }
	.smobile-wrap { -ms-overflow-style: none; }
	.mobile-container {
	 width: 97%;
	}
	.mobile-slide {
	 background-position: center;
	 background-size: cover;
	 width: 300px;
	 height: 300px;
	}
	.mobile-slide img{
	 width:100%;
	 border-radius: 1%;
	}

	.smobile-wrap {
	 position: relative;
	 width: 100%;
	 margin: 2px auto;
	 text-align: left;
	 white-space: nowrap;
	 overflow-x: auto;
	 overflow-y: hidden;
	 vertical-align:middle;
	 display: block;
	}
	.mobile-slide {
	 display: inline-block;
	 margin: 0.3em;
	 padding: 3px;
	 white-space: normal;
	 text-align: center;
	 padding-top: 15%;
	}

/* WHEN ON PC VIEW */
	@media screen and (min-width: 600px) {
	 .mobile-container{
		 display:none;
	 }
	 .swiper-slide h3{
		 font-size: 16px!important;
		 color:#7C7784;
		 text-align: center;
	 }
	}

/* WHEN ON MOBILE VIEW */
	@media screen and (max-width: 600px) {
	 .mobile-slide{
		 width: 30%;
		 height: 150px;

	 }
	 .mobile-slide h3{
		 font-size: 14px!important;
		 color:#7C7784;
		 text-align: center;
	 }
	 .swiper-container{
		 display:none;
	 }
	}


	.swiper-container {
	 width: 97%;
	 padding-top: 6%;
	}
	.swiper-slide {
	 background-position: center;
	 background-size: cover;
	 width: 40%;
	 height: 40%;
	}
	.swiper-slide img{
	 width:100%;
	 border-radius: 1%;
	}
	.swiper-button-next, .swiper-button-prev{
	 background-image: none !important;
	 height:30px;
	 width:30px;
	 background-color: white;
	 border-radius: 50%;
	}
	i{
		margin-left: 30%;
		margin-top: 25%;
	}
	.slide img{
		border:3px solid white;
	}
	.slide img:hover{
		border:3px solid #3DB17D;
	}
	</style>
	</head>
	<body>
	<!-- Swiper -->
<div class="container slide">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<a href="single.php">
					<img src="withouttext/threading1.jpg" alt="Salon At Home Threading At Home" /> </a>
					<h3>Threading<h3>
			</div>
			<div  class="swiper-slide">
				<a href="waxing.php">
						<img src="withouttext/waxing1.jpg" alt="Salon At Home Waxing At Home" /> </a>
						<h3>Waxing<h3>
			</div>
			<div  class="swiper-slide">
				<a href="cleanup.php">
				<img src="withouttext/cleanup1.jpg" alt="Salon At Home Cleanup At Home" /> </a>
				<h3>Cleanup<h3>
			</div>
			<div  class="swiper-slide">
				<a href="facial.php">
					<img src="withouttext/facial1.jpg" alt="Salon At Home Facial At Home" /> </a>
					<h3>Facial<h3>
			</div>
			<div  class="swiper-slide">
				<a href="bleaching.php">
				<img src="withouttext/bleach1.jpg" alt="Salon At Home Bleach At Home" /> </a>
				<h3>Bleaching<h3>
			</div>
			<div  class="swiper-slide">
				<a href="pedicure.php">
					<img src="withouttext/manicure1.jpg" alt="Salon At Home Pedicure/Manicure At Home" /> </a>
					<h3>Manicure/Pedicure<h3>
			</div>
			<div  class="swiper-slide">
					<a href="hairstyling.php">
				<img src="withouttext/hairstyle1.jpg" alt="Salon At Home Hairstyling At Home" /> </a>
				<h3>Haistyling<h3>
			</div>
			<div  class="swiper-slide">
				<a href="partyready.php">
					<img src="withouttext/partyready1.jpg" alt="Salon At Home Party Ready At Home" /> </a>
					<h3>Party Ready<h3>
			</div>
			<div class="swiper-slide">
				<a href="dressup.php">
					<img src="withouttext/makeup1.jpg" alt="Salon At Home Dressup At Home" /> </a>
					<h3>Dressup<h3>
			</div>
		</div>
		<!-- Add Pagination -->
	</div>


	<div class="mobile-container">
		<div class="smobile-wrap">
			<div class="mobile-slide">
				<a href="single.php">
					<img src="withouttext/threading1.jpg" alt="Salon At Home Threading At Home" /> </a>
					<h3>Threading<h3>
			</div>
			<div  class="mobile-slide">
				<a href="waxing.php">
						<img src="withouttext/waxing1.jpg" alt="Salon At Home Waxing At Home" /> </a>
						<h3>Waxing<h3>
			</div>
			<div  class="mobile-slide">
				<a href="cleanup.php">
				<img src="withouttext/cleanup1.jpg" alt="Salon At Home Cleanup At Home" /> </a>
				<h3>Cleanup<h3>
			</div>
			<div  class="mobile-slide">
				<a href="facial.php">
					<img src="withouttext/facial1.jpg" alt="Salon At Home Facial At Home" /> </a>
					<h3>Facial<h3>
			</div>
			<div  class="mobile-slide">
				<a href="bleaching.php">
				<img src="withouttext/bleach1.jpg" alt="Salon At Home Bleach At Home" /> </a>
				<h3>Bleaching<h3>
			</div>
			<div  class="mobile-slide">
				<a href="pedicure.php">
					<img src="withouttext/manicure1.jpg" alt="Salon At Home Pedicure/Manicure At Home" /> </a>
					<h3>Mani/Pedi<h3>
			</div>
			<div  class="mobile-slide">
					<a href="hairstyling.php">
				<img src="withouttext/hairstyle1.jpg" alt="Salon At Home Hairstyling At Home" /> </a>
				<h3>Haistyling<h3>
			</div>
			<div  class="mobile-slide">
				<a href="partyready.php">
					<img src="withouttext/partyready1.jpg" alt="Salon At Home Party Ready At Home" /> </a>
					<h3>Party Ready<h3>
			</div>
			<div class="mobile-slide">
				<a href="dressup.php">
					<img src="withouttext/makeup1.jpg" alt="Salon At Home Dressup At Home" /> </a>
					<h3>Dressup<h3>
			</div>

		</div>
		<!-- Add Pagination -->

	</div>
</div>

	<!-- Swiper JS -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- Initialize Swiper -->
	<script>
	var swiper = new Swiper('.swiper-container', {
	 slidesPerView: 6,
	 spaceBetween: 25,
	 autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
	 loop:true,

	 breakpoints: {
		 1024: {
			 slidesPerView: 4,
			 spaceBetween: 40,

		 },
		 768: {

			 slidesPerView: 3,
			 spaceBetween: 30,
		 },
		 640: {

			 slidesPerView: 3,
			 spaceBetween: 20,
		 },
		 320: {
			 slidesPerView: 3,
			 spaceBetween: 10,

		 }
	 }
	});

	</script>


</div>
</div>


	<!-- Slider menu -->
<?php } ?>
<!-- END OF PRODUCT SLIDER-->
<!--Send Mail Function Start --->
<?php
	function sendEmail($from, $fromName, $to, $toName, $subject, $body, $signature){
		$companyWeb = 'https://salozone.com';
		$companyName = 'SALOZONE';
		$companyEmail = 'contact@salozone.com';
		$companyMobile = '+91 89250 70790';
		$emailMessageStart=<<<EOD
			<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
					<title>$companyName</title>
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				</head>
				<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;background-color: #F0F0F0;color: #000000;" bgcolor="#F0F0F0"text="#000000">
					<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background"><tr><td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"
						bgcolor="#F0F0F0">
					<table border="0" cellpadding="0" cellspacing="0" align="center"
						width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
						max-width: 560px;" class="wrapper">
						<tr>
							<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
								padding-top: 20px;
								padding-bottom: 20px;">
								<a target="_blank" style="text-decoration: none;"
									href="$companyWeb"><img border="0" vspace="0" hspace="0"
									src="$companyWeb/images/logo.jpg" alt="$companyName" width="100" height="75"
									title="$companyName" style="color: #000000;font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>
							</td>
						</tr>
					</table>
					<table border="0" cellpadding="0" cellspacing="0" align="center"
						bgcolor="#FFFFFF"
						width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
						max-width: 560px;" class="container">
						<tr>
							<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
								padding-top: 25px;
								color: #000000;
								font-family: sans-serif;" class="header">
									$companyName
							</td>
						</tr>
						<tr>
							<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-bottom: 3px; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 18px; font-weight: 300; line-height: 150%;padding-top: 5px;
								color: #000000;font-family: sans-serif;" class="subheader">
									Home Salon
							</td>
						</tr>
						<tr>
							<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
								padding-top: 20px;" class="hero"><a target="_blank" style="text-decoration: none;"
								href="$companyWeb"><img border="0" vspace="0" hspace="0"
								src="$companyWeb/images/s1.png"
								alt="Please enable images to view this content" title="$companyName"
								width="560" style="
								width: 100%;
								max-width: 560px;
								color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a></td>
						</tr>
						<tr>
							<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 700; line-height: 160%;
								padding-top: 25px;
								color: #000000;
								font-family: sans-serif;" class="paragraph">
									$subject
							</td>
						</tr>
						<tr>
							<td valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
								padding-top: 25px;
								color: #000000;
								font-family: sans-serif;" class="paragraph">
EOD;
		$emailMessageEnd='
							</td>
						</tr>
						<tr>
							<td valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 700; line-height: 160%;
								padding-top: 20px;
								padding-bottom: 25px;
								color: #000000;
								font-family: sans-serif;" class="paragraph">'.
									$signature.'
							</td>
						</tr>
					</table>
					</td></tr></table>
				</body>
			</html>';
		$body1 = $emailMessageStart . $body . $emailMessageEnd;
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= 'From: '.strip_tags($companyEmail). "\r\n" .
		'Reply-To: '. strip_tags($companyEmail) . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		// Send email
		$mail = mail($to,$subject,$body1,$headers);
		if($mail){
			return true;
		}else{
			return false;
		}
	}
?>
<!-- Send Mail Function End --->
