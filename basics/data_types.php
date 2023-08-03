<!-- 
    INTEGERS 
    positive and negative whole numbers
    No decimal points are allowed
-->
<?php
$age = 20;
$negative = -20;
echo nl2br("\$age = $age \n\$negative = $negative\n");
?>

<!--
    FLOAT/DOUBLE 
    decimal points and exponential notations
-->
<?php
$floating = 20.5;
$exponential = 1.23e4;
echo nl2br("\$floating = $floating \n\$exponential = $exponential\n");
?>

<!--
    STRING
    sequence of characters
    Enclosed in single ('') or double ("") quotes
-->
<?php
$name = "John";
$quote = 'This is a string.';
echo nl2br("\$name = $name \n\$quote = $quote\n");
?>

<!--
    BOOLEAN
    binary value: true or false
    true is printed as 1 while false leaves everything blank.
-->
<?php
$isLogged = true;
$isMember = false;
echo nl2br("\$isLogged = $isLogged \n\$isMember = $isMember\n");
?>

<!--
    ARRAY
    ordered collection of values
    Accessed via an index or key
-->
<?php
$colors = array("red", "green", "blue");
$person = array("name" => "John", "age" => 30);
echo "\$colors = ";
print_r($colors);
echo nl2br("\n");
echo "\$person = ";
print_r($person);
echo nl2br("\n");
?>

<!--
    NULL
    Represents absence of a value
-->
<?php
$noValue = null;
echo nl2br("\$noValue = " . (is_null($noValue) ? 'null' : 'not null') . "\n");
?>

<!--
    OBJECT
    Instance of a user-defined class
    Encapsulates properties and methods
-->
<?php
class Person {
    public $name;
    public function greet() {
        return "Hello, my name is $this->name.";
    }
}
$personObj = new Person();
$personObj->name = "Alice";
echo nl2br("\$personObj->greet() = " . $personObj->greet() . "\n");
?>

<!--
    RESOURCE
    Represents external resource, e.g., file handle or database connection
-->
<?php
$file = fopen("example.txt", "r");
echo nl2br("Resource type of \$file = " . get_resource_type($file) . "\n");
// Read and print each line from the file
while ($line = fgets($file)) {
    echo nl2br($line);
}
fclose($file);
?>

<!--
    CALLABLE
    Reference to a callable function or method
-->
<?php
function add($a, $b) {
    return $a + $b;
}
$func = 'add';
echo nl2br("\nResult of callable \$func(2, 3) = " . $func(2, 3) . "\n");
?>

<!--
    ITERABLE
    Represents a data type that can be iterated over
-->
<?php
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo nl2br("Number: $number\n");
}
?>

<!--
    MIXED
    Value that can have any data type
-->
<?php
$mixedValue = "Hello";
$mixedValue = 42;
$mixedValue = true;
echo nl2br("\$mixedValue = $mixedValue\n");
?>

<!--
    SCALAR
    Represents single value: integer, float, string, boolean
-->
<?php
$scalarInt = 42;
$scalarFloat = 3.14;
$scalarString = "Hello, PHP";
$scalarBool = true;
echo nl2br("\$scalarInt = $scalarInt \n\$scalarFloat = $scalarFloat \n\$scalarString = $scalarString \n\$scalarBool = " . ($scalarBool ? 'true' : 'false') . "\n");
?>
