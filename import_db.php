<?php 
// Created 1/21
// Using PostgresSQL
// The script reads an SQL file (init.sql) that contains database schema 
// creation and data insertion commands.

// If there’s a connection error, it stops execution.


require_once 'config.php';

$sqlFilePath = 'C:/xampp/htdocs/Lennox_Project/idm216-lennox-app/init.sql'; // Adjust this path

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

// Check if the 'users' table exists
$tableCheckQuery = "SELECT EXISTS (
    SELECT FROM information_schema.tables 
    WHERE table_name = 'users'
)";
$result = pg_query($conn, $tableCheckQuery);
$row = pg_fetch_assoc($result);

if ($row['exists'] === 't') {  // 't' means true in PostgreSQL
    echo "<script>console.log('Database schema already exists. Skipping import.');</script>";
} else {
    // Execute the SQL file
    if (file_exists($sqlFilePath)) {
        $sql = file_get_contents($sqlFilePath);
        $queries = explode(";", $sql); // Split queries

        foreach ($queries as $query) {
            if (trim($query) !== '') {
                if (!pg_query($conn, $query . ";")) {
                    echo "<script>console.error('Error executing SQL: " . addslashes(pg_last_error($conn)) . "');</script>";
                }
            }
        }

        echo "<script>console.log('Database schema and data imported successfully');</script>";
    } else {
        echo "<script>console.error('SQL file not found');</script>";
    }
}

// Close the connection
pg_close($conn);
?>