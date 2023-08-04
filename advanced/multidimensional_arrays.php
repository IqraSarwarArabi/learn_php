<?php
// Multi-Dimensional Arrays in PHP

// 1. Creating a 2D Array (Matrix)
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Accessing Elements in a 2D Array
$element = $matrix[1][2]; // Access element at row 1, column 2 (value: 6)

// 2. Creating a 3D Array
$cube = [
    [
        [1, 2, 3],
        [4, 5, 6]
    ],
    [
        [7, 8, 9],
        [10, 11, 12]
    ]
];

// Accessing Elements in a 3D Array
$element3D = $cube[1][0][2]; // Access element at cube 1, row 0, column 2 (value: 9)

?>

<!DOCTYPE html>
<html>
<head>
    <title>Multi-Dimensional Arrays in PHP</title>
</head>
<body>
    <h1>Multi-Dimensional Arrays in PHP</h1>
    <h2>2D Array (Matrix)</h2>
    <p>Matrix Element (Row 1, Column 2): <?php echo $element; ?></p>

    <h2>3D Array</h2>
    <p>Cube Element (Cube 1, Row 0, Column 2): <?php echo $element3D; ?></p>
</body>
</html>
