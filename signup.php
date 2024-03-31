<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ensure to hash the password before inserting it into the database for security reasons
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO `users` (`firstname`, `email`, `password`) 
              VALUES ('$firstname', '$email', '$hashed_password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/sign.css">

    <title>SignUp Page</title>
</head>

<style>
    footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0 5px 0;
    text-align: center;
    bottom: 0;
    position: fixed;
    width: 100%;
    height: 13vh;
}

.social-links {
    list-style: none;
    padding: 0;
    margin: 0 0 10px 0;
    display: flex;
    justify-content: center;
}

.social-links li {
    margin: 0 10px;
}

.social-links li a {
    color: #fff;
    font-size: 24px;
    text-decoration: none;
}
</style>


<body>


    <?php
    include "navbar.php"

    ?>

    <div class="center">
        <h1>Sign Up</h1>
        <form action="#" method="POST" autocomplete="off">
            <div class="form">
                <div class="name">
                    <label for="">Firstname :</label>
                    <input type="text" name="firstname" class="textfield" id="username"  />
                    
                </div>
                <div class="egp">
                    <label for="" >Email <span style="margin-left: 25px;">:</span></label>
                    <input type="email" name="email" class="textfield" id="username" />
                   
                </div>
                <div class="password">
                    <label for="">Password :</label>
                    <input type="password" name="password" class="textfield" id="password" />
                    
                </div>

                <div class="forgetpass">
                    <a href="#" class="link" onclick="message()">Forget Password?</a>
                    <input type="submit" name="login" value="Sign Up" class="btn">
                </div>


                <div class="signup">
                    Already have an Account ! <a href="login.php" class="link">LogIn Here</a>
                </div>
            </div>
        </form>
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

    <script>
        function message() {
            alert("bhulja ab kuch na ho payega");
        }
    </script>

    <script src="https://kit.fontawesome.com/e46c3fe067.js" crossorigin="anonymous"></script>

</body>

</html>