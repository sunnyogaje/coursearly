<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // Default XAMPP password is empty
define('DB_NAME', 'coursearly');

// Establish database connection using mysqli
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// The connection check with die() is removed from here.


// Set character set to utf8mb4 for full Unicode support
if ($conn && !$conn->connect_error) {
   mysqli_set_charset($conn, "utf8mb4");
}

// Define the base URL of the project for consistent routing
define('BASE_URL', 'http://localhost/coursearly/');


$sql = "SELECT `id`, `email_1`, `email_2`, `phone_1`, `phone_2`, `instagram_url`,
 `facebook_url`, `twitter_url`, `location_1`, `location_2` 
 FROM about_site WHERE `status` ='1' LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $site_info = $result->fetch_assoc();

    $email1     = $site_info['email_1'] ?? '';
    $email2     = $site_info['email_2'] ?? '';
    $phone1     = $site_info['phone_1'] ?? '';
    $phone2     = $site_info['phone_2'] ?? '';
    $instagram  = $site_info['instagram_url'] ?? '';
    $facebook   = $site_info['facebook_url'] ?? '';
    $twitter    = $site_info['twitter_url'] ?? '';
    $location1  = $site_info['location_1'] ?? '';
    $location2  = $site_info['location_2'] ?? '';
    $status     = $site_info['status'] ?? '';
}


