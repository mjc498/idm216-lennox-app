<?php
// Created 1/21
// Using PostgresSQL
// Instructions here on how to connect to server and Database

$host = "localhost";
$port = "5432";
$user = "postgres";
$dbname = "lennox";
$password = "Ppjcpbh5!";

// Create connection
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if ($conn) {
    echo "Connected to PostgreSQL successfully!<br>";
} else {
    die("Connection failed.");
}

// Check if database exists
$dbCheckQuery = "SELECT 1 FROM pg_database WHERE datname = '$dbname'";
$result = pg_query($conn, $dbCheckQuery);

if (pg_num_rows($result) > 0) {
    echo "Database '$dbname' already exists.<br>";
} else {
    // Create the database
    $createDbQuery = "CREATE DATABASE $dbname";
    if (pg_query($conn, $createDbQuery)) {
        echo "Database '$dbname' created successfully!<br>";
    } else {
        echo "Error creating database: " . pg_last_error($conn) . "<br>";
    }
}


?>