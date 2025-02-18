<?php
session_start();
require '../config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: loading.php');
    exit;
}


$bahnMiQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Banh Mi'";
$bahnMiResults = pg_query($conn, $bahnMiQuery);

$breakfastMeltsQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Breakfast'";
$breakfastMeltsResults = pg_query($conn, $breakfastMeltsQuery);

$cheesesteaksQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Cheesesteaks'";
$cheesesteaksResults = pg_query($conn, $cheesesteaksQuery);

$burgersQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Burgers'";
$burgersResults = pg_query($conn, $burgersQuery);

$specialtySandwichesQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Specialty Sandwiches'";
$specialtySandwichesResults = pg_query($conn, $specialtySandwichesQuery);

$sandwichesQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Grilled Cheese'";
$sandwichesResults = pg_query($conn, $sandwichesQuery);


$plattersQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Platters'";
$plattersResults = pg_query($conn, $plattersQuery);

$comboMealsQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Combo Meals'";
$comboMealsResults = pg_query($conn, $comboMealsQuery);

$sidesQuery = "SELECT name, price, description_short, image_url FROM items WHERE category = 'Sides'";
$sidesResults = pg_query($conn, $sidesQuery);



// Error handling function
function error($query) {
    if (!$query) {
        echo "An error occurred while fetching menu items.";
        exit;
    }
}

// Function to display menu items
function menuItems($category) {
    error($category);
    
    $items = pg_fetch_all($category);
    if (!$items) {
        echo "No items found.";
        return;
    }

    foreach ($items as $item) {
        $name = htmlspecialchars($item['name']);
        $price = htmlspecialchars($item['price']);
        $shortDes = htmlspecialchars($item['description_short']);
        $image_url = empty($item['image_url']) ? htmlspecialchars($item['image_url']) : "images/placeholder.png";
        ////Zoey add a ! to empty when the images in the database are good
        echo <<<HTML
            <div class="order-item">
                <a href="#">
                    <img src="$image_url" class="food-image" alt="Food image">
                </a>

                <div class="add-icon">
                    <img src="icons/add-icon.png" alt="Add item to order">
                </div>

                <div class="item-info">
                    <h3>$name</h3>
                    <p class="price">$price</p>
                </div>
                <p class="last-order">$shortDes</p>
            </div>
        HTML;
    }
}



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
        </div> -->


        <h2 class="section-title">
            Cheesesteaks
            <a href="#">
                <img src="icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
            </a>
        </h2>
        <div class="orders-container scroll-container">
            <?php menuItems($cheesesteaksResults); ?>
        </div>
        <!-- SCROLL | ADD JAVASCRIPT -->
        <!-- <div class="scroll-indicator">
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
        </div> -->



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
        </div> -->


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