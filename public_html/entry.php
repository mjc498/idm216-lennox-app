<?php
session_start();  // Start session to access session variables

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);

// Serve content based on login status
if ($isLoggedIn) {
    // Include logged-in page content (header, body, etc.)
    include 'logged_in_header.php';
    //include 'logged_in_content.php';
} else {
    // Include guest page content (header, body, etc.)
    include 'guest_header.php';
    //include 'guest_content.php';
}

?>  