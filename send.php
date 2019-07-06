<?php

$to = "salozonesalon@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$subject = "Service Request";
$subject2 = "Conformation for service request";
$message = " " . $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
$message2 = "Here is your requested services and other details " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

// You can also use header('Location: thank_you.php'); to redirect to another page.

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html"><img src="images/logo.jpg" style="max-width:100%; height:auto;"></a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a>Services</a>
							<ul class="dropdown">
								<li><a href="single.html">Threading</a></li>
								<li><a href="waxing.html">Waxing</a></li>
								<li><a href="cleanup.html">Cleanup</a></li>
								<li><a href="facial.html">Facial</a></li>
								<li><a href="bleaching.html">Bleach</a></li>
								<li><a href="pedicure.html">Pedicure/Manicure</a></li>
								<li><a href="haricut.html">Haircut</a></li>
								<li><a href="hairstyling.html">Hairstyling</a></li>
								<li><a href="partyready.html">Party Ready</a></li>
								<li><a href="makeup.html">Makeup</a></li>
								<li><a href="dressup.html">Dressup</a></li>
								<li><a href="mehandi.html">Mehandi</a></li>

							</ul>
						</li>
						<li class="active"><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="shopping-cart"><a href="cart.php" class="cart"><span><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	
	
	<div id="fh5co-about">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6">
						<div class="desc">
							<h1><center>Mail Sent. Thank you , we will contact you shortly.</center></h1>
							
						</div>
						
					</div>
					
				</div>
			</div>
			
				
				
		</div>
	</div>

	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3 style="color:black">Salozone</h3>
					<p style="color:black">Salozone’s prime motive is redefining beauty services in Patna with maximum customer returns and satisfaction which is why we promise all these facilities and benefits at the cheapest price so that you can avail all these services without second thoughts.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="threading.html">Threading</a></li>
						<li><a href="waxing.html">Waxing</a></li>
						<li><a href="cleanup.html">Cleanup</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="facial.html">Facial</a></li>
						<li><a href="bleaching.html">Bleach</a></li>
						<li><a href="pedicure.html">Pedicure/Manicure</a></li>
						<li><a href="haricut.html">Haircut</a></li>
						<li><a href="hairstyling.html">Hair Styling</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="partyready.html">Party Ready</a></li>
						<li><a href="makeup.html">Makeup</a></li>
						<li><a href="dressup.html">Dressup</a></li>
						<li><a href="mehandi.html">Mehandi</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p style="color:black">
						<small class="block">&copy; Salozone. All Rights Reserved.</small> 
						<small class="block">Designed by: AugWorld</a> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.instagram.com/salozoneofficial/"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/salozoneofficial/"><i class="icon-facebook"></i></a></li>
							<li><a href="https://salozone.blogspot.com/"><i class="icon-paper-plane"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

