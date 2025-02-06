<?php
require '../config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

}


$query = 'SELECT * FROM users WHERE user_name = $1';
    $result = pg_query_params($conn, $query, [$username]);

    if ($result && pg_num_rows($result) > 0) {
        $user = pg_fetch_assoc($result);
        

        if ($password === $user['password']) {
            session_start(); 
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["username"] = $user["user_name"];
            header("Location: dashboard.php"); 
            exit();
        } else {
            $_SESSION["error"] = "Invalid password!";
        }
    } else {
        $_SESSION["error"] = "User not found!";
    }
    
    header("Location: adminPage.php"); 
    exit();
?>
