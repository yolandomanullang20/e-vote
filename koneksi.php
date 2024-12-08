<?php 
// Load .env file
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $env = parse_ini_file($envPath);
}

// Database configuration
$host = $env['DB_HOST'] ?? '';
$username = $env['DB_USERNAME'] ?? '';
$password = $env['DB_PASSWORD'] ?? '';
$database = $env['DB_DATABASE'] ?? '';

// Koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>