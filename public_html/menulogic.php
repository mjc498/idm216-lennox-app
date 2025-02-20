<?php
require '../config.php';

// Check if user is logged in


$itemsQuery = "SELECT * FROM items";
$itemsResults = pg_query($conn, $itemsQuery);

if (!$itemsResults) {
    die('Items not found.');
}

// Convert query results to an associative array
$items = pg_fetch_all($itemsResults);
if (!$items) {
    die('No items found.');
}

$chefsFavResults = [];
$fastCheapResults = [];
$popularResults = [];
$bahnMiResults = [];
$breakfastMeltsResults = [];
$cheesesteaksResults = [];
$burgersResults = [];
$sandwichesResults = [];
$plattersResults = [];
$comboMealsResults = [];
$sidesResults = [];



foreach ($items as $item) {
    if ($item['category'] === 'Bahn Mi') {
        $bahnMiResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Breakfast') {
        $breakfastMeltsResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Cheesesteaks') {
        $cheesesteaksResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Burgers') {
        $burgersResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Specialty Sandwiches') {
        $specialtySandwichesResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Grilled Cheese') {
        $sandwichesResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Platters') {
        $plattersResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Combo Meals') {
        $comboMealsResults[] = $item; // Add item to results
    }

    if ($item['category'] === 'Sides') {
        $sidesResults[] = $item; // Add item to results
    }

    if ($item['label'] === 'chef') {
        $chefsFavResults[] = $item; // Add item to results
    }

    if ($item['label'] === 'cheap') {
        $fastCheapResults[] = $item; // Add item to results
    }

    if ($item['label'] === 'popular') {
        $popularResults[] = $item; // Add item to results
    }
}



// Error handling function
function error($query) {
    if (!$query) {
        echo "An error occurred while fetching menu items.";
        exit;
    }
}

// Function to display menu items
function menuItems($items) {
    if (!$items) {
        echo "No items found.";
        return;
    }

    foreach ($items as $item) {
        $id = htmlspecialchars($item['item_id']);
        $name = htmlspecialchars($item['name']);
        $price = htmlspecialchars($item['price']);
        $shortDes = htmlspecialchars($item['description_short']);
        $image_url = !empty($item['image_url']) ? htmlspecialchars($item['image_url']) : "images/placeholder.png";

        echo <<<HTML
            <div class="order-item" onclick="window.location.href='itemcard.php?id=$id'">
                <a href="#">
                    <img src="images/placeholder.png" class="food-image" alt="Food image">
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

                                                      