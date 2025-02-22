<?php
require 'menulogic.php';


if (!isset($_GET['id'])) {
    die('Item ID not specified.');
}

$id = (int) $_GET['id'];


$itemQuery = "SELECT * FROM items WHERE item_id = $1";
$itemResults = pg_query_params($conn, $itemQuery, [$id]);

if (!$itemResults) {
    die('Error retrieving item: ' . pg_last_error($conn));  
}

$item = pg_fetch_assoc($itemResults);

if (!$item) {
    die('Item not found.');
}


$name = htmlspecialchars($item['name']);
$price = htmlspecialchars($item['price']);
$long_des = htmlspecialchars($item['description_long']);
$cal = htmlspecialchars($item['calorie']);
$time = htmlspecialchars($item['prep_time']);



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

<!-- TITLE | ADD PHP -->
    <title><?php echo $name ?></title>

</head>
<body class="single-page">
<!-- HEADER -->
    <header>
        <div class="header-container">
            <a href="menu.php">
                <img src="icons/arrow-icon.png" alt="Left arrow" class="reverse-arrow-icon">
            </a>
            <a href="cart.php">
                <img src="icons/cart-icon.png" alt="Shopping cart icon with items" class="cart-icon">
            </a>
        </div>
    </header>

    <main>
        <div class="image-container">
            <img src="images/placeholder.png"" alt="Descriptive Alt Text" class="centered-image">
        </div>

        <!-- TITLE & PRICE | ADD PHP -->
        <div class="info-wrapper">
            <div class="subtotal-container">
                <h3 class="subtotal-title"><?php echo $name ?></h3>
                <p class="subtotal-price"><?php echo $price ?></p>
            </div>
        
            <div class="info-container">
                <p class="calories"><?php echo $cal ?> kcal</p>
                <div class="prep-time">
                    <span>5 Minutes</span> 
                </div>
            </div>

            <!-- COUNTER & HEART -->
            <div class="counter-heart-container">
                <div class="counter-container">
                    <button id="decreaseBtn" class="counter-button">-</button>
                    <span id="counterValue">0</span>
                    <button id="increaseBtn" class="counter-button">+</button>
                </div>

                <button id="heartButton" class="heart-button">
                    <img id="heartIcon" src="icons/heart-colored-icon.png" alt="Heart Icon">
                </button>
            </div>

            <!-- DESCRIPTION & NOTES | ADD PHP -->
            <div class="description-notes-container">
                <h3 class="description-title">Description</h3>
                <p class="description-text">
                <?php echo $long_des ?>
                </p>

                <h3 class="notes-title">Notes</h3>
                <textarea class="notes-textarea" placeholder="Let us know if you have any allergies or extra requests here."></textarea>
            </div>
        </div>
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

<script>
// HEART BUTTON
document.addEventListener("DOMContentLoaded", () => {
    const heartButton = document.getElementById("heartButton");
    const heartIcon = document.getElementById("heartIcon");

    let isLiked = false;

    heartButton.addEventListener("click", () => {
        isLiked = !isLiked;

        if (isLiked) {
            heartIcon.src = "../icons/heart-colored-icon.png"; 
            heartButton.classList.add("heart-active");
        } else {
            heartIcon.src = "../icons/heart-coloredfilled-icon.png"; 
            heartButton.classList.remove("heart-active");
        }
    });
});

// Add to cart BUTTON
    document.addEventListener("DOMContentLoaded", () => {
    const decreaseBtn = document.getElementById("decreaseBtn");
    const increaseBtn = document.getElementById("increaseBtn");
    const counterValue = document.getElementById("counterValue");

    let count = 0; 

    increaseBtn.addEventListener("click", () => {
        count++;
        counterValue.textContent = count;
    });

    decreaseBtn.addEventListener("click", () => {
        if (count > 0) {
            count--;
            counterValue.textContent = count;
        }
    });
});
 </script>
