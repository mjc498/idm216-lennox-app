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
        <h1>HELLO, GUEST! 
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
                <span class="points-number">0</span> Points earned
            </p>        
        </section>

        <section>
            <h2 class="section-title">POPULAR</h2>
            <div class="orders-container">
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Original</h3>
                        <p class="price">$9</p>
                    </div>
                    <p>Description lorem ipsum...</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Beef</h3>
                        <p class="price">$9.75</p>
                    </div>
                    <p>Description lorem ipsum...</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Pork</h3>
                        <p class="price">$9.75</p>
                    </div>
                    <p>Description lorem ipsum...</p>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section>
       
        <section>
            <h2 class="section-title">MAKE IT A COMBO</h2>
            <div class="orders-container">
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Fries</h3>
                        <p class="price">$2</p>
                    </div>
                    <p>Description lorem ipsum...</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Cheese Fries</h3>
                        <p class="price">$4</p>
                    </div>
                    <p>Description lorem ipsum...</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Loaded Fries</h3>
                        <p class="price">$4</p>
                    </div>
                    <p>Description lorem ipsum...</p>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section>
    </main>

    <nav class="footer-nav">
        <img src="icons/home-icon.png" alt="Home" aria-label="Go to homepage">
        <img src="icons/menu-icon.png" alt="Menu" aria-label="View the menu">
        <img src="icons/heart-icon.png" alt="Favorites" aria-label="Go to favorites">
        <img src="icons/profile-icon.png" alt="Profile" aria-label="View profile">
    </nav>

    <script>
        const scrollContainer = document.getElementById('scrollContainer');
        const scrollFill = document.getElementById('scrollFill');

        scrollContainer.addEventListener('scroll', () => {
            let maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
            let scrollPosition = scrollContainer.scrollLeft;
            let scrollPercentage = (scrollPosition / maxScroll) * 100;
            scrollFill.style.width = `${scrollPercentage}%`;
        });
    </script>

</body>
</html>
