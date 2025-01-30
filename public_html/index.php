<?php 
require '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LINKS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/font-face.css">

<!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="images/lennox-logo-icon.png">

    <title>Lennox Got Lunch</title>
</head>
<body>

<!-- HEADER -->
    <header>
        <div class="header-container">
            <img src="../icons/cart-icon.png" alt="Shopping cart icon with items" class="cart-icon">
            <h1 class="hello-guest">HELLO, GUEST!</h1>
        </div>
    </header>

<!-- POINTS SECTION -->
    <main>
        <section class="points-bar">
            <p>Keep earning points towards <strong>FREE</strong> rewards!</p>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <p class="points-earned">
                <img src="../icons/points-icon.png" alt="Star icon representing points" class="star-icon">
                <strong>0 points earned.</strong>
            </p>        
        </section>

<!-- PREVIOUS ORDERS SECTION -->
        <section>
            <h2 class="section-title">
                PREVIOUS ORDERS
                <img src="../icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </h2>
            <div class="orders-container">
                <div class="order-item">
                    <img src="images/placeholder.png" class="food-image" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p class="last-order"><strong>Last ordered on...</strong></p>
                </div>
            </div>
<!-- SCROLL -->
            <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section>
  
<!-- POPULAR ITEMS SECTION -->
        <section>
            <h2 class="section-title">
                POPULAR ITEMS
                <img src="../icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </h2>            
            <div class="orders-container">
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description</p>
                </div>
                <div class="order-item">
                    <img src="images/placeholder.png" alt="Placeholder image">
                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item">
                    </div>
                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description</p>
                </div>
            </div>

<!-- SCROLL -->
            <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section>
    </main>

<!-- FOOTER -->
    <nav class="footer-nav">
        <img src="../icons/home-icon.png" alt="Home" aria-label="Go to homepage">
        <img src="../icons/menu-icon.png" alt="Menu" aria-label="View the menu">
        <img src="../icons/heart-icon.png" alt="Favorites" aria-label="Go to favorites">
        <img src="../icons/profile-icon.png" alt="Profile" aria-label="View profile">
    </nav>

<!-- SCRIPT -->
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
