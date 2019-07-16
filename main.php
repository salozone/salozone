<?php
#index.php
$pageTitle = 'Index Page';
include('header.php');

if(isset($_POST['local']) && $_POST['local'] == 'login') { $_SESSION['login'] = 1; } else { $_SESSION['login'] = 0; }
if(isset($_POST['local2'])) { $_SESSION['login'] = 0; }

//define ;
?>
<link rel="stylesheet" href="jss/owl.carousel.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/owl.theme.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="jss/custom.css" type="text/css" media="all"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/media-queries.css">

	<!-- SLIDESHOW. -->

	<div class="container-fluid mt-5">
		<div id="owl-demo" class="owl-carousel owl-theme owl-dots">
			  <div class="item">
					<a href="makeup.php">
					<img src="withouttext/bridaloffer1.jpg" alt="Salon At Home Bridal At Home" /> 	</a>
					<h3 class="title">Bridal</h3>
				</div>


			  <div class="item">
					<a href="makeup.php">
					<img src="withouttext/prebridal.jpeg" alt="Salon At Home Pre-Bridal Body Polishing At Home" /> </a>
					<h3 class="title">Pre-Bridal</h3>
				</a>
			</div>

			  <div class="item">
					<a href="mehandi.php">
					<img src="withouttext/mehndiOffer.jpeg" alt="Salon At Home Mehandi At Home" /> </a>
						<h3 class="title">Mehandi</h3>
				</div>


			  <div class="item">
					<a href="single.php">
						<img src="withouttext/threading1.jpg" alt="Salon At Home Threading At Home" /> </a>
							<h3 class="title">Threading</h3>
				</div>

		  	<div class="item">
					<a href="waxing.php">
							<img src="withouttext/waxing1.jpg" alt="Salon At Home Waxing At Home" /> </a>
							<h3 class="title">Waxing</h3>
				</div>

		  	<div class="item">
					<a href="cleanup.php">
					<img src="withouttext/cleanup1.jpg" alt="Salon At Home Cleanup At Home" /> </a>
					<h3 class="title">Cleanup</h3>
				</div>

		  	<div class="item">
					<a href="facial.php">
						<img src="withouttext/facial1.jpg" alt="Salon At Home Facial At Home" /> </a>
						<h3 class="title">Facial</h3>
				</div>


		  	<div class="item">
					<a href="bleaching.php">
					<img src="withouttext/bleach1.jpg" alt="Salon At Home Bleach At Home" /> </a>
					<h3 class="title">Bleach</h3>
				</div>

			  <div class="item">
					<a href="pedicure.php">
						<img src="withouttext/manicure1.jpg" alt="Salon At Home Pedicure/Manicure At Home" /> </a>
						<h3 class="title">Pedicure/Manicure</h3>
				</div>


			  <div class="item">
						<a href="hairstyling.php">
					<img src="withouttext/hairstyle1.jpg" alt="Salon At Home Hairstyling At Home" /> </a>
					<h3 class="title">Hair Care</h3>
				</div>


		  	<div class="item">
					<a href="partyready.php">
						<img src="withouttext/partyready1.jpg" alt="Salon At Home Party Ready At Home" /> </a>
						<h3 class="title">Party Ready</h3>
				</div>

			  <div class="item">
					<a href="dressup.php">
						<img src="withouttext/makeup1.jpg" alt="Salon At Home Dressup At Home" /> </a>
						<h3 class="title">Make Up/Dress Up</h3>
				</div>

	</div>
	</div>

<style>
.center {
text-align:center; }
</style>

<center class="mt-5">
				<h2 style="font-family: 'Kalam', cursive; color: #FFC300;"><u>Salozone Home Salon Services</u></h2>
				<hr width=200px>
					<p style="text-align:center; color: #DAF7A6 ;">
						We are people from <strong>Salozone</strong> who are based in <strong>Patna,Bihar.</strong> we are here
						to <strong>Redefine</strong> beauty services. At comfort of your home.
					</p>
