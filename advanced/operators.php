<?php

// Arithmetic Operators
$a = 10;
$b = 5;
$sum = $a + $b;        // Addition
$diff = $a - $b;       // Subtraction
$product = $a * $b;    // Multiplication
$quotient = $a / $b;   // Division
$remainder = $a % $b;  // Modulus
$power = $a ** $b;     // Exponentiation

// Assignment Operators
$assignedValue = 20;
$assignedValue += 5;   // Adds 5 and assigns
$assignedValue -= 3;   // Subtracts 3 and assigns
$assignedValue *= 2;   // Multiplies by 2 and assigns
$assignedValue /= 4;   // Divides by 4 and assigns
$assignedValue %= 7;   // Modulus by 7 and assigns
$assignedValue **= 3;  // Raises to the power of 3 and assigns

// Comparison Operators
$isEqual = ($a == $b);      // Equal to
$isIdentical = ($a === $b); // Identical
$isNotEqual = ($a != $b);   // Not equal to
$isNotIdentical = ($a !== $b); // Not identical
$isLessThan = ($a < $b);    // Less than
$isGreaterThan = ($a > $b); // Greater than

// Logical Operators
$logicalAnd = ($a < 15 && $b > 3); // Logical AND
$logicalOr = ($a > 12 || $b < 2);  // Logical OR
$logicalNot = !($a < 15);          // Logical NOT
$logicalXor = ($a > 7 xor $b < 10);// Logical XOR

// Increment/Decrement Operators
$increment = $a++; // Post-increment
$decrement = $b--; // Post-decrement

// Concatenation Operator
$greeting = "Hello, ";
$name = "John";
$welcomeMessage = $greeting . $name; // Concatenation

// String Operator
$longString = "Hello, ";
$longString .= "PHP!"; // Concatenate and assign

// Conditional (Ternary) Operator
$age = 18;
$voteStatus = ($age >= 18) ? "Can vote" : "Cannot vote";

// Null Coalescing Operator
$maybeNull = null;
$notNull = $maybeNull ?? "Default Value";

// Type Operator
class MyClass {}
$object = new MyClass();
$isInstanceOf = $object instanceof MyClass;

// Bitwise Operators
$bitwiseAnd = $a & $b;
$bitwiseOr = $a | $b;
$bitwiseXor = $a ^ $b;
$bitwiseNot = ~$a;
$bitwiseLeftShift = $a << 2;
$bitwiseRightShift = $a >> 2;

// Displaying Results
echo "Arithmetic: $sum, $diff, $product, $quotient, $remainder, $power<br>";
echo "Assignment: $assignedValue<br>";
echo "Comparison: $isEqual, $isIdentical, $isNotEqual, $isNotIdentical, $isLessThan, $isGreaterThan<br>";
echo "Logical: $logicalAnd, $logicalOr, $logicalNot, $logicalXor<br>";
echo "Increment/Decrement: $increment, $decrement<br>";
echo "Concatenation: $welcomeMessage<br>";
echo "String Operator: $longString<br>";
echo "Conditional: $voteStatus<br>";
echo "Null Coalescing: $notNull<br>";
echo "Type Operator: $isInstanceOf<br>";
echo "Bitwise: $bitwiseAnd, $bitwiseOr, $bitwiseXor, $bitwiseNot, $bitwiseLeftShift, $bitwiseRightShift<br>";
?>
