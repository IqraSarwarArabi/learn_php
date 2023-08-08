<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "root";
$database = "a_test_db";

// Create a mysqli connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successful!<br>";
}

// Perform a query
$query = "SELECT * FROM users";
$result = $conn->query($query);

// Process the result
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["username"] . "<br>";
    }
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>