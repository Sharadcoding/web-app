<?php
// Replace these variables with your actual database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "driver";

// Establish a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM login WHERE pnumber = ? AND password = ?");
$stmt->bind_param("ss", $phone_number, $password);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if a user was found
// Check if a user was found
if ($result->num_rows > 0) {
    // Login successful, redirect using JavaScript
    echo '<script>window.location.href = "Successfullogin/loginsuccessful.html";</script>';
} else {
    echo "Invalid phone number or password. Please try again.";
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
