<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>

    <?php
    #index.php
    $pageTitle = 'Index Page';
    if(isset($_POST['local']) && $_POST['local'] == 'login') { $_SESSION['login'] = 1; } else { $_SESSION['login'] = 0; }
    if(isset($_POST['local2'])) { $_SESSION['login'] = 0; }
    //define ;
    ?>
      <?php include('header.php'); ?>
    <link rel="stylesheet" href="jss/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="jss/custom.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">


      <!-- SLIDESHOW. -->
    <?php include('homeslider.php') ?>
    <style>
    .center {
    text-align:center; }
    hr{
        display: block; height: 1px;
        border: 0; border-top: 1px solid #ffcf40;
        margin: 1em 0; padding: 0;
    }
    </style>

    <center class="mt-5">
            <h2 class="mt-5" style="color:#ffcf40">Salozone Home Salon Services</h2>
            <hr width=200px>
              <p style="text-align:center;color:#ffcf40">
                We are people from <strong>Salozone</strong> who are based in <strong>Patna,Bihar.</strong> we are here
                to <strong>Redefine</strong> beauty services. At comfort of your home.
              </p>
    </center>

          <div class="container combo">
          <div class="row mt-5">

            <div class="card center" style="border-radius: 0px;width:30%;margin:1%;margin-left:3%;">
              <div class="card-body">
              <p class="card-text text-center" style="margin-top:15px; color: #000000;">OFFERS<br> (Promo)</p>
              <a href="offers.php"><button type="button" class="btn btn-success">View</button></a>

              </div>
            </div>


            <div class="card center" style="border-radius: 0px;width:30%;margin:1%">
              <div class="card-body">
              <p class="card-text text-center" style="margin-top:15px;color: #000000;">EXCLUSIVE<br> COMBOS<br></p>
              <a href="combos.php"><button type="button" class="btn btn-success">View</button></a>
              </div>
            </div>



            <div class="card center" style="border-radius: 0px;width:30%;margin:1%">
              <div class="card-body">
              <p class="card-text text-center" style="margin-top:15px;color: #000000;">SPECIAL<br> DEALS<br></p>
              <a href="deals.php"><button type="button" class="btn btn-success">View</button></a>
              </div>
            </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h4 style="font-size:20px;">Please Choose your Service(s)..</h4>
              <!--<p class="text-center">Book expert services at salozone.com</p>-->
            </div>
          </div>


          <div class="container mb-5" id="maincards">

              <div class="row">

                <a href="single.php" class="text-decoration-none text-reset">
                <div class="column">
                  <div class="card">
                    <div class="zoom">
                      <img src="withouttext/threading1.jpg" alt="Threading">
                    </div>
                    <div class="container mt-3">
                      <h2>Threading</h2>
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
                      <h2>Waxing</h2>
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
                      <h2>Clean Up</h2>
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
                      <h2>Facial</h2>
                      <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                    </div>
                  </div>
                </a>
                </div>
              </div>

              <div class="row">

                <a href="bleaching.php" class="text-decoration-none text-reset">
                  <div class="column">
                    <div class="card">
                      <div class="zoom">
                        <img src="withouttext/bleach1.jpg" alt="Bleach">
                      </div>
                      <div class="container mt-3">
                        <h2>Bleach</h2>
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
                        <h2>Manicure</h2>
                        <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                      </div>
                    </div>
                  </a>
                  </div>

                <a href="haricut.php" class="text-decoration-none text-reset">
                <div class="column">
                  <div class="card">
                    <div class="zoom">
                      <img src="withouttext/haircut1.jpg" alt="Haircut">
                    </div>
                    <div class="container mt-3">
                      <h2>Haircut</h2>
                      <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                    </div>
                  </div>
                </a>
                </div>

              <a href="hairstyling.php" class="text-decoration-none text-reset">
                <div class="column">
                  <div class="card">
                    <div class="zoom">
                      <img src="withouttext/hairstyle1.jpg" alt="Hair Care">
                    </div>
                    <div class="container mt-3">
                      <h2>Hair Care</h2>
                      <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                    </div>
                  </div>
                </a>
                </div>
              </div>


              <div class="row">

                <a href="partyready.php" class="text-decoration-none text-reset">
                  <div class="column">
                    <div class="card">
                      <div class="zoom">
                        <img src="withouttext/partyready1.jpg" alt="Party Ready">
                      </div>
                      <div class="container mt-3">
                        <h2>Party Ready</h2>
                        <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                      </div>
                    </div>
                  </a>
                  </div>


                <a href="makeup.php" class="text-decoration-none text-reset">
                <div class="column">
                  <div class="card">
                    <div class="zoom">
                      <img src="withouttext/bridal12.jpg" alt="Bridal">
                    </div>
                    <div class="container mt-3">
                      <h2>Bridal</h2>
                      <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                    </div>
                  </div>
                </a>
                </div>

                <a href="dressup.php" class="text-decoration-none text-reset">
                <div class="column">
                  <div class="card">
                    <div class="zoom">
                        <img src="withouttext/makeup1.jpg" alt="Makeup">
                    </div>
                    <div class="container mt-3">
                      <h2>Makeup</h2>
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
                      <h2>Mehendi</h2>
                      <p>Some interesting and attractive text describing the above service in a very attractive manner. We can also include price and more info about the service</p>
                    </div>
                  </div>
                </a>
                </div>
              </div>

          </div>
        </div>




        <div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center " data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-credit-card"></i>
						</span>
						<h3 style="color:#f4cd2a;">SALON AT HOME</h3>
						<p style="color:#bf9b30">Understanding the need of quality Salon services and frustration of visiting different salons and then returning unsatisfied we are bringing best of the salon services at your doorstep.</p>

					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center " data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3 style="color:#f4cd2a;">NO TRUST ISSUES</h3>
						<p style="color:#bf9b30">We have collaborated with your local salon service providers who are trusted and tested by you. Everything will be the same and familiar only with added training and expertise.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center " data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3 style="color:#f4cd2a;">CHEAPEST PRICE GUARANTEED</h3>
						<p style="color:#bf9b30">Salozone’s prime motive is to redefine beauty services in Patna with maximum customer satisfaction which is why we
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
                <div class="owl-carousel1">
                  <div class="item">
                    <div class=" active text-center">
                      <span style = "color:black" >Saumya, via <a href="#" class="twitter">Twitter</a></span>
                      <blockquote>
                        <p style = "color:black;" class="text-center" >&ldquo;Very pocket-friendly , now we don’t have to think several times before getting a proper professional make over.&rdquo;</p>
                      </blockquote>
                    </div>
                  </div>
                  <div class="item">
                    <div class=" active text-center">
                      <span style = "color:black" >Shubhi, via <a href="#" class="twitter">Twitter</a></span>
                      <blockquote>
                        <p style = "color:black" class="text-center" > &ldquo;Getting our local familiar salon service providers at our home serving us with added care and humbleness is great and very relieving.&rdquo;</p>
                      </blockquote>
                    </div>
                  </div>
                  <div class="item">
                    <div class=" active text-center">
                      <span style = "color:black" >Radhika, via <a href="#" class="twitter">Twitter</a></span>
                      <blockquote>
                        <p style = "color:black" class="text-center">&ldquo;Very useful for college students like us who don’t have time to visit salons and then wait in a long queue.&rdquo;</p>
                      </blockquote>
                    </div>
                  </div>
                  <div class="item">
                    <div class=" active text-center">
                      <span style = "color:black" >Smita, via <a href="#" class="twitter">WhatsApp</a></span>
                      <blockquote>
                        <p style = "color:black" class="text-center" >&ldquo;Massage and Facial service at home was very relaxing and really cheap.&rdquo;</p>
                      </blockquote>
                    </div>
                  </div>
                  <div class="item">
                    <div class=" active text-center">
                      <span style = "color:black" >Puja, via <a href="#" class="twitter">Instagram</a></span>
                      <blockquote>
                        <p style = "color:black" class="text-center" >&ldquo;Salon service at home is a treat for Patna. Salon at home was really required in Patna&rdquo;</p>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
       <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
      <script>
  $('.owl-carousel1').slick({
    autoplay:true,
    loop:true,
    responsiveClass:true,
    dots: true,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    swipeToSlide: true,
})
      </script>

    <?php include('footer.php'); ?>
  </body>
</html>
