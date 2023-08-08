<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "root";
$database = "a_test_db";

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set PDO to throw exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perform a query
    $query = "SELECT * FROM users";
    $stmt = $conn->query($query);

    // Process the result
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "User Name: " . $row["username"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection (PDO closes automatically when out of scope)
$conn = null;

?>