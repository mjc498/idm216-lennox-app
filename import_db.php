<?php 
// Created 1/21
// Using PostgresSQL
// The script reads an SQL file (init.sql) that contains database schema 
// creation and data insertion commands.

// If there’s a connection error, it stops execution.


require_once 'config.php';

$sqlFilePath = __DIR__ . '/init.sql'; // Dynamically set path (works across environments)

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

// Check if the 'users' table exists
$tableCheckQuery = "SELECT EXISTS (
    SELECT 1 FROM information_schema.tables 
    WHERE table_name = 'users'
) AS table_exists";

$result = pg_query($conn, $tableCheckQuery);
if (!$result) {
    die("Error checking table existence: " . pg_last_error($conn));
}

$row = pg_fetch_assoc($result);

if ($row['table_exists'] === 't') {  
    echo "<script>console.log('Database schema already exists. Skipping import.');</script>";
} else {
    if (file_exists($sqlFilePath)) {
        $sql = file_get_contents($sqlFilePath);
        $queries = explode(";", $sql); 

        pg_query($conn, "BEGIN"); // Start transaction
        $success = true;

        foreach ($queries as $query) {
            if (trim($query) !== '') {
                if (!pg_query($conn, trim($query) . ";")) {
                    $success = false;
                    error_log("Error executing SQL: " . pg_last_error($conn));
                    break; // Exit loop on failure
                }
            }
        }

        if ($success) {
            pg_query($conn, "COMMIT");
            echo "<script>console.log('Database schema and data imported successfully');</script>";
        } else {
            pg_query($conn, "ROLLBACK");
            echo "<script>console.error('Transaction failed. Changes rolled back.');</script>";
        }
    } else {
        echo "<script>console.error('SQL file not found');</script>";
    }
}


?>