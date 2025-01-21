<?php
// Created 1/21
// Using Mysqli Procedural
// Instructions here on how to connect to server and Database
// Create connection

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<script>console.log('Connected successfully from PHP');</script>";

// Create database
$dbCheckQuery = "SHOW DATABASES LIKE 'lennox'";
$result = $conn->query($dbCheckQuery);

if ($result && $result->num_rows > 0) {
    echo "<script>console.log('Database already exists');</script>";
} else {

    $sql = "CREATE DATABASE lennox";
    if ($conn->query($sql) === TRUE) {
        echo "<script>console.log('Database created successfully');</script>";
    } else {
        echo "<script>console.error('Error creating database: " . addslashes($conn->error) . "');</script>";
    }
}

$conn->close();

?>