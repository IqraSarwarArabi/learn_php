//1
<?php
    // Define a constant
    define("PI", 3.14159);

    // Use the constant
    $radius = 5;
    $area = PI * ($radius ** 2);
    echo "The area of the circle is: " . $area. "<br>";
?>

//2
<?php
class Math {
    const PI = 3.14159;

    public function calculateArea($radius) {
        return self::PI * ($radius ** 2);
    }
}

$math = new Math();
$area = $math->calculateArea(5);
echo "The area of the circle is: " . $area;

//3
const PI_NEW = 3.25;
echo "<br>".PI_NEW;
?>

<!-- Always use UPPER_CASE_SNAKE -->