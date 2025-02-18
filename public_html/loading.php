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
    <link rel="icon" type="image/x-icon" href="../images/logo-lennox.png">

    <title>Loading...</title>
    
</head>
<body style="background-image: url(images/background-pattern.svg);">

<!-- LOGIN & SIGNUP CONTAINER | ADD PHP -->
    <div class="login-container">
        <h1 style="color: var(--accent-color-one)">LENNOX</h1>
        <h2>GOT LUNCH</h2>
    </div>

</body>
</html>

<!-- SCRIPT -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.opacity = "0";
        setTimeout(function () {
            document.body.style.transition = "opacity 0.5s ease-in-out"; 
            document.body.style.opacity = "1";
            
            setTimeout(function () {
                document.body.style.opacity = "0";
                setTimeout(() => window.location.href = "landing.php", 500);
            }, 2000);
        }, 100);
    });
</script>
