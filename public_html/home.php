<?php 
require '../config.php';
require 'entry.php';
require 'menulogic.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LINKS -->
 <!-- LOGGED IN HOMEPAGE -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/font-face.css">

<!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="images/logo-lennox.png">

    <title>Home</title>

</head>
<body>



<!-- MAIN CONTENT -->
    <main>

<!-- POINTS SECTION | ADD PHP -->
    <a href="#" class="points-section">
        <section class="points-bar">
            <p>Log in to earn <strong class="free-text">FREE</strong> rewards!</p>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <p class="points-earned">
                <img src="icons/points-icon.png" alt="Star icon representing points" class="star-icon">
                <strong>0 points earned. :</strong>
            </p>        
        </section>
    </a>

    <!-- PREVIOUS ORDERS SECTION | -->
    <?php 
    if (isset($_SESSION['user_id'])) {
        require('logged_in_content.php');
    }
    ?>
  
<!-- POPULAR ITEMS SECTION | ADD PHP -->
        <section>
            <h2 class="section-title">
                POPULAR ITEMS
                <a href="#">
                    <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>     
            <div class="orders-container scroll-container">
            <?php menuItems($popularResults); ?>
            </div>
            
            <!-- <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div> -->
        </section>

<!-- CHEF'S FAVORITES SECTION | ADD PHP -->
        <section>
            <h2 class="section-title">
                CHEF'S FAVORITES ITEMS
                <a href="#">
                    <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>     

            <div class="orders-container scroll-container">
            <?php menuItems($chefsFavResults); ?>
            </div>
<!-- SCROLL -->
            <!-- <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div> -->
        </section>

<!-- FAST AND CHEAP | ADD PHP -->
        <section>
            <h2 class="section-title">
                FAST AND CHEAP
                <a href="#">
                    <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>     

            <div class="orders-container scroll-container">
            <?php menuItems($fastCheapResults); ?>
            </div>

<!-- SCROLL -->
            <!-- <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div> -->
        </section>
    </main>

<!-- FOOTER -->
    <nav class="footer-nav">
        <a href="home.php">
            <img src="icons/home-filled-icon.png" alt="Home" aria-label="Go to homepage">
        </a>

        <a href="menu.php">
            <img src="icons/menu-icon.png" alt="Menu" aria-label="View the menu">
        </a>

        <a href="favorites.php">
            <img src="icons/heart-icon.png" alt="Favorites" aria-label="Go to favorites">
        </a>

        <a href="profile.php">
            <img src="icons/profile-icon.png" alt="Profile" aria-label="View profile">
        </a>
    </nav>

</body>
</html>

