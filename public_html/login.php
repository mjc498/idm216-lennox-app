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
<body style="background-image: url(images/login-pattern.svg);">

<!-- LOGIN CONTAINER -->
    <div class="login-container">
        <h1>LENNOX</h1><h2>GOT LUNCH</h2>
        <p class="login-text">Email</p>
        <input type="email" placeholder="useremailaddress@gmail.com" required>
        <p class="login-text">Password</p>
        <input type="password" placeholder="******************" required>
        <button class="login-button">Login</button>
    </div>

    </body>
</html>