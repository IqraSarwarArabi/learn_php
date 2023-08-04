<?php
// Class and Object
class Vehicle {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
        echo "A new vehicle, {$this->name}, has been created.<br>";
    }

    public function __destruct() {
        echo "{$this->name} is being destroyed.<br>";
    }

    public function start() {
        echo "{$this->name} is starting.<br>";
    }
}

// Inheritance
class Car extends Vehicle {
    public function start() {
        echo "{$this->name} car is starting with the engine running.<br>";
    }
}

// Access Modifiers
class Bike extends Vehicle {
    private $speed;

    public function __construct($name, $speed) {
        parent::__construct($name);
        $this->speed = $speed;
    }

    public function showSpeed() {
        echo "{$this->name} bike speed: {$this->speed} km/h.<br>";
    }
}

// Polymorphism
function drive(Vehicle $vehicle) {
    $vehicle->start();
}

// Encapsulation and Abstraction
class User {
    private $username;

    public function setUsername($username) {
        if (strlen($username) >= 5) {
            $this->username = $username;
        } else {
            echo "Username must be at least 5 characters.<br>";
        }
    }

    public function getUsername() {
        return $this->username;
    }
}

// Interfaces
interface Logger {
    public function log($message);
}

// Static Members
class MathUtility {
    public static function square($num) {
        return $num * $num;
    }
}

// Traits
trait Logging {
    public function log($message) {
        echo "Logging: $message<br>";
    }
}

// Using the Classes, Objects, and Concepts

// Create objects
$car = new Car("Toyota");
$bike = new Bike("Honda", 50);

// Accessing properties and methods
$car->start(); // Output: Toyota car is starting with the engine running.
$bike->showSpeed(); // Output: Honda bike speed: 50 km/h.

// Polymorphism
drive($car); // Output: Toyota car is starting with the engine running.

// Encapsulation and Abstraction
$user = new User();
$user->setUsername("JohnDoe123");
echo "Username: " . $user->getUsername() . "<br>"; // Output: Username: JohnDoe123

// Interfaces
class FileLogger implements Logger {
    public function log($message) {
        file_put_contents('log.txt', $message . "\n", FILE_APPEND);
    }
}

$logger = new FileLogger();
$logger->log("This is a log message.");

// Static Members
echo "Square of 5: " . MathUtility::square(5) . "<br>"; // Output: Square of 5: 25

// Traits
class Application {
    use Logging;

    public function run() {
        $this->log("Application is running.");
    }
}

$app = new Application();
$app->run(); // Output: Logging: Application is running.
?>
