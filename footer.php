
	
	
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p class="text-center">Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3 style = "color:black" >Salozone</h3>
					<p style = "color:black">Salozone’s prime motive is redefining beauty services in Patna with maximum customer returns and satisfaction which is why we promise all these facilities and benefits at the cheapest price so that you can avail all these services without second thoughts.</p>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-12 col-md-push-1 mb-3 mb-md-0">
					<h4 style = "color:black;font-weight:600;" >Pages</h4>
					<ul class="fh5co-footer-links">
						<li><a href="about.php">About Us</a></li>
						<li><a href="https://salozone.blogspot.com/" target="_blank">Blog</a></li>
						<li><a href="feedback.php">Feedback</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="checkout.php">Cart</a></li>
						<?php
							if(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == 1) { ?>
								<li><a href="mybookings.php">My Bookings</a></li>
						<?php }?>
					</ul>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-12 col-md-push-1 mb-3 mb-md-0">
					<h4 style = "color:black;font-weight:600;" >Pages</h4>
					<ul class="fh5co-footer-links">
						<li><a href="complaints.php">Any complaints or Special Requests?</a></li>
						<li><a href="terms.php">Terms of Use</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="join.php">Join as as professional</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-3 col-xs-12 col-md-push-1 mb-3 mb-md-0">
					<h4 style = "color:black;font-weight:600;" >Services</h4>
					<ul class="fh5co-footer-links">
						<li><a href="single.php">Threading</a></li>
						<li><a href="waxing.php">Waxing</a></li>
						<li><a href="cleanup.php">Cleanup</a></li>
						<li><a href="facial.php">Facial</a></li>
						<li><a href="bleaching.php">Bleach</a></li>
						<li><a href="pedicure.php">Pedicure/ Manicure</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-3 col-xs-12 col-md-push-1 mb-3 mb-md-0">
					<h4 style = "color:black;font-weight:600;" >Services</h4>
					<ul class="fh5co-footer-links">
						<li><a href="haricut.php">Haircut</a></li>
						<li><a href="hairstyling.php">Hair Styling</a></li>
						<li><a href="partyready.php">Party Ready</a></li>
						<li><a href="makeup.php">Makeup</a></li>
						<li><a href="dressup.php">Dressup</a></li>
						<li><a href="mehandi.php">Mehandi</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p style = "color:black" class="text-center">
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
	<script>
	function cart(id) {
		$.ajax({
            type: "GET",
            url: "cart.php",
			data: {add:id},
            success: function(data){
				//alert(data);
                window.location.reload();
                }
            });

	}
	

	</script>
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
	<!--Slider Menu -->
	<script type="text/javascript" src="jss/owl.carousel.min.js"></script>
	<script type="text/javascript" src="jss/script.js"></script>
	</body>
</html>