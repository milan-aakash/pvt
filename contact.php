<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/contact.css">

    <title>Contact</title>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Testimonial</a></li>
                <li>
                    <a href="login.php"><input type="submit" id="btn" name="login" value="LogIn"></a>
                </li>
            </ul>
            <h1 class="logo">𑁍┊c𝚘𝕕ɇʳ𝖘</h1>
        </div>
    </nav>

    <div class="containerr " style="background: url(https://r4.wallpaperflare.com/wallpaper/597/870/408/anime-girl-sci-fi-bodysuit-phone-call-wallpaper-fda54838293b64fd35e169c77755655c.jpg) no-repeat; background-size: 100%; height: 110vh; max-width: 100vw; display: flex; flex-direction: column; align-items: center; margin-top: 6vw; ">
        <div class="forum" style="background: transparent; backdrop-filter: blur(3p);">
            <h2 class="text-center" style="padding-top: 3vw; padding-bottom: 2vw; color: whitesmoke; ">Contact Us</h2>
            <form method="post" action="/contact/" style="border: 2px solid black; border-radius: 10px; max-width: 50vw; color: whitesmoke;">

                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                    <div style="display: flex; flex-direction: row; width: 24vw;">
                        <div class="col-12 col-md-6" style="width: 19.7vw; margin-right: 23px;">
                            <label for="name" class="form-label">FirstName <span class="text-danger">*</span></label>

                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="firsname" name="firstname" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" style="width: 19.7vw;">
                            <label for="lastname" class="form-label">Lastname <span class="text-danger">*</span></label>

                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="" required>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6" style="width: 21.5vw;">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                        </div>

                    </div>
                    <div class="col-12 col-md-6" style="width: 21.5vw;">
                        <label for="phone" class="form-label">Phone Number</label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            </span>
                            <input type="tel" class="form-control" id="phone" name="phone" value="">
                        </div>

                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-grid" style="width: 10vw; margin-left: 17vw;">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <footer>
        <div class="containerr">
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
            <p>&copy; 2024 Aakash Singh: Web Developer</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/e46c3fe067.js" crossorigin="anonymous"></script>
</body>

</html>