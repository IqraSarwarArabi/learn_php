<?php

// Finally Block
try {
    // Code that might throw an exception
} catch (Exception $e) {
    // Handle the exception
} finally {
    echo "Finally block always runs.<br>";
}

// Custom Error Handler
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Custom error: $errstr in $errfile on line $errline";
}

set_error_handler("customErrorHandler");

// Trigger a custom error
trigger_error("This is a custom error", E_USER_ERROR);


// Basic Error Handling for Division by Zero
$result = null;
try {
    $denominator = 0;
    if ($denominator !== 0) {
        $result = 10 / $denominator;
    } else {
        throw new Exception("Division by zero");
    }
} catch (Exception $e) {
    echo "<br>Caught exception: " . $e->getMessage();
}

echo "<br>Result: " . ($result !== null ? $result : "N/A");

// Custom Exception Classes
class CustomException extends Exception {}

try {
    throw new CustomException("<br>This is a custom exception.");
} catch (CustomException $e) {
    echo "Caught custom exception: " . $e->getMessage();
}

// Rethrowing Exceptions
function validateAge($age) {
    if ($age < 18) {
        throw new Exception("Age must be at least 18.");
    }
    return true;
}

try {
    validateAge(15);
} catch (Exception $e) {
    echo "<br>Caught exception: " . $e->getMessage();
    throw $e;
}

?>
