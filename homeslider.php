<!DOCTYPE html>

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <style type="text/css">

    h3{
      color: #bf9b30;
    }

    .slider {
        width: 100%;
        height: 50%;
    }

    .slick-dots li button:before {
        color: red;
      }

      .slick-dots li button {
        color: green;
      }


    .slick-prev:before,
    .slick-next:before {
      color: black;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

    .slick-current img{
      opacity: 1;
    }

    .slick-current h3{
      display: block;
      position: relative;
      margin: auto;
    }

    .regular{
      position: relative;
    }

    @media screen and (max-width: 768px) {
      .slick-active {
        opacity: 1;
      }
      .slick-slide {
        transition: all ease-in-out .3s;
        opacity: 1;
      }
    }

    @media screen and (max-width: 480px) {
      .slick-active {
        opacity: 1;
      }
      .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
      }
      .slick-current {
        opacity: 1;
      }
    }

  </style>



  <div class="regular slider">
        <div>
          <a href="single.php">
            <img src="withouttext/threading1.jpg" alt="Salon At Home Threading At Home" /> </a>
            <h3>Threading<h3>
        </div>
        <div>
          <a href="waxing.php">
              <img src="withouttext/waxing1.jpg" alt="Salon At Home Waxing At Home" /> </a>
              <h3>Waxing<h3>
        </div>
        <div>
          <a href="cleanup.php">
          <img src="withouttext/cleanup1.jpg" alt="Salon At Home Cleanup At Home" /> </a>
          <h3>Cleanup<h3>
        </div>
        <div>
          <a href="facial.php">
            <img src="withouttext/facial1.jpg" alt="Salon At Home Facial At Home" /> </a>
            <h3>Facial<h3>
        </div>
        <div>
          <a href="bleaching.php">
          <img src="withouttext/bleach1.jpg" alt="Salon At Home Bleach At Home" /> </a>
          <h3>Bleaching<h3>
        </div>
        <div>
          <a href="pedicure.php">
            <img src="withouttext/manicure1.jpg" alt="Salon At Home Pedicure/Manicure At Home" /> </a>
            <h3>Manicure/Pedicure<h3>
        </div>
        <div>
            <a href="hairstyling.php">
          <img src="withouttext/hairstyle1.jpg" alt="Salon At Home Hairstyling At Home" /> </a>
          <h3>Haistyling<h3>
        </div>
        <div>
          <a href="partyready.php">
            <img src="withouttext/partyready1.jpg" alt="Salon At Home Party Ready At Home" /> </a>
            <h3>Party Ready<h3>
        </div>
        <div class="items">
          <a href="dressup.php">
            <img src="withouttext/makeup1.jpg" alt="Salon At Home Dressup At Home" /> </a>
            <h3>Dressup<h3>
        </div>
  </div>


  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $('.regular').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    slidesToScroll: 5,
    swipeToSlide: true,
    pauseOnHover:false,
    autoplay: true,
    autoplaySpeed: 2000,
    dots:true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 2,
          pauseOnHover:false,
            swipeToSlide: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          swipeToSlide: true,
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
          pauseOnHover:false,
          dots:true,

        }
      }
    ]
  });
</script>
