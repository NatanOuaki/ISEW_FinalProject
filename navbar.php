<?php
session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<div class="header-container">
    <a href="index.php"><img src="./img/logo.png" alt="Nodev Logo" class="logo"></a>
    <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="order.php">Order</a>
        <a href="review.php">Review</a>
        <?php if ($loggedIn) : ?>
            <a href="logout.php">Logout</a>
        <?php else : ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
        <a href="./admin/index.php">Admin</a>
    </nav>
</div>
