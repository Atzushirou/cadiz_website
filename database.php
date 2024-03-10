<?php
// Start a session if one is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
//NOTE: DATABASE NAME HINDI TABLE NAME
$dbName = "cadiz_website";
$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong, please try again.");
}
?>