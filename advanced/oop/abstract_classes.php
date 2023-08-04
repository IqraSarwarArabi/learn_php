<?php
// Abstract Class
abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function calculateArea(); // Abstract method

    public function getName() {
        return $this->name;
    }
}

// Concrete Subclass
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Creating Objects
$circle = new Circle("Circle", 5);
$rectangle = new Rectangle("Rectangle", 4, 6);

// Using Abstract Methods
echo "{$circle->getName()} Area: {$circle->calculateArea()}<br>"; // Output: Circle Area: 78.539816339745
echo "{$rectangle->getName()} Area: {$rectangle->calculateArea()}<br>"; // Output: Rectangle Area: 24
?>
