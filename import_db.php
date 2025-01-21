<?php 
require_once 'config.php';

$sqlFilePath = 'C:/xampp/htdocs/Lennox_Project/idm216-lennox-app/init.sql'; // Adjust this path to match your file location


if (!$conn || $conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if a critical table exists
$tableCheckQuery = "SHOW TABLES LIKE 'users'";
$result = $conn->query($tableCheckQuery);

if ($result && $result->num_rows > 0) {
    echo "<script>console.log('Database schema already exists. Skipping import.');</script>";
} else {
    // Execute the SQL file
    if (file_exists($sqlFilePath)) {
        $sql = file_get_contents($sqlFilePath);

        if ($conn->multi_query($sql)) {
            echo "<script>console.log('Database schema and data imported successfully');</script>";
        } else {
            echo "<script>console.error('Error executing SQL: " . addslashes($conn->error) . "');</script>";
        }
    } else {
        echo "<script>console.error('SQL file not found');</script>";
    }
}

// Close the connection
$conn->close();
?>