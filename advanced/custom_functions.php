<?php
// Custom Functions in PHP

// 1. Basic Custom Function
function greet($name) {
    return "Hello, $name!";
}

// 2. Calling the Custom Function
$greeting = greet("John"); // Call the greet function with argument "John"

// 3. Function Parameters
function add($a, $b) {
    return $a + $b;
}

$sum = add(3, 5); // Call the add function with arguments 3 and 5

// 4. Return Values
function multiply($x, $y) {
    return $x * $y;
}

$product = multiply(4, 6); // Call the multiply function with arguments 4 and 6

// 5. Function Scope
$globalVar = "I'm global";

function showGlobal() {
    global $globalVar;
    return $globalVar;
}

$globalValue = showGlobal(); // Call the showGlobal function to access globalVar

// 6. Default Values
function say($message = "Hello") {
    return $message;
}

$defaultGreeting = say(); // Call the say function without argument (use default value)
$customGreeting = say("Hi"); // Call the say function with argument "Hi"

?>

<!DOCTYPE html>
<html>
<head>
    <title>Custom Functions in PHP</title>
</head>
<body>
    <h1>Custom Functions in PHP</h1>
    <p>1. Basic Custom Function: <?php echo greet("Alice"); ?></p>
    <p>2. Calling the Custom Function: <?php echo $greeting; ?></p>
    <p>3. Function Parameters: <?php echo $sum; ?></p>
    <p>4. Return Values: <?php echo $product; ?></p>
    <p>5. Function Scope: <?php echo $globalValue; ?></p>
    <p>6. Default Values: <?php echo "$defaultGreeting, $customGreeting"; ?></p>
</body>
</html>
