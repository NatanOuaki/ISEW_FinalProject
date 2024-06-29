<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodev - Order</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/styles_order.css">
    <link rel="icon" type="image/png" sizes="512x512" href="./img/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="./js/order.js"></script>
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

<main style="padding: 20px; ">
    <h1 class="league-spartan" style="text-align: center;">Place Your Order</h1>
        <div style=" display:grid; grid-template-columns: 60% 30%;  gap:10%">
    <div id="cart">
        <h2 style="text-align: center;">Your Cart</h2>
        <table id="cart-table" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="border: 1px solid #ddd; padding: 8px;">No.</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Item Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Item Price</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Total Price</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Remove</th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table>
        <p style="text-align: right; font-weight: bold;">Total: ₪<span id="cart-total">0</span></p>

        <form id="order-form" style="text-align: center;">
            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; cursor: pointer;">Place Order</button>
        </form>    
    </div>

    <div>
        <h1>Tip Calculator</h1>
        <form action="tip_calculator.php" method="post" >
            <label for="billAmount">Bill Amount:</label>
            <input type="number" id="billAmount" name="billAmount" required><br><br>
            
            <label for="tipPercentage">Tip Percentage:</label>
            <input type="number" id="tipPercentage" name="tipPercentage" required><br><br>
            
            <label for="peopleCount">Number of People:</label>
            <input type="number" id="peopleCount" name="peopleCount" required><br><br>
            
            <button type="submit">Calculate Tip</button>
        </form>
    </div>
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


