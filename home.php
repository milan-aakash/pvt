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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/home.css">

</head>

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


        </div>
    </div>

    <div class="brief">
        <h1>
            Hello! I Am <span> Aakash Singh</span>
        </h1>

        <div class="qoute">
            <img src="me.png" alt="">
            <div class="judge">
                <h5>A Developer Who</h5>
                <h2>
                    Judges a book <br> by it's <span>Cover</span>...
                </h2>
                <p>Because if the cover does not impress you what else can?</p>
            </div>
        </div>

    </div>

    <div class="education">
        <div class="edu">
            <h1>I'm a Web Developer</h1>
            <p>Currently I'm a Student at Maharaja Agrasen College, <span>University of Delhi</span></p>
        </div>
        <div class="summary">
            <p>A self taught Web Developer. Pursuing BA Program (Computer Science and History) <br>
                I am skilled in creating responsive, user-friendly and interactive websites. <br>
                A fervent commitment to staying updated with emerging web trends and technologies.
            </p>
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


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
