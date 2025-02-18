<?php 
require '../config.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$firstName = $lastName = $email = $number = $password = "";
$nameErr = $emailErr = $passwordErr = $numErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first-name"]) || empty($_POST["last-name"])) {
        $nameErr = "Both first and last names are required";
    } else {
        $firstName = test_input($_POST["first-name"]);
        $lastName = test_input($_POST["last-name"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName) || !preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $nameErr = "Only letters and white space allowed in names";
        }
    }


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["mobile-number"])) {
        $numErr = "Number is required";
    } else {
        $number = test_input($_POST["country"]) . test_input($_POST["mobile-number"]);
    }
    
    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters long";
        }
    }


    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($numErr)) {
        // Ensure the connection is open
        if (!$conn) {
            die("Connection failed: " . pg_last_error());
        }

        // Insert user data into the database
        $signUpQuery = "INSERT INTO users (email, password, first_name, last_name, phone_number, signup_date) VALUES ($1, $2, $3, $4, $5, NOW())";
        $result = pg_query_params($conn, $signUpQuery, array($email, $password, $firstName, $lastName, $number));

        if ($result) {
           echo "Data inserted successfully!";
           header("Location: home.php");
           exit();
        } else {
            echo "Error: " . pg_last_error($conn);
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
    <title>Sign Up</title>

</head>
<body class="login-page">
    <div class="login-container">
        <div class="blur-container">
            <h1 style="color: var(--accent-color-one)">LENNOX</h1>
            <h2>GOT LUNCH</h2>
        </div>

<!-- SIGNUP CONTAINER | ADD PHP -->
        <form action="signup.php" method="POST">
            <div class="name-fields">
                <div class="input-group">
                    <label for="first-name" class="login-text">First Name</label>
                    <input type="text" id="first-name" name="first-name" require>
                    
                </div>

                <div class="input-group">
                    <label for="last-name" class="login-text">Last Name</label>
                    <input type="text" id="last-name" name="last-name" require>
                    
                </div>
            </div>
            <span class="error">* <?php echo $nameErr;?></span>
            
            <label for="email" class="login-text">Email</label>
            <input type="email" id="email" name="email" require>
            <span class="error">* <?php echo $emailErr;?></span>

            <div class="mobile">
                <div class="input-group">
                    <label for="country" class="login-text">Country</label>
                    <input type="text" id="country" name="country" placeholder="+1">
                </div>

                <div class="input-group">
                    <label for="mobile-number" class="login-text">Mobile Number</label>
                    <input type="tel" id="mobile-number" name="mobile-number">
                    <span class="error">* <?php echo $numErr;?></span>
                </div>
            </div>

            <label for="password" class="login-text">Password</label>
            <input type="password" id="password" name="password" require>
            <span class="error">* <?php echo $passwordErr;?></span>

            <button type="submit" class="login-button">Create Account</button>
        </form>




<!-- LOGIN OPTION | ADD PHP -->
        <section class="guest-option">
            <p>Already have an account? 
                <a href="login.php" style="font-style: normal; color: var(--accent-color-two);">
                    <i>Log In</i>
                </a>
            </p>
        </section>
    </div>
</body>
</html>



