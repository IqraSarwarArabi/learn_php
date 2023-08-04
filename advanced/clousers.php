<?php

// Anonymous Function Definition
$add = function($a, $b) {
    return $a + $b;
};

// Calling the Anonymous Function
$result = $add(5, 3); // Result: 8

// Anonymous Functions as Callbacks
$numbers = [1, 2, 3, 4];
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);

// Closures and Scope
function outerFunction() {
    $x = 10;
    return function($y) use ($x) {
        return $x + $y;
    };
}

$closure = outerFunction();
$closureResult = $closure(5); // Result: 15

// Arrow Functions (PHP 7.4+)
$multiply = fn($a, $b) => $a * $b;
$arrowResult = $multiply(3, 4); // Result: 12
?>

<!DOCTYPE html>
<html>
<head>
    <title>Anonymous Functions in PHP</title>
</head>
<body>
    <h1>Anonymous Functions (Closures) in PHP</h1>
    <p>Calling Anonymous Function: Result = <?php echo $result; ?></p>
    <p>Squared Numbers: <?php print_r($squared); ?></p>
    <p>Closure Result: <?php echo $closureResult; ?></p>
    <p>Arrow Function Result: <?php echo $arrowResult; ?></p>
</body>
</html>
