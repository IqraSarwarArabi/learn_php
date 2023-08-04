<?php
namespace MyApp\Geometry {
    class Circle {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * $this->radius * $this->radius;
        }
    }

    class Square {
        private $side;

        public function __construct($side) {
            $this->side = $side;
        }

        public function calculateArea() {
            return $this->side * $this->side;
        }
    }
}
?>