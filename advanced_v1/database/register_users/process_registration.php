<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "a_test_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successful!<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    $sql = "INSERT INTO Users (username, email, password, created_at) VALUES (?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error registering user: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
