<?php
session_start();

// Generate CSRF token
function generateCSRFToken() {
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
}

// Verify CSRF token
function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $token;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify CSRF token
    $crf = $_POST['csrf_token'];
    echo("<script>console.log('PHP: " . $crf . "');</script>");
    $csrfToken = $_POST['csrf_token'];
    if (!verifyCSRFToken($csrfToken)) {
        die("CSRF token validation failed.");
    }

    // Sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        die("Please fill in all fields.");
    }
    echo $name . ", " . $email . ", " .$message;
}
?>