</center>

			<div class="container combo">
			<div class="row mt-5">
			  <div class="col-xs-4 col-sm-4 mb-3 mb-md-0">
				<div class="card center" style="border-radius: 0px;">
				  <div class="card-body">
					<p class="card-text text-center" style="margin-top:15px; color: #000000;text-decoration: underline;">OFFERS<br> (Promo)</p>
					<a href="offers.php"><button type="button" class="btn btn-success">View</button></a>
				  </div>
				</div>
			  </div>

			  <div class="col-xs-4 col-sm-4 mb-3 mb-md-0">
				<div class="card center" style="border-radius: 0px;">
				  <div class="card-body">
					<p class="card-text text-center" style="margin-top:15px;color: #000000;text-decoration: underline;">EXCLUSIVE<br> COMBOS<br></p>
					<a href="combos.php"><button type="button" class="btn btn-success">View</button></a>
				  </div>
				</div>
			  </div>

			  <div class="col-xs-4 col-sm-4 mb-3 mb-md-0">
				<div class="card center" style="border-radius: 0px;">
				  <div class="card-body">
					<p class="card-text text-center" style="margin-top:15px;color: #000000;text-decoration: underline;">SPECIAL<br> DEALS<br></p>
					<a href="deals.php"><button type="button" class="btn btn-success">View</button></a>
				  </div>
				</div>
			  </div>
			</div>
		</div>
			<div class="row mt-5">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h4 style="color:#FF5733;font-size:20px;">Please Choose your Service(s)..</h4>
					<!--<p class="text-center">Book expert services at salozone.com</p>-->
				</div>
			</div>


			<div class="container mb-5 wow fadeInUp" id="maincards">
				<div class="row">
					<a href="dressup.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
									<img src="withouttext/makeup1.jpg" alt="Makeup">
							</div>
							<div class="container mt-3">
								<h2 style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Makeup</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>


					<a href="haricut.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/haircut1.jpg" alt="Haircut" style="width:100%;min-height:200px">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Haircut</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

				<a href="hairstyling.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/hairstyle1.jpg" alt="Hair Care" style="width:100%;min-height:200px">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Hair Care</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

				<a href="pedicure.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
							<img src="withouttext/manicure1.jpg" alt="Manicure">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Manicure</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

					<a href="mehandi.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
							<img src="withouttext/Mehendi1.jpg" alt="Mehendi">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Mehendi</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>


					<a href="waxing.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/waxing1.jpg" alt="Waxing">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Waxing</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

					<a href="single.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/threading1.jpg" alt="Threading">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Threading</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

				 <a href="cleanup.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/cleanup1.jpg" alt="CleanUp">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Clean Up</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>


					<a href="facial.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/facial1.jpg" alt="Facial">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Facial</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

				<a href="bleaching.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/bleach1.jpg" alt="Bleach" style="width:100%;min-height:200px">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Bleach</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>


				<a href="partyready.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/partyready1.jpg" alt="Party Ready" style="width:100%;min-height:200px">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Party Ready</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>

					<a href="makeup.php" class="text-decoration-none text-reset">
					<div class="column">
						<div class="card">
							<div class="zoom">
								<img src="withouttext/bridal12.jpg" alt="Bridal" style="width:100%;min-height:200px">
							</div>
							<div class="container mt-3">
								<h2  style="text-decoration: underline;font-family: 'Zilla Slab', serif;">Bridal</h2>
								<p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>




	<div id="fh5co-services" class="abtsal mt-5 fh5co-bg-section">
		<div class="container">
		<div class="col-md-4 section-1-box wow fadeInUp">
			<div class="row">
				<div class="col-md-4">
					<div class="section-1-box-icon">
						<i class="fas mt-4 fa-home"></i>
					</div>
				</div>
				<div class="col-md-8">
						<h3 style="color:#FFC300;text-decoration: underline;">Salon at Home</h3>
						<p style="color:#DAF7A6;">Understanding the need of quality Salon services and frustration of visiting different salons and then returning unsatisfied
							we are bringing best of the salon services at your doorstep.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 section-1-box wow fadeInDown">
			<div class="row">
				<div class="col-md-4">
					<div class="section-1-box-icon">
						<i class="fas mt-4 fa-handshake"></i>
					</div>
				</div>
				<div class="col-md-8">
						<h3 style="color:#FFC300; text-decoration: underline;">No Trust Issues</h3>
						<p style="color:#DAF7A6;">We have collaborated with your local salon service providers who are trusted and tested by you. Everything will be the same and
							 familiar only with added training and expertise.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 section-1-box wow fadeInUp">
			<div class="row">
				<div class="col-md-4">
					<div class="section-1-box-icon">
						<i class="fab mt-4 fa-telegram-plane"></i>
					</div>
				</div>
				<div class="col-md-8">
						<h3 style="color:#FFC300;text-decoration: underline;">Cheapest Prices</h3>
						<p style="color:#DAF7A6;">Salozone’s prime motive is to redefine beauty services in Patna with maximum customer satisfaction which is why we
							 promise all these facilities and benefits at the cheapest price .</p>
					</div>
				</div>
			</div>
		</div>
		</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row ">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span style = "color:black">Testimony</span>
					<h2 style = "color:black" >Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12">
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
							<div class="item">
								<div class="testimony-slide active text-center">
									<span style = "color:black" >Smita, via <a href="#" class="twitter">WhatsApp</a></span>
									<blockquote>
										<p style = "color:black" >&ldquo;Massage and Facial service at home was very relaxing and really cheap.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<span style = "color:black" >Puja, via <a href="#" class="twitter">Instagram</a></span>
									<blockquote>
										<p style = "color:black" >&ldquo;Salon service at home is a treat for Patna. Salon at home was really required in Patna&rdquo;</p>
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
