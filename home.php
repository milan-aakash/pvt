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

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap'); */
    @import url('https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* navbar */
    .navbar {
        font-family: "Nova Mono", monospace;
        font-weight: 900;
        font-style: normal;
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

    /* navbar */



    /* swiper */
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

    /* swiper */


    /* footer */
    .footer-container {
        max-width: 1170px;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    ul {
        list-style: none;
    }

    .footer {
        background-color: #24262b;
        padding: 70px 0;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
    }

    .footer-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        position: relative;
        font-family: "Nova Mono", monospace;
        font-weight: 900;
        font-style: normal;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-family: "Noto Serif Display", serif;

        font-weight: 400;
        font-style: normal;

        font-size: 16px;
        text-transform: capitalize;

        text-decoration: none;

        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    /* .footer-col .social-links a:hover {
color: #24262b;
background-color: #5e0505;
} */

    .footer-col .social-links .facebook:hover {
        color: #3B5998;
        ;
        background-color: #000;
    }

    .footer-col .social-links .google:hover {
        color: #00B6F1;
        background-color: #000;
    }

    .footer-col .social-links .instagram:hover {
        color: #ee2a7b;
        background: #000;
    }

    .footer-col .social-links .linkedin:hover {
        color: #04669A;
        background-color: #000;
    }



    /* Define the glow effect for each social link */
    @keyframes glowing-facebook {
        0% {
            box-shadow: 0 0 10px #fff;
        }

        50% {
            box-shadow: 0 0 20px #3b5998;
        }

        100% {
            box-shadow: 0 0 10px #fff;
        }
    }

    @keyframes glowing-google {
        0% {
            box-shadow: 0 0 10px #ff0000;
        }

        50% {
            box-shadow: 0 0 20px #fbff1b;
        }

        100% {
            box-shadow: 0 0 10px #108800;
        }
    }

    @keyframes glowing-instagram {
        0% {
            box-shadow: 0 0 10px #fdf497;
        }

        50% {
            box-shadow: 0 0 20px #d6249f;
        }

        100% {
            box-shadow: 0 0 10px #285AEB;
        }
    }

    @keyframes glowing-linkedin {
        0% {
            box-shadow: 0 0 10px #fff;
        }

        50% {
            box-shadow: 0 0 20px #0077b5;
        }

        100% {
            box-shadow: 0 0 10px #fff;
        }
    }



    /* Apply specific glow animations on hover for each social link */
    .glow.facebook:hover {
        animation: glowing-facebook 1.5s infinite;
    }

    .glow.google:hover {
        animation: glowing-google 1.5s infinite;
    }

    .glow.instagram:hover {
        animation: glowing-instagram 1.5s infinite;
    }

    .glow.linkedin:hover {
        animation: glowing-linkedin 1.5s infinite;
    }



    /*responsive*/
    @media(max-width: 767px) {
        .footer-col {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media(max-width: 574px) {
        .footer-col {
            width: 100%;
        }
    }

    /* footer */
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

    <footer class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h4>𑁍┊c𝚘𝕕ɇʳ𝖘</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">branches</a></li>
                        <li><a href="#">Placements</a></li>
                        <li><a href="#">Activities</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Student Section</h4>
                    <ul>
                        <li><a href="#">Student Grievances</a></li>
                        <li><a href="#">Study Material Status</a></li>
                        <li><a href="#">Placement Assistance</a></li>
                        <li><a href="#">Alumni</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#" class="glow facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="glow google "><i class="fab fa-google"></i></a>
                        <a href="#" class="glow instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="glow linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e46c3fe067.js" crossorigin="anonymous"></script>
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
