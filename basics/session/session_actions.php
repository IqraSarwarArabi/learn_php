<?php
// Start the session
session_start();

// Function to regenerate session ID and create a new session
function regenerateSession() {
    // Copy old session data to a new session
    $_SESSION = array_merge([], $_SESSION);

    // Generate a new session ID and delete the old one
    //to prevent session fixation attack
    session_regenerate_id(true);
}

// Check if user is authenticated
function isAuthenticated() {
    return isset($_SESSION['user_id']);
}

// Authenticate user
function authenticateUser($userId) {
    // Regenerate session ID to prevent session fixation
    regenerateSession();

    // Set user ID in session data
    $_SESSION['user_id'] = $userId;
}

// Logout user
function logout() {
    // Unset session variables
    session_unset();

    // Destroy the session
    session_destroy();
}

// Example usage:
// Simulate user login
authenticateUser(123);

// Display protected session data
if (isAuthenticated()) {
    $userId = $_SESSION['user_id'];
    echo "Welcome, User ID: $userId";
} else {
    echo "You are not logged in.";
}

// Simulate user logout
logout();
?>
