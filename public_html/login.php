
<?php
require '../config.php'; 
$passErr = $userErr = ""; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize the input
    $email = pg_escape_string($conn, $email);
    $password = pg_escape_string($conn, $password);

    // Query to check if the user exists
    $loginQuery = "SELECT * FROM users WHERE email = $1"; // Use placeholder for safety
    $result = pg_query_params($conn, $loginQuery, array($email));

    if (!$result || pg_num_rows($result) == 0) {
        $userErr = "User does not exist";
    } else {
        $user = pg_fetch_assoc($result);

        // Check if the password matches
        if (($password === $user['password'])) {
            session_start();  // Start the session
            $_SESSION['user_id'] = $user['user_id'];  // Store the user ID in the session
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];

              // Store the email in the session (optional)
            header("Location: home.php");
            exit();
        } else {
            $passErr = "Invalid password";
        }
        
    }
}
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
    <title>Login</title>

</head>
<body class="login-page">
    <div class="login-container">
        <div class="blur-container">
            <h1 style="color: var(--accent-color-one)">LENNOX</h1>
            <h2>GOT LUNCH</h2>
        </div>

<!-- LOGIN CONTAINER | ADD PHP -->
    <form action="login.php" method="POST" id="loginForm">
        <label for="email" class="login-text">Email</label>
        <input type="email" id="email" name="email" required>
        <span class="error"><?php echo $userErr;?></span>

        <label for="password" class="login-text">Password</label>
        <input type="password" id="password" name="password" required>
        <span class="error"><?php echo $passErr;?></span>

        <button type="submit" class="button login-button">Login</button>
    </form>

<!-- GUEST OPTION | ADD PHP -->
        <section class="guest-option">
            <p>Don't have an account? 
                <a href="signup.php" style="font-style: normal; color: var(--accent-color-two);"> <!-- ADD PHP FOR SIGN UP -->
                    Register Now!
                </a>
            </p>
            <p>or 
                <a href="guesthome.php" style="font-style: normal; color: var(--accent-color-two);">
                    <i>continue as Guest</i>
                </a>
            </p>
        
        </section>
    </div>
</body>
</html>
