<?php
// Including External Functions in PHP

// Using include
// include 'external_functions.php';

// Using require
// require 'external_functions.php';

// Using include_once
// include_once 'external_functions.php';

// Using require_once
require_once 'external_functions.php';

// Calling the Included Function
$result = multiply(3, 4); // Call the multiply function from external_functions.php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Including External Functions in PHP</title>
</head>
<body>
    <h1>Including External Functions in PHP</h1>
    <p>Including external functions using include, require, include_once, and require_once.</p>
    <p>Calling the included function: Result = <?php echo $result; ?></p>
</body>
</html>
