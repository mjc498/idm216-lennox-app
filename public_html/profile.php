<?php 
session_start();
require '../config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: profileguest.php');
    exit;
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

    <title>Profile</title>

</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="header-container">
            <h1 class="hello-guest">PROFILE</h1>
        </div>
    </header>

<main>

    <!-- PROFILE SECTIONS -->
    <div class="profile-sections">
        <h2 class="profile-account-title">Account</h2>
        <a href="payment.php" class="profile-link"><h2 class="profile-payment-title">Payment</h2></a>
        <a href="orders.php" class="profile-link"><h2 class="profile-orders-title">Orders</h2></a>
    </div>

    <!-- PROFILE INFORMATION SECTION | ADD PHP | SAVE FOR LOGGED IN USER -->
    <div class="profile-info">
        <img src="icons/profile-filled-icon.png" alt="Profile Picture" class="profile-pic">
        <div class="profile-text">
            <p class="profile-name-bold">Name</p>
            <p class="profile-name">Ava Pham</p>
        </div>
    </div>
    <div class="profile-underline"></div>

    <div class="profile-info-number">
        <div class="profile-text">
            <p class="profile-name-bold">Phone Number</p>
            <p class="profile-name">(xxx)-xxx-xxxx</p>
        </div>
    </div>
    <div class="profile-underline"></div>

    <div class="profile-info-email">
        <div class="profile-text">
            <p class="profile-name-bold">Email</p>
            <p class="profile-name">blank@email.com</p>
        </div>
    </div>
    <div class="profile-underline-email"></div> 

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
