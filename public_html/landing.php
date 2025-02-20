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
    <link rel="icon" type="image/x-icon" href="images/logo-lennox.png">

    <title>Landing</title>
</head>
<body style="background-image: url(images/background-pattern.svg);">

<!-- LOGIN & SIGNUP CONTAINER | ADD PHP -->
    <div class="login-container">
        <div class="blur-container">
            <h1 style="color: var(--accent-color-one)">LENNOX</h1>
            <h2>GOT LUNCH</h2>
        </div>

        <a href="login.php">
            <button type="submit" class="login-button">Login</button>
        </a>

        <a href="signup.php">
            <button type="submit" class="signup-button">Sign up</button>  <!-- ADD PHP FOR SIGN UP -->
        </a>

    <!-- GUEST OPTION | ADD PHP -->
        <section class="guest-option">
            <p>or 
                <a href="home.php" style="font-style: normal; color: var(--accent-color-two);">
                    <i>Continue as Guest</i>
                </a>
            </p>
        </section>
    </div>

</body>
</html>

<!-- SCRIPT -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.opacity = "0";
        document.body.style.transition = "opacity 0.5s ease-in-out"; 
        setTimeout(() => {
            document.body.style.opacity = "1"; 
        }, 50);
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (!sessionStorage.getItem("hasSeenLoading")) {
            sessionStorage.setItem("hasSeenLoading", "true");
            window.location.href = "loading.php";
        } else {
            document.body.style.opacity = "0";
            document.body.style.transition = "opacity 0.5s ease-in-out";
            setTimeout(() => {
                document.body.style.opacity = "1";
            }, 50);
        }
    });
</script>
