<?php 
// Database Credentials
$servername = "localhost";
$username = "root";
$password = ""; // Default Password: Blank | Empty

$database_name = "event_driven_programming"; // Mailem Database Name: "event_driven_programming"

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

?>