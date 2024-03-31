<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
    exit;
}

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect the user to the login page
    header('location:login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* navbar */
    .navbar {
      width: 100%;
      min-height: 10vh;
      background: #121213;
      color: #525252;
    }

    .nav {
      background: #1a1a1a;
      width: 100%;
      padding: 10px 10%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    .logo {
      font-size: 30px;
      color: #fff;
      text-decoration: none;
    }

    .user-pic {
      width: 40px;
      border-radius: 50%;
      cursor: pointer;
      margin-left: 30px;
    }

    .nav ul {
      width: 100%;
      text-align: right;
    }

    .nav ul li {
      display: inline-block;
      list-style: none;
      margin: 10px 20px;
    }

    .nav ul li a {
      color: #fff;
      text-decoration: none;
    }


    @media only screen and (max-width: 768px) {
      .nav {
        flex-direction: column;
        align-items: flex-start;
        padding: 10px;
      }

      .nav ul {
        text-align: left;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-top: 10px;
      }

      .nav ul li {
        margin: 10px 0;
      }

      .user-pic {
        margin-left: 0;
        margin-top: 10px;
      }
    }

    /* navbar  */



    /* swiper  */
    .swiper-container {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      margin-top: 10vw;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      background: #111;
      width: 100%;
      padding-top: 50px;
      padding-bottom: 80px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 500px;
      -webkit-box-reflect: below 1px linear-gradient(transparent,
          transparent, #0006);
    }

    .swiper-3d {
      perspective: 500px;
    }

    /* swiper  */
  </style>

  <body>

    <div class="navbar">
      <div class="nav">
        <a class="logo" href="#">𑁍┊c𝚘𝕕ɇʳ𝖘</a>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <img class="user-pic" src="https://i.pinimg.com/236x/a4/e8/8f/a4e88fc30e5e5cf7ce63608defec0d6d.jpg"
          alt="profile img">

      </div>
    </div>

    </div>

    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/a7/7a/1c/a77a1cd40f391ded41cb35600ab39b78.jpg);">
        </div>

        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/28/4e/00/284e00f68744b3351101689372c25c06.jpg);">
        </div>

        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/85/8e/27/858e27d36a164126b42f805995e757b9.jpg);">
        </div>

        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/35/56/47/35564708f6922dd1eb83eeee0851387b.jpg);">
        </div>

        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/41/d2/9e/41d29ee44adf9c6cde211ae76e4b55ed.jpg);">
        </div>

        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/e3/6f/05/e36f05d0b61f026594ace34fd27999e7.jpg);">
        </div>

        <div class="swiper-slide"
          style="background-image: url(https://i.pinimg.com/236x/02/ba/0a/02ba0a89244046c3fd6ad41d02e8a34c.jpg);">
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
        pagination: {
          el: '.swiper-pagination',
        },
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
          rotate: 20,
          stretch: 0,
          depth: 200,
          modifier: 2,
          slideShadows: true,
        },
        loop: true,
        spaceBetween: 10, // Adjust this value as needed
        autoplay: {
          delay: 3000, // Delay between slides in milliseconds
          pauseOnMouseEnter: true, // Pause autoplay when the mouse hovers over the slider
        },

        on: {
          slideChange: function () {
            var slides = this.slides;
            for (var i = 0; i < slides.length; i++) {
              if (i !== this.activeIndex) {
                slides[i].style.filter = 'blur(3px)';
              } else {
                slides[i].style.filter = 'none';
              }
            }
          },
        },
      });
    </script>
  </body>

  </html>
</body>

</html>