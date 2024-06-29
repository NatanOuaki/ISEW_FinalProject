<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodev - Review</title>
    <link rel="stylesheet" href="./css/styles_review.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/png" sizes="512x512" href="./img/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <main>
        <br>
        <h1 class="league-spartan" style="text-align: center;">Feedback</h1>
        <br>
        <img src="./img/feedback.png" id="feedbackImg" alt="Feedback" >
        <div class="form-container">
            <form action="sendEmail.php" method="post" enctype="multipart/form-data">
                <div class="form-group inline">
                    <div class="form-group firstName-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group lastName-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="form-group radio-group">
                    <label>Gender:</label>
                    <div class="radio-element">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                    </div>
                    <div class="radio-element">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Female</label>
                    </div>
                    <div class="radio-element">
                        <input type="radio" id="other" name="gender" value="other" required>
                        <label for="other">Other</label>
                    </div>
                </div>

                <div class="form-group inline">
                    <div class="form-group email-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group password-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tel">Phone:</label>
                    <input type="tel" id="tel" name="tel" required>
                </div>

                <div class="form-group">
                    <label for="url">Website where you alredy give a feedback:</label>
                    <input type="url" id="url" name="url" required>
                </div>

                <div class="form-group inline">
                    <label for="range">Satisfaction:</label>
                    <span>0</span>
                    <input type="range" id="range" name="range" min="0" max="10" step="1" value="5">
                    <div style="display: flex; justify-content: space-between;">
                        <span>10</span>
                    </div>
                </div>

                <div class="form-group inline">
                    <label for="number">Table number:</label>
                    <input type="number" id="number" name="number" required>
                </div>

                <div class="form-group inline">
                    <label for="color">Table color:</label>
                    <input type="color" id="color" name="color" value="#007bff">
                </div>

                <div class="form-group inline">
                    <div class="form-group date-group">
                        <label for="date">Date of reservation:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group time-group">
                        <label for="time">Time:</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datetime">Datetime you arrived at the restaurant:</label>
                    <input type="datetime-local" id="datetime" name="datetime" required>
                </div>

                <div class="form-group">
                    <label for="textarea">Aditionnal comments:</label>
                    <textarea id="textarea" name="textarea" required></textarea>
                </div>

                <div class="form-group">
                    <label for="file">Image:</label>
                    <input type="file" id="file" name="file">
                </div>

                <div class="form-group inline">
                    <label for="select">How did you hear about us:</label>
                    <select id="select" name="select">
                        <option value=" ">...</option>
                        <option value="Online">Online</option>
                        <option value="friend">Through a friend</option>
                        <option value="social">Social Media</option>
                        <option value="friend">Advertisement</option>
                        <option value="friend">Others</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="datalist">If you heared about us from internet, from each search browser :</label>
                    <input list="browser" name="browser" id="browser">
                    <datalist id="browser">
                        <option value="Chrome">
                        <option value="Firefox">
                        <option value="Edge">
                        <option value="Safari">
                        <option value="Opera">
                    </datalist>
                </div>

                <div class="form-group checkbox-group">
                    <label>Location you alredy visit: </label>
                    <div class="checkbox-element">
                        <input type="checkbox" id="netanya" name="netanya">
                        <label for="netanya">Netanya</label>
                    </div>
                    <div class="checkbox-element">
                        <input type="checkbox" id="raanana" name="raanana">
                        <label for="raanana">Ra'Anana</label>
                    </div>
                    <div class="checkbox-element">
                        <input type="checkbox" id="TelAviv" name="TelAviv">
                        <label for="TelAviv">Tel Aviv</label>
                    </div>
                </div>


                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
    


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
                <h1>Contact</h1>
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
