<?php 
#index.php
$pageTitle = 'Home';
include('header.php');

if(isset($_POST['local']) && $_POST['local'] == 'login') { $_SESSION['login'] = 1; } else { $_SESSION['login'] = 0; }
if(isset($_POST['local2'])) { $_SESSION['login'] = 0; }

//define ;
?>
<link rel="stylesheet" href="jss/owl.carousel.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/owl.theme.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/custom.css" type="text/css" media="all"/>
	<!-- SLIDESHOW. -->
	<div>
        <div class="section bg-light">
			<div class="container">
				<div class="product-carousel p-0" data-auto-play="true" data-desktop="3" data-laptop="2" data-tablet="2" data-mobile="1">
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
								<h2 class="title">Pedicure/Manicure</h2>
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
<style>

.center {
text-align:center; }
</style>	
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
			  <div class="col-xs-4 col-sm-4 mb-3 mb-md-0">
				<div class="card center">
				  <div class="card-body">
					<p class="card-text text-center" style="margin-top:15px;">OFFERS <br> (Promo)</p>
					<a href="offers.php" class="btn btn-danger">View</a>
				  </div>
				</div>
			  </div>

			  <div class="col-xs-4 col-sm-4 mb-3 mb-md-0">
				<div class="card center">
				  <div class="card-body">
					<p class="card-text text-center" style="margin-top:15px;">EXCLUSIVE<br> COMBOS<br></p>
					<a href="combos.php" class="btn btn-danger">View</a>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-xs-4 col-sm-4 mb-3 mb-md-0">
				<div class="card center">
				  <div class="card-body">
					<p class="card-text text-center" style="margin-top:15px;">SPECIAL <br> DEALS<br></p>
					<a href="deals.php" class="btn btn-danger">View</a>
				  </div>
				</div>
			  </div>
			  
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h4>Please Choose your Service(s)..</h4>
					<!--<p class="text-center">Book expert services at salozone.com</p>-->
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="single.php"><div class="product-grid" style="background-image:url(images/product-1.png);">
						</div></a>
						<div class="desc">
							<h3><a href="single.php">Threading</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						 <a href="waxing.php"><div class="product-grid" style="background-image:url(images/product-2.png);">
						</div></a>
						<div class="desc">
							<h3><a href="waxing.php">Waxing</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="cleanup.php"><div class="product-grid" style="background-image:url(images/product-3.png);">
						</div></a>
						<div class="desc">
							<h3><a href="cleanup.php">Cleanup</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="facial.php"><div class="product-grid" style="background-image:url(images/product-4.png);">
						</div></a>
						<div class="desc">
							<h3><a href="facial.php">Facial</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="bleach.php"><div class="product-grid" style="background-image:url(images/product-5.png);">
						</div></a>
						<div class="desc">
							<h3><a href="bleach.php">Bleach</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="pedicure.php"><div class="product-grid" style="background-image:url(images/product-6.png);">
						</div></a>
						<div class="desc">
							<h3><a href="pedicure.php">Pedicure/Manicure</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="haricut.php"><div class="product-grid" style="background-image:url(images/product-7.png);">
						</div></a>
						<div class="desc">
							<h3><a href="haricut.php">Haircut</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="hairstyling.php"><div class="product-grid" style="background-image:url(images/product-8.png);">
						</div></a>
						<div class="desc">
							<h3><a href="hairstyling.php">Hair Styling</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="partyready.php"><div class="product-grid" style="background-image:url(images/product-9.png);">
						</div></a>
						<div class="desc">
							<h3><a href="partyready.php">Party Ready</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="makeup.php"><div class="product-grid" style="background-image:url(images/product-10.png);">
						</div></a>
						<div class="desc">
							<h3><a href="makeup.php">Make Up</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<a href="dressup.php"><div class="product-grid" style="background-image:url(images/product-11.png);">
						</div></a>
						<div class="desc">
							<h3><a href="dressup.php">Dress Up</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/product-12.png);">
							<div class="inner">
								<p>
									<a href="mehandi.php" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="mehandi.php">Mehandi</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-credit-card"></i>
						</span>
						<h3>SALON AT HOME</h3>
						<p>Understanding the need of quality Salon services and frustration of visiting different salons and then returning unsatisfied we are bringing best of the salon services at your doorstep.</p>
						
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>NO TRUST ISSUES</h3>
						<p>We have collaborated with your local salon service providers who are trusted and tested by you. Everything will be the same and familiar only with added training and expertise.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>CHEAPEST PRICE GUARANTEED</h3>
						<p>Salozone’s prime motive is redefining beauty services in Patna with maximum customer returns and satisfaction which is why we promise all these facilities and benefits at the cheapest price so that you can avail all these services without second thoughts. Our services will be cheaper than your local salon service provide and that’s our Guarantee.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span style = "color:black">Testimony</span>
					<h2 style = "color:black" >Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<span style = "color:black" >Saumya, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p style = "color:black" >&ldquo;Very pocket-friendly , now we don’t have to think several times before getting a proper professional make over.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<span style = "color:black" >Shubhi, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p style = "color:black" > &ldquo;Getting our local familiar salon service providers at our home serving us with added care and humbleness is great and very relieving.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<span style = "color:black" >Radhika, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p style = "color:black" >&ldquo;Very useful for college students like us who don’t have time to visit salons and then wait in a long queue.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>	
	