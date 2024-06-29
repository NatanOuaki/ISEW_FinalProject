<?php
session_start();
require("dbconnect.php");

$showAlert = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['password_confirmation'];

    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if ($numExistRows > 0) {
        $showError = "Username Already Exists";
            echo '<p class="h4"><script>alert("' . $showError . '");</script></p>';
            echo "<script>window.open('../register.php','_self')</script>";
            exit();
    } else {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `firstName`, `lastName`, `email`, `phone`, `password`, `joinDate`) VALUES ('$username', '$firstName', '$lastName', '$email', '$phone', '$hash', current_timestamp())";

            if (mysqli_query($conn, $sql)) {
                $showAlert = true;
                    echo '<p class="h4"><script>alert("Account created successfully!")</script></p>';
		            echo "<script>window.open('../login.php','_self')</script>";
                exit();
            } else {
                $showError = "Registration failed: " . mysqli_error($conn);
                echo '<p class="h4"><script>alert("' . $showError . '");</script></p>';
                echo "<script>window.open('../register.php','_self')</script>";
                exit();
            }
        } else {
            $showError = "Passwords do not match";
            echo '<p class="h4"><script>alert("' . $showError . '");</script></p>';
            echo "<script>window.open('../register.php','_self')</script>";
            exit();
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodev - Register</title>
    <link rel="icon" type="image/png" sizes="512x512" href="./img/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/styles_index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <?php include 'navbar.php'; ?>
</header>

<h1 class="league-spartan" style="text-align: center;">Please sign up</h1>
<br>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form class="form-signin" role="form" method="post" action="register.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="3" required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required="">
            </div>
            <div class="form-group">
                <input type="tel" name="phone" id="phone" class="form-control input-lg" placeholder="Phone Number" tabindex="5" required="">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="6" required="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="7" required="">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
            <p class="h4" style="text-align:center">Already have an account? <a href="login.php">Login</a></p>
        </form>
        <br><br>
    </div>
</div>
</div>

<footer>
    <div class="footer-left">
        <h1 class="league-spartan">Address</h1>
        <div class="contact-item">
            <a href="https://maps.app.goo.gl/nf2AEpRwfQXf9amq6"><img src="./img/map-pin.svg" alt="Map Pin">Ben Gurion St. 5  - Ra'Anana</a>
        </div>
        <div class="contact-item">
            <a href="tel:+972587055252"><img src="./img/phone.svg" alt="Phone">Phone: +972.58.705.5252</a>
        </div>
        <div class="contact-item">
            <a href="mailto:nodev@nodev.tech"><img src="./img/mail.svg" alt="Email">Email: nodev@nodev.tech</a>
        </div>
        <div class="contact-item">
            <a href="https://www.instagram.com/_nodev/"><img src="./img/instagram.svg" alt="Instagram">Instagram: @_nodev</a>
        </div>
        <div class="contact-item">
            <a href="https://github.com/NatanOuaki/ISEW_FinalProject"><img src="./img/github.svg" alt="GitHub">GitHub: Source Code</a>
        </div>
    </div>

    <div class="vl"></div>
    <div class="footer-right">
        <form action="./php/submitContact.php" method="post">
            <h1 class="league-spartan">Contact</h1>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message for nodev :</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</footer>
</body>
</html>
