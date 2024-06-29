<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodev - Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/styles_index.css">
    <link rel="icon" type="image/png" sizes="512x512" href="./img/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <div class="banner">
        <h1 class="league-spartan">Discover Our Delicious Menu!</h1>
    </div>
    <div class="content">
        <p>Welcome to our restaurant. Enjoy a great dining experience with just a few clicks.</p>
        <button onclick="myFunction()">Click Me!</button>
    </div>
    <div class="banner2">
        <h1 class="league-spartan">What is nodev?</h1>
        <p>
            Chef Israel Israeli opens a new restaurant in the heart of Ra'Anana: nodev. <br>
            Enjoy French and Halavi cuisine in a trendy vibes. <br>
            In a lively neighborhood and a pleasant street, find us at Ben Gurion St. 5  - Ra'Anana!
        </p>
    </div>
    <div class="content">
        <video width="70%" controls autoplay >
            <source src="https://cdn.pixabay.com/video/2022/07/10/123629-728697948_large.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
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
            <form action="./submitContact.php" method="post">
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
