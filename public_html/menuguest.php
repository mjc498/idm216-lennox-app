<?php
require '../config.php';
require 'menulogic.php';

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
    <link rel="icon" type="image/x-icon" href="images/logo-lennox.png">

    <title>Menu</title>

</head>
<body>

<!-- HEADER -->
    <header>
        <div class="header-container">
            <a href="#">
                <img src="icons/cart-icon.png" alt="Shopping cart icon with items" class="cart-icon">
            </a>
            <h1 class="hello-guest">MENU</h1>
        </div>
    </header>

<!-- MAIN CONTENT -->
<main>

<!-- FAVORITE ORDERS SECTION | ADD PHP -->
    <section>
        <h2 class="section-title">
            BAHN MI
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($bahnMiResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div> -->

        <h2 class="section-title">
            Breakfast & Melts
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($breakfastMeltsResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div>
 -->

        <h2 class="section-title">
            Cheesesteaks
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($cheesesteaksResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT
        <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div> -->


        <h2 class="section-title">
            Burgers
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($burgersResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div> -->


        <h2 class="section-title">
            Specialty Sandwiches
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($specialtySandwichesResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div> -->



        <h2 class="section-title">
            Sandwiches
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($sandwichesResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div>
 -->


        <h2 class="section-title">
            Platters
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($plattersResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div> -->


        <h2 class="section-title">
            Combo Meals
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($comboMealsResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div>
 -->

        <h2 class="section-title">
            Sides
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($sidesResults); ?>
        
         </div>
         <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
            <div class="scroll-fill"></div>
        </div> -->

    </section>

    </main>

  <!-- FOOTER -->
  <nav class="footer-nav">
        <a href="guesthome.php">
            <img src="icons/home-filled-icon.png" alt="Home" aria-label="Go to homepage">
        </a>

        <a href="menuguest.php">
            <img src="icons/menu-icon.png" alt="Menu" aria-label="View the menu">
        </a>

        <a href="favoritesguest.php">
            <img src="icons/heart-icon.png" alt="Favorites" aria-label="Go to favorites">
        </a>

        <a href="profileguest.php">
            <img src="icons/profile-icon.png" alt="Profile" aria-label="View profile">
        </a>
    </nav>

</body>
</html>