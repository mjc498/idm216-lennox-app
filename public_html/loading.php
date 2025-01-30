<?php 
require '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LINKS -->
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="fonts/font-face.css">

<!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="images/lennox_white.png">

    <title>Login</title>
</head>
<body style="background-image: url(images/background-pattern.svg);">

<!-- LOGIN CONTAINER -->
    <div class="login-container">
        <h1>LENNOX</h1><h2>GOT LUNCH</h2>
        <button class="login-button" href="/public_html/login.php">Login</button>
        <button class="signup-button">Sign Up</button>

<!-- GUEST OPTION-->
        <section class="guest-option">
            <p>or <i>Continue as Guest</i></p>
        </section>
    </div>

    </body>
</html>