
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="assets/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
  .swiper-container {
   width: 97%;
   padding-top: 50px;

 }
 .swiper-slide {
   background-position: center;
   background-size: cover;
   width: 300px;
   height: 300px;
 }
 .swiper-slide img{
   width:100%;
   border-radius: 1%;
 }

  </style>
</head>
<body>
  <!-- Swiper -->
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

  <!-- Swiper JS -->
  <script src="assets/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper('.swiper-container', {
   slidesPerView: 4,
   spaceBetween: 50,
   autoplay: true,
   loop: true,
   pagination: {
     el: '.swiper-pagination',
     clickable: true,
   },
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
       slidesPerView: 2,
       spaceBetween: 20,
     },
     320: {
       slidesPerView: 1,
       spaceBetween: 10,
     }
   }
 });
  </script>
</body>
</html>
