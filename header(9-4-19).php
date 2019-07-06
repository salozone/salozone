<?php 
#header.php
session_start();
ob_start();
ini_set('output_buffering', 'On');
if(isset($pageTitle)){ $pageTitle = $pageTitle; } else { $pageTitle = null; }
if(isset($pageDesc)){ $pageDesc = $pageDesc; } else { $pageDesc = null; }
$pageTitle = $pageTitle == '' ? ' | Home' : ' | ' . $pageTitle;
$pageDesc = $pageDesc == '' ? 'Salozone, Home Salone Services Threading, Waxing, Cleanup, Facial, Bleach, Pedicure/Manicure, Haircut, Hairstyling, Party Ready, Makeup, Dressup, Mehandi' : ' | ' . $pageDesc;
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salozone | Home Salone Services <?php echo $pageTitle; ?> in Patna - Bihar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $pageDesc; ?>" />
	<meta name="keywords" content="" />
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

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
		.navicon { margin-top:6px !important; }
		.log { margin-top:5px; }
	}
	@media screen and (max-width: 400px) {
		.navicon { margin-top:8px !important; padding: 0px !important; }
		.fh5co-nav ul li a { padding: 0px !important; }
		.fh5co-nav a { padding: 0px !important; }
		.fh5co-nav-toggle { margin-top:20px !important; }
		.product .product-grid { height: 150px !important; }
	}
	.navicon { margin-top: 20px; }
	.menu-1 { margin-top:30px; }
</style>
<script>
var value = localStorage.getItem('loggedIn');
//alert(value);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
	var localData = window.localStorage.getItem("loggedIn");
	//alert(localData);
	$.ajax({
            type: 'POST',
		   url: 'index.php',
           data: {local: localData}
    }).done(function(resp) {
         //console.log(resp);
		 //window.location.reload();
		if(window.name !== "refreshed") {
			window.name = "refreshed";
			window.location.refresh();
		}
    });
</script>

<?php
#if(isset($_SESSION['login'])) { echo "test".$_SESSION['login']; }
//$verdier = implode(", ", $user_id);
?>
<?php
$loginnn = "<script>document.write(localStorage.getItem('loggedIn'));</script>";
$loginnn1 = "<script>document.write(login);</script>";
$loginnn2 = "<script>document.write(logout);</script>";
$user_email = "<script>document.write(localStorage.getItem('email'));</script>";
$password = "<script>document.write(localStorage.getItem('password'));</script>";
$fname = "<script>document.write(localStorage.getItem('fname'));</script>";
#echo "none".$log = $loginnn2;

#define('LOGIN', $user_id);
define('USERNAME', $user_email);
define('PASSWORD', $password);
define('FNAME', $fname);
//echo USERNAME;
?>
<script>
//function to sign in
   function logout() {
		localStorage.setItem("loggedIn", 'logout');
		$.ajax({
            type: 'POST',
		   url: 'index.php',
           data: {local2: localData}
		}).done(function(resp) {
			 //console.log(resp);
			 window.location.reload();
			 window.location.replace("login.php");
		});
   } // end login()
</script>	
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation" style>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-4">
					<div id="fh5co-logo"><a href="index.php"><img src="images/logo.jpg" style="max-width:100%; height:auto" class="log" ></a>
					</div>
				</div>
				
				<div class="whatsapp col-xs-3" >
					
				</div>
				<div class="col-md-5 col-xs-6 text-center menu-1 navicon">
					<ul>
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
								<li><a href="hairstyling.php">Hairstyling</a></li>
								<li><a href="partyready.php">Party Ready</a></li>
								<li><a href="makeup.php">Makeup</a></li>
								<li><a href="dressup.php">Dressup</a></li>
								<li><a href="mehandi.php">Mehandi</a></li>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li>
						<!--<li class="has-dropdown">
							<a href="services.php">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>-->
						<li><a href="contact.php">Contact Us</a></li>
						<div class="whatsapp">
							<?php
							if($_SESSION['login'] == 1) { ?>
								<li><a href="#">Hello <?php echo FNAME; ?></a></li>
								<li><a href="#" onclick="logout();">Log Out</a></li>
							<?php } else { ?>
								<li><a href="login.php">Login/ Sign Up</a></li>
							<?php } ?>
							<li><a href="https://salozone.blogspot.com/" target="_blank">Blog</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<li><a href="complaints.php">Any complaints or Special Requests?</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="join.php">Join as as professional</a></li>
						</div>
					</ul>
				</div>
				<div class="col-md-4 col-xs-8 navicon">
					<ul>
						<li class="shopping-cart"><a href="tel:8925070790" title="Book Through" class="cart"><span><img src="images/call3.png" width="30" height="30"/></span></a></li>
						<li class="shopping-cart"><a href="https://api.whatsapp.com/send?phone=918925070790" title="Whatsapp" class="cart"><span><img src="images/whatsapp.png" width="50" height="50"/></span></a></li>
						<li class="shopping-cart"><a href="checkout.php" title="Cart" class="cart"><span><img src="images/cart.png" width="50" height="45"/></span></a></li>
						<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 1) { ?>
						<li class="shopping-cart loginIcon"><a href="#" onclick="logout();" title="logout" class="cart"><span><img src="images/login1.png" width="40" height="40"/></span></a></li>
						<?php } else { ?>
						<li class="shopping-cart loginIcon"><a href="login.php" title="Logout" class="cart"><span><img src="images/login.png" width="30" height="30"/></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>

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
	<?php } ?>
	
