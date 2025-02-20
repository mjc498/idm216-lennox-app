<?php 

require '../config.php';
session_start();

// Assuming the cart is stored in the session variable
$_SESSION['cart'] = $_SESSION['cart'] ?? []; 
$cart = $_SESSION['cart'];

// Check if the cart is empty
$isEmpty = empty($cart);

// Redirect to cart.php if the cart is not empty
if (!$isEmpty) {
    header("Location: cart.php");
    exit();
}
?>

<!-- ZOEY!!! Not sure if you want it to display dynamically or maintain both pages so I did a redirect. -->


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

    <title>Cart</title>
    

</head>
<body>

<!-- HEADER -->
    <header>
<<<<<<< HEAD
        <a href="menu.php">
            <img src="icons/arrow-icon.png" alt="Left arrow" class="reverse-arrow-icon">
=======
        <a href="./menu.php">
            <img src="./icons/arrow-icon.png" alt="Left arrow" class="reverse-arrow-icon">
>>>>>>> 2a9ad187e5e4e2cd4b0a1b1ab2451964d7c44d2e
        </a>
        <div class="header-container">
            <h1 class="hello-guest">CART</h1>
        </div>
    </header>

    <!-- EMPTY CART | ADD PHP -->
    
    <main>
    <!-- Show empty cart message if cart is empty -->
        <?php if ($isEmpty): ?>
            <div class="login-container">
                <div class="login-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="172" height="172" viewBox="0 0 172 172" fill="none">
                        <mask id="mask0_170_752" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="172" height="172">
                            <rect y="19.2239" width="153" height="153" transform="rotate(-7.21806 0 19.2239)" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_170_752)">
                            <path d="M63.2688 149.64C60.4501 149.997 57.9413 149.307 55.7423 147.571C53.542 145.834 52.2624 143.548 51.9034 140.714C51.5445 137.88 52.2259 135.357 53.9476 133.147C55.6704 130.937 57.9406 129.653 60.7582 129.297C63.5747 128.94 66.0941 129.628 68.3163 131.361C70.5375 133.094 71.8276 135.379 72.1868 138.214C72.5457 141.049 71.858 143.572 70.1236 145.783C68.3881 147.995 66.1032 149.281 63.2688 149.64ZM124.567 141.876C121.75 142.233 119.241 141.544 117.041 139.808C114.84 138.071 113.561 135.785 113.202 132.951C112.843 130.116 113.525 127.594 115.248 125.384C116.969 123.174 119.239 121.89 122.057 121.533C124.874 121.176 127.394 121.865 129.615 123.598C131.836 125.331 133.126 127.615 133.485 130.451C133.844 133.285 133.156 135.808 131.422 138.02C129.687 140.232 127.402 141.517 124.567 141.876ZM41.0916 48.5219L63.3854 83.0668L107.401 77.4922C107.766 77.4459 108.09 77.3123 108.37 77.0915C108.652 76.8706 108.852 76.5881 108.973 76.2441L123.393 39.8287C123.579 39.3521 123.549 38.9543 123.303 38.6352C123.057 38.3162 122.69 38.1875 122.203 38.2492L41.0916 48.5219ZM36.5353 41.8087L124.257 30.6988C126.841 30.3716 128.937 31.2409 130.544 33.3066C132.151 35.3726 132.468 37.633 131.493 40.0879L116.517 77.7643C115.685 79.6464 114.512 81.2167 112.997 82.4752C111.482 83.7338 109.769 84.484 107.861 84.7258L61.0957 90.6485L54.4071 107.893C54.1853 108.416 54.2521 108.943 54.6076 109.476C54.963 110.007 55.4447 110.234 56.053 110.157L126.146 101.28C127.164 101.151 128.06 101.389 128.835 101.995C129.609 102.599 130.061 103.415 130.191 104.441C130.321 105.469 130.086 106.363 129.485 107.122C128.883 107.882 128.073 108.326 127.054 108.455L58.0195 117.198C54.0382 117.702 50.9902 116.692 48.8756 114.168C46.7597 111.643 46.3909 108.604 47.7692 105.052L55.6025 85.2268L25.2971 37.7684L17.0389 38.8143C16.0196 38.9434 15.1231 38.7057 14.3493 38.1011C13.5743 37.4956 13.1218 36.6795 12.9918 35.6529C12.8617 34.6262 13.0978 33.7331 13.6999 32.9735C14.3008 32.2131 15.1109 31.7683 16.1302 31.6392L26.1513 30.37C27.1052 30.2492 27.969 30.3679 28.7427 30.7262C29.5153 31.0846 30.1422 31.6461 30.6236 32.4109L36.5353 41.8087Z" fill="#222222"/>
                        </g>
                    </svg>
                </div>

                <p class="login-message">
                    YOUR CART IS EMPTY!<br>
                    TRY ADDING A FEW ITEMS.
                </p>

                <div class="button-group">
                    <a href="./menu.php">
                        <button type="button" class="menu-button">View Menu</button>
                    </a>
                </div>
            </div>
        <?php endif; ?>
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
