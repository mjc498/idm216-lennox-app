<?php 
require '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lennox Got Lunch</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header>
        <h1>HELLO, AVA! 
        <img src="icons/cart-icon.png" alt="Shopping cart icon with items" class="cart-icon"></h1>
    </header>

    <main>
        <section class="points-bar">
            <p>Keep earning points towards FREE rewards!</p>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <p class="points-earned">
                <img src="icons/points-icon.png" alt="Star icon representing points" class="star-icon">
                <span class="points-number">4030</span> Points earned
            </p>        
        </section>

        <section>
            <h2 class="section-title">PREVIOUS ORDERS</h2>
            <div class="orders-container">
                <div class="order-item">
                    <img src="images/placeholder.png" alt="BBQ Chicken Cheesesteak image">
                    <h3>BBQ Chicken Cheesesteak</h3>
                    <p>$12</p>
                    <p class="last-ordered">Last ordered 12/2/24</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Beef Banh Mi image">
                    <h3>Beef Banh Mi</h3>
                    <p>$11.75</p>
                    <p class="last-ordered">Last ordered 11/30/24</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title">POPULAR <span class="see-more">See more</span></h2>
            <div class="popular-items">
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Original Banh Mi image">
                    <h3>Original</h3>
                    <p>$9</p>
                    <p>Wow! So Banh Mi! So good! So great!</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Beef Banh Mi image">
                    <h3>Beef</h3>
                    <p>$9.75</p>
                    <p>Wow! So Banh Mi! So good! So great!</p>
                </div>
            </div>
        </section>
    </main>

    <nav class="footer-nav">
        <img src="icons/home-icon.png" alt="Home" aria-label="Go to homepage">
        <img src="icons/menu-icon.png" alt="Menu" aria-label="View the menu">
        <img src="icons/heart-icon.png" alt="Favorites" aria-label="Go to favorites">
        <img src="icons/profile-icon.png" alt="Profile" aria-label="View profile">
    </nav>

</body>
</html>
