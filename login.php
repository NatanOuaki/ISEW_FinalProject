<?php
session_start();
require_once("dbconnect.php"); // Ensure db connection is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["loginusername"];
    $password = $_POST["loginpassword"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        $userId = $row['id'];
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userId'] = $userId;
            header("location: index.php?loginsuccess=true");
            exit();
        } else {
            header("location: index.php?loginsuccess=false");
            exit();
        }
    } else {
        header("location: index.php?loginsuccess=false");
        exit();
    }
}

// Check if user is logged in to modify the navigation
$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodev - Login</title>
    <link rel="icon" type="image/png" sizes="512x512" href="./img/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/styles_index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>$().alert()
$(".alert").alert()</script>  
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
<h1 class="league-spartan" style="text-align: center;">Please sign in</h1>
 <div class="container" align="center" >
      <form class="form-signin" method="post" action="" style="width:450px; height:450px;">
        <br>
        <label for="loginusername" class="sr-only">Email address</label>
        <input type="text" id="loginusername" name="loginusername" class="form-control" placeholder="Username" required="" autofocus=""><br>
        <label for="loginpassword" class="sr-only">Password</label>
        <input type="password" id="loginpassword" name="loginpassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
		<p class="h4">Not registered? <a href="register.php">Create an account</a></p>
      </form>

    </div> <!-- /container -->
  

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
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["loginusername"];
    $password = $_POST["loginpassword"]; 
    
    $sql = "Select * from users where username='$username'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $row=mysqli_fetch_assoc($result);
        $userId = $row['id'];
        if (password_verify($password, $row['password'])){ 
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userId'] = $userId;
            header("location: index.php?loginsuccess=true");
            exit();
        } 
        else{
            header("location: index.php?loginsuccess=false");
        }
    } 
    else{
        header("location: index.php?loginsuccess=false");
    }
}    
?>