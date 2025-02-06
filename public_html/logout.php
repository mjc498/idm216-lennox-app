<?php
session_start();
session_destroy();
header('Location: adminPage.php');
exit;
?>