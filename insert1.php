<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "login";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$udid = $_POST['udid'];
$phoneno = $_POST['phoneno'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, gender, address, email, udid, phoneno, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $first_name, $last_name, $gender, $address, $email, $udid, $phoneno, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
