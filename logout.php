<?php
session_start(); // Start session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect the user to the login page or any other desired page after logout
header("Location: index.php");
exit; // Ensure script execution stops after redirection
?>