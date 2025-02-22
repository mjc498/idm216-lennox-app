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
    <link rel="icon" type="image/x-icon" href="images/logo-lennox.png">
    <title>Profile</title>

</head>
<body>
<!-- HEADER -->
    <header>
        <a href="#">
            <img src="icons/arrow-icon.png" alt="Left arrow" class="reverse-arrow-icon">
        </a>
        <div class="header-container">
            <h1 class="hello-guest">PROFILE</h1>
        </div>
    </header>

    <main>
        <div class="profile-sections">
            <a href="profileguest.php" class="profile-link"><h2 class="profile-orders-title">Account</h2></a>
            <h2 class="profile-account-title">Payment</h2>
            <a href="ordersguest.php" class="profile-link"><h2 class="profile-orders-title">Orders</h2></a>
        </div>

<!-- CREDIT CARD | ADD PHP -->
         <div class="card-header">
            <span class="card-title">Card Information</span>
            <span class="add-card">ADD CARD</span>
        </div>

        <div class="credit-card-container">
            <div class="credit-card">
                <div class="card-top">
                    <span class="credit-text">Credit</span>
                    <div class="card-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="15" cy="23.9414" r="15" fill="#EB001B"/>
                            <circle cx="33" cy="23.9414" r="15" fill="#F79E1B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.9999 35.9414C28.1406 33.5461 30.9265 29.0691 30.9265 23.9414C30.9265 18.8137 28.1406 14.3367 23.9999 11.9414C19.8591 14.3367 17.0732 18.8137 17.0732 23.9414C17.0732 29.0691 19.8591 33.5461 23.9999 35.9414Z" fill="#FF5F00"/>
                        </svg>
                    </div>
                </div>
                <div class="card-details">
                    <p class="card-user">User’s Credit Card</p>
                    <p class="card-number">5142 - 8164 - 6526 - 2563</p>
                </div>
            </div>
        </div>

<!-- VENMO | ADD PHP -->
        <div class="profile-underline"></div>
        <div class="profile-info">
            <img src="icons/profile-filled-icon.png" alt="Profile Picture" class="profile-pic">
            <div class="profile-text">
                <p class="profile-name-bold">Venmo</p>
                <p class="profile-name">@uservenmoaccount</p>
            </div>
        </div>
        <div class="profile-underline"></div>

<!-- SAVE CHANGES | ADD PHP -->
        <div class="login-container">
            <a href="signup.php">
                <button type="submit" class="signup-button">Save Changes</button>
            </a>
        </div>
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
