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
        <div class="header-container">
            <h1 class="hello-guest">PROFILE</h1>
        </div>
    </header>

<main>

    <!-- PROFILE SECTIONS -->
    <div class="profile-sections">
        <h2 class="profile-account-title">Account</h2>
        <a href="paymentguest.php" class="profile-link"><h2 class="profile-payment-title">Payment</h2></a>
        <a href="ordersguest.php" class="profile-link"><h2 class="profile-orders-title">Orders</h2></a>
    </div>

    <!-- PROFILE INFORMATION SECTION | ADD PHP | SAVE FOR LOGGED IN USER -->
    <!-- <div class="profile-info">
        <img src="../icons/profile-filled-icon.png" alt="Profile Picture" class="profile-pic">
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
                <img src="../icons/points-icon.png" alt="Star icon representing points" class="star-icon">
                <strong>0 points earned. :(</strong>
            </p>        
        </section>
    </a> --> 

    <!-- LOGIN & SIGNUP CONTAINER | ADD PHP -->
    <div class="login-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="111" height="111" viewBox="0 0 111 111" fill="none">
            <mask id="mask0_354_1382" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="111" height="111">
                <rect width="110.461" height="110.461" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask0_354_1382)">
                <path d="M30.2157 77.0929C28.848 77.0929 27.6893 76.6177 26.7396 75.6672C25.7892 74.7176 25.314 73.5616 25.314 72.1992C25.314 70.8883 25.7892 69.7388 26.7396 68.7507C27.6893 67.7627 28.8453 67.2687 30.2076 67.2687C31.5186 67.2687 32.6681 67.762 33.6561 68.7484C34.6449 69.7357 35.1393 70.8836 35.1393 72.1923C35.1393 73.5593 34.6457 74.7176 33.6584 75.6672C32.6712 76.6177 31.5236 77.0929 30.2157 77.0929ZM30.2157 43.1927C28.848 43.1927 27.6893 42.7179 26.7396 41.7682C25.7892 40.8186 25.314 39.6622 25.314 38.2991C25.314 36.9889 25.7892 35.8398 26.7396 34.8517C27.6893 33.863 28.8453 33.3686 30.2076 33.3686C31.5186 33.3686 32.6681 33.8622 33.6561 34.8494C34.6449 35.8367 35.1393 36.9843 35.1393 38.2922C35.1393 39.6599 34.6457 40.8186 33.6584 41.7682C32.6712 42.7179 31.5236 43.1927 30.2157 43.1927ZM49.7869 57.8415C49.0474 57.8415 48.4272 57.5892 47.9263 57.0844C47.4262 56.5797 47.1761 55.9541 47.1761 55.2077C47.1761 54.4621 47.4262 53.8442 47.9263 53.354C48.4272 52.8646 49.0474 52.6199 49.7869 52.6199H60.6743C61.4138 52.6199 62.034 52.8723 62.5349 53.377C63.035 53.8818 63.2851 54.5074 63.2851 55.2537C63.2851 55.9994 63.035 56.6172 62.5349 57.1074C62.034 57.5968 61.4138 57.8415 60.6743 57.8415H49.7869ZM79.8808 55.2422C79.8808 50.6995 79.2176 46.3405 77.8913 42.1652C76.5642 37.9907 74.6607 34.138 72.1807 30.607C71.6851 29.9696 71.4489 29.2631 71.4719 28.4876C71.4957 27.7113 71.7952 27.0826 72.3705 26.6017C72.9459 26.1207 73.5833 25.9304 74.2829 26.0309C74.9817 26.1314 75.5643 26.515 76.0307 27.1816C78.8659 31.1996 81.0866 35.5743 82.6929 40.3058C84.2992 45.0372 85.1024 50.0149 85.1024 55.2388C85.1024 59.6066 84.5539 63.7669 83.457 67.7198C82.3592 71.6734 80.8277 75.385 78.8624 78.8545C78.518 79.4935 78.0014 79.8981 77.3125 80.0684C76.6229 80.2387 75.967 80.1218 75.3449 79.7175C74.7221 79.3132 74.3634 78.7421 74.2691 78.0042C74.1747 77.267 74.2986 76.5651 74.6407 75.8985C76.2923 72.7542 77.5787 69.468 78.5 66.0398C79.4205 62.6117 79.8808 59.0125 79.8808 55.2422Z" fill="#222222"/>
            </g>
        </svg>
    </div>
    
    <p class="login-message">
        WANT TO VIEW A PROFILE?<br>
        CREATE ONE! OR LOG IN!
    </p>

    <div class="login-container">
        <a href="login.php">
            <button type="submit" class="login-button">Login</button>
        </a>

        <a href="signup.php">
            <button type="submit" class="signup-button">Sign Up</button>
        </a>
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

        <a href="profileguest.php">
            <img src="icons/profile-icon.png" alt="Profile" aria-label="View profile">
        </a>
    </nav>

</body>
</html>
