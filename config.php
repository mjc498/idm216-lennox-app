<?php
// Created 1/21
// Using PostgresSQL
// Instructions here on how to connect to server and Database

// $host = "localhost";
// $port = "5433";
// $user = "postgres";
// $dbname = "lennox";
// $password = "Ppjcpbh5!";


$database_url = getenv("DATABASE_URL");

if (!$database_url) {
    die("DATABASE_URL not found in environment variables!");
}

// Parse the DATABASE_URL into components
$url = parse_url($database_url);
echo "DATABASE_URL: " . $database_url;
// Ensure the keys exist to avoid undefined warnings
$host = isset($url["host"]) ? $url["host"] : 'localhost';
$port = isset($url["port"]) ? $url["port"] : '5432';
$user = isset($url["user"]) ? $url["user"] : 'postgres';
$password = isset($url["pass"]) ? $url["pass"] : 'defaultpassword';
$dbname = isset($url["path"]) ? ltrim($url["path"], '/') : 'lennox';

// Create the connection string
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

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
    //echo "Database $dbname created successfully!";
} else {
    //echo "Database $dbname already exists.";
}

// Now, connect to the created or existing database
pg_close($conn); // Close initial connection
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Connection failed to $dbname: " . pg_last_error();
    die();
} 
// Continue with your queries now that the database connection is successful
// echo "Connected to PostgreSQL database $dbname successfully!";
require_once 'import_db.php';

?>