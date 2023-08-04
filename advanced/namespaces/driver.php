<?php
require 'math.php';
require 'geometry.php';

use MyApp\Calculator;
use MyApp\Circle;
use MyApp\Square;

// Math namespace
$sum = Calculator::add(5, 3);
echo "Sum: $sum<br>"; // Output: Sum: 8

$difference = Calculator::subtract(10, 4);
echo "Difference: $difference<br>"; // Output: Difference: 6

// Geometry namespace
$circle = new Circle(5);
$circleArea = $circle->calculateArea();
echo "Circle Area: $circleArea<br>"; // Output: Circle Area: 78.539816339745

$square = new Square(4);
$squareArea = $square->calculateArea();
echo "Square Area: $squareArea<br>"; // Output: Square Area: 16
?>
