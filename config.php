<?php
// Created 1/21
// Using PostgresSQL
// Instructions here on how to connect to server and Database

$host = "localhost";
$port = "5433";
$user = "postgres";
$dbname = "lennox";
$password = "Ppjcpbh5!";

// Create connection
$conn = pg_connect("host=$host port=$port dbname=postgres user=$user password=$password");

if (!$conn) {
    echo "Connection failed to PostgreSQL: " . pg_last_error();
    die();
}

// Check if the database exists
$result = pg_query($conn, "SELECT 1 FROM pg_database WHERE datname = '$dbname'");

if (pg_num_rows($result) == 0) {
    // If the database doesn't exist, create it
    $createDbQuery = "CREATE DATABASE $dbname";
    $createDbResult = pg_query($conn, $createDbQuery);
    
    if (!$createDbResult) {
        echo "Error creating database: " . pg_last_error();
        die();
    }
    echo "Database $dbname created successfully!";
} else {
    echo "Database $dbname already exists.";
}

// Now, connect to the created or existing database
pg_close($conn); // Close initial connection
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Connection failed to $dbname: " . pg_last_error();
    die();
}

// Continue with your queries now that the database connection is successful
echo "Connected to PostgreSQL database $dbname successfully!";

?>