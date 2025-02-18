<?php
include 'config.php';

// Destroy the session
session_unset();
session_destroy();

header('Location: index.php');
exit;
?>