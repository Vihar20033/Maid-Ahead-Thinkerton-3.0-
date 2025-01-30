<?php
$servername = "localhost"; // Change if using a remote server
$username = "root"; // Change according to your MySQL username
$password = ""; // Change according to your MySQL password
$database = "maid_service"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
