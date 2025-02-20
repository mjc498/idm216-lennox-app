<?php
// Dummy Database Configuration (for testing without a real database)

// Set environment variable manually if not set
$database_url = getenv("DATABASE_URL") ?: "postgres://dummy_user:dummy_password@localhost:5432/dummy_db";

// Parse the fake DATABASE_URL into components
$url = parse_url($database_url);

// Assign dummy values
$host = $url["host"] ?? 'localhost';
$port = $url["port"] ?? '5432';
$user = $url["user"] ?? 'postgres';
$password = $url["pass"] ?? 'password';
$dbname = isset($url["path"]) ? ltrim($url["path"], '/') : 'dummy_db';

// Create a fake connection (this will fail but prevents fatal errors)
$conn = false;

// Uncomment below if you want to simulate a working connection
/*
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Using dummy config: No real database connection.";
}
*/

// Fake require to avoid errors
if (file_exists('import_db.php')) {
    require_once 'import_db.php';
}

?>
