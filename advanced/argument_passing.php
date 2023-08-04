<?php

// Passing by Value
function modifyValue($x) {
    $x = $x * 2;
    return $x;
}

$value = 5;
$modifiedValue = modifyValue($value); // Pass by value
// $value remains 5, $modifiedValue is 10

// Passing by Reference
function modifyReference(&$x) {
    $x = $x * 2;
}

$reference = 5;
modifyReference($reference); // Pass by reference
// $reference is now 10

?>

<!DOCTYPE html>
<html>
<head>
    <title>Argument Passing in PHP</title>
</head>
<body>
    <h1>Argument Passing in PHP</h1>
    <p>Original Value: <?php echo $value; ?></p>
    <p>Modified Value (Pass by Value): <?php echo $modifiedValue; ?></p>
    <p>Original Reference: <?php echo $reference; ?></p>
</body>
</html>