<?php } ?>	
<?php function sliderMenu($slider = ''){ ?>
<link rel="stylesheet" href="jss/owl.carousel.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/owl.theme.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/custom.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
	<style>
	@media screen and (max-width: 768px) {
		.gototop { position:unset; }
	}
	</style>
<style>
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
</style>
	

	<!-- Slider menu -->
<div class="clearBoth">
	<div class="container">
		<div class="row">
			<div class="product-carousel p-0" data-auto-play="true" data-desktop="6" data-laptop="4" data-tablet="3" data-mobile="3">
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="single.php">
							<img src="withouttext/threading1.jpg" alt="Threading" />
						</a>
					</div>
					<div class="product-info">
						<a href="single.php">
							<h2 class="title">Threading</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="waxing.php">
							<img src="withouttext/waxing1.jpg" alt="Waxing" />
						</a>
					</div>
					<div class="product-info">
						<a href="waxing.php">
							<h2 class="title">Waxing</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="cleanup.php">
							<img src="withouttext/cleanup1.jpg" alt="Cleanup" />
						</a>
					</div>
					<div class="product-info">
						<a href="cleanup.php">
							<h2 class="title">Cleanup</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="facial.php">
							<div class="badges">
							</div>
							<img src="withouttext/facial1.jpg" alt="Facial" />
						</a>
					</div>
					<div class="product-info">
						<a href="facial.php">
							<h2 class="title">Facial</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="bleaching.php">
							<img src="withouttext/bleach1.jpg" alt="Bleach" />
						</a>
					</div>
					<div class="product-info">
						<a href="bleaching.php">
							<h2 class="title">Bleach</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="pedicure.php">
							<img src="withouttext/manicure1.jpg" alt="Pedicure/Manicure" />
						</a>
					</div>
					<div class="product-info">
						<a href="pedicure.php">
							<h2 class="title">Pedi/Mani</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="haricut.php">
							<img src="withouttext/haircut1.jpg" alt="Haircut" />
						</a>
					</div>
					<div class="product-info">
						<a href="haricut.php">
							<h2 class="title">Haircut</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="hairstyling.php">
							<img src="withouttext/hairstyle1.jpg" alt="Hairstyling" />
						</a>
					</div>
					<div class="product-info">
						<a href="hairstyling.php">
							<h2 class="title">Hairstyling</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="partyready.php">
							<div class="badges">
							</div>
							<img src="withouttext/partyready1.jpg" alt="Party Ready" />
						</a>
					</div>
					<div class="product-info">
						<a href="partyready.php">
							<h2 class="title">Party Ready</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="makeup.php">
							<img src="withouttext/makeup1.jpg" alt="Makeup" />
						</a>
					</div>
					<div class="product-info">
						<a href="makeup.php">
							<h2 class="title">Makeup</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="dressup.php">
							<img src="withouttext/dressup1.jpg" alt="Dressup" />
						</a>
					</div>
					<div class="product-info">
						<a href="dressup.php">
							<h2 class="title">Dressup</h2>
						</a>
					</div>
				</div>
				<div class="product-item text-center">
					<div class="product-thumb">
						<a href="mehandi.php">
							<img src="withouttext/Mehendi1.jpg" alt="Mehandi" />
						</a>
					</div>
					<div class="product-info">
						<a href="mehandi.php">
							<h2 class="title">Mehandi</h2>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Slider menu -->	
<?php } ?>