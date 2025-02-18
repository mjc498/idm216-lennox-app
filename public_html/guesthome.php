<?php 
require '../config.php';

if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
    exit;
}

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
    <link rel="icon" type="image/x-icon" href="../images/logo-lennox.png">

    <title>Home</title>

</head>
<body>

<!-- HEADER -->
    <header>
        <div class="header-container">
            <a href="#">
                <img src="../icons/cart-icon.png" alt="Shopping cart icon with items" class="cart-icon">
            </a>
            <h1 class="hello-guest">HELLO, GUEST!</h1>
        </div>
    </header>

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
                <img src="../icons/points-icon.png" alt="Star icon representing points" class="star-icon">
                <strong>0 points earned. :(</strong>
            </p>        
        </section>
    </a>

<!-- PREVIOUS ORDERS SECTION | ADD PHP | SAVE FOR LOGGED IN USER -->
        <!-- <section>
            <h2 class="section-title">
                PREVIOUS ORDERS
                <a href="#">
                    <img src="../icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>

            <div class="orders-container scroll-container">
                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" class="food-image" alt="Food placeholder image">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p class="last-order">Last ordered on...</p>
                </div>
            </div> -->

<!-- SCROLL | ADD JAVASCRIPT | SAVE FOR LOGGED IN USER -->
            <!-- <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section> -->
  
<!-- POPULAR ITEMS SECTION | ADD PHP -->
        <section>
            <h2 class="section-title">
                POPULAR ITEMS
                <a href="#">
                    <img src="../icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>     

            <div class="orders-container scroll-container">
                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>


                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>


                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>
            </div>

<!-- SCROLL -->
            <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section>

<!-- CHEF'S FAVORITES SECTION | ADD PHP -->
        <section>
            <h2 class="section-title">
                CHEF'S FAVORITES ITEMS
                <a href="#">
                    <img src="../icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>     

            <div class="orders-container scroll-container">
                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>


                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>


                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>
            </div>

<!-- SCROLL -->
            <div class="scroll-indicator">
                <div class="scroll-fill"></div>
            </div>
        </section>

<!-- FAST AND CHEAP | ADD PHP -->
        <section>
            <h2 class="section-title">
                FAST AND CHEAP
                <a href="#">
                    <img src="../icons/arrow-icon.png" alt="Right arrow" class="arrow-icon">
                </a>
            </h2>     

            <div class="orders-container scroll-container">
                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>


                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
                </div>


                <div class="order-item">
                    <a href="#">
                        <img src="../images/placeholder.png" alt="Popular item placeholder">
                    </a>

                    <div class="add-icon">
                        <img src="../icons/add-icon.png" alt="Add item to order">
                    </div>

                    <div class="item-info">
                        <h3>Title</h3>
                        <p class="price">$</p>
                    </div>
                    <p>Description of item</p>
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
        <a href="./index.html">
            <img src="../icons/home-filled-icon.png" alt="Home" aria-label="Go to homepage">
        </a>

        <a href="./menu.html">
            <img src="../icons/menu-icon.png" alt="Menu" aria-label="View the menu">
        </a>

        <a href="./favorites.html">
            <img src="../icons/heart-icon.png" alt="Favorites" aria-label="Go to favorites">
        </a>

        <a href="./profile.html">
            <img src="../icons/profile-icon.png" alt="Profile" aria-label="View profile">
        </a>
    </nav>

</body>
</html>

