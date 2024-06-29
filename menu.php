  <?php include 'dbconnect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodev - Menu</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/styles_menu.css">
    <link rel="icon" type="image/png" sizes="512x512" href="./img/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="./js/menu.js"></script>
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>
        <br>
        <h1 class="league-spartan" style="text-align: center;">Our Menu</h1>
        <div class="menu-category" id="starters">
            <h2 class="league-spartan" onclick="toggleMenu('starters')">Starters <i class="fas fa-angle-down"></i></h2>
            <div class="menu-items" id="starters-items" style="display: grid;">
                <?php
                    $sql = "SELECT * FROM items WHERE item_id>=100 AND item_id<200";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $itemId = $row['item_id'];
                        $itemName = $row['item_name'];
                        $itemPrice = $row['item_price'];
                        $itemDesc = $row['item_description'];
                        $itemImage = $row['item_image'];
                ?>   
                <div class="menu-item">
                    <div class="menu-item-title"> 
                        <h3><?php echo $row['item_name']; ?></h3>
                        <p>₪<?php echo $row['item_price'];?></p>
                    </div>
                    <p><?php echo $row['item_description']; ?></p>
                    <?php echo '<img src="'.$row['item_image'].'" alt="Image" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">' ?>
                    <button> <a href="menu.php?itm_id=<?php echo $row['item_id'];?>"> Add to Cart</a></button>
                </div>
 <?php }?>
            </div>
        </div>
        <div class="menu-category" id="salads">
            <h2 class="league-spartan" onclick="toggleMenu('salads')">Salads <i class="fas fa-angle-down"></i></h2>
            <div class="menu-items" id="salads-items">
                <?php
                    $sql = "SELECT * FROM items WHERE item_id>=200 AND item_id<300";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $itemId = $row['item_id'];
                            $itemName = $row['item_name'];
                            $itemPrice = $row['item_price'];
                            $itemDesc = $row['item_description'];
                            $itemImage = $row['item_image'];
                ?>   
                    <div class="menu-item">
                        <div class="menu-item-title"> 
                            <h3><?php echo $row['item_name']; ?></h3>
                            <p>₪<?php echo $row['item_price'];?></p>
                        </div>
                        <p><?php echo $row['item_description']; ?></p>
                        <?php echo '<img src="'.$row['item_image'].'" alt="Image" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">' ?>
                        <button> <a href="menu.php?itm_id=<?php echo $row['item_id'];?>"> Add to Cart</a></button>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="menu-category" id="pizzas">
            <h2 class="league-spartan" onclick="toggleMenu('pizzas')">Pizzas <i class="fas fa-angle-down"></i></h2>
            <div class="menu-items" id="pizzas-items">
                <?php
                    $sql = "SELECT * FROM items WHERE item_id>=300 AND item_id<400";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $itemId = $row['item_id'];
                            $itemName = $row['item_name'];
                            $itemPrice = $row['item_price'];
                            $itemDesc = $row['item_description'];
                            $itemImage = $row['item_image'];
                ?>   
                    <div class="menu-item">
                        <div class="menu-item-title"> 
                            <h3><?php echo $row['item_name']; ?></h3>
                            <p>₪<?php echo $row['item_price'];?></p>
                        </div>
                        <p><?php echo $row['item_description']; ?></p>
                        <?php echo '<img src="'.$row['item_image'].'" alt="Image" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">' ?>
                        <button> <a href="menu.php?itm_id=<?php echo $row['item_id'];?>"> Add to Cart</a></button>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="menu-category" id="pastas">
            <h2 class="league-spartan" onclick="toggleMenu('pastas')">Pastas <i class="fas fa-angle-down"></i></h2>
            <div class="menu-items" id="pastas-items">
                <?php
                        $sql = "SELECT * FROM items WHERE item_id>=400 AND item_id<500";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $itemId = $row['item_id'];
                                $itemName = $row['item_name'];
                                $itemPrice = $row['item_price'];
                                $itemDesc = $row['item_description'];
                                $itemImage = $row['item_image'];
                    ?>   
                        <div class="menu-item">
                            <div class="menu-item-title"> 
                                <h3><?php echo $row['item_name']; ?></h3>
                                <p>₪<?php echo $row['item_price'];?></p>
                            </div>
                            <p><?php echo $row['item_description']; ?></p>
                            <?php echo '<img src="'.$row['item_image'].'" alt="Image" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">' ?>
                            <button> <a href="menu.php?itm_id=<?php echo $row['item_id'];?>"> Add to Cart</a></button>
                        </div>
                <?php }?>
            </div>
        </div>
        <div class="menu-category" id="desserts">
            <h2 class="league-spartan" onclick="toggleMenu('desserts')">Desserts <i class="fas fa-angle-down"></i></h2>
            <div class="menu-items" id="desserts-items">
                <?php
                    $sql = "SELECT * FROM items WHERE item_id>=500 AND item_id<600";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $itemId = $row['item_id'];
                            $itemName = $row['item_name'];
                            $itemPrice = $row['item_price'];
                            $itemDesc = $row['item_description'];
                            $itemImage = $row['item_image'];
                ?>   
                    <div class="menu-item">
                        <div class="menu-item-title"> 
                            <h3><?php echo $row['item_name']; ?></h3>
                            <p>₪<?php echo $row['item_price'];?></p>
                        </div>
                        <p><?php echo $row['item_description']; ?></p>
                        <?php echo '<img src="'.$row['item_image'].'" alt="Image" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">' ?>
                        <button> <a href="menu.php?itm_id=<?php echo $row['item_id'];?>"> Add to Cart</a></button>
                    </div>
                <?php }?>
            </div>
        </div>
    </main>

    <br><br>
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



    <script>
        function toggleMenu(category) {
            var items = document.getElementById(category + '-items');
            if (items.style.display === 'grid') {
                items.style.display = 'none';
            } else {
                items.style.display = 'grid';
            }
        }
    </script>
</body>
</html>

