<?php
// Conditional Statements

// if Statement
$x = 10;
if ($x > 5) {
    echo "if: x is greater than 5<br>";
}

// if-else Statement
if ($x > 5) {
    echo "if-else: x is greater than 5<br>";
} else {
    echo "if-else: x is not greater than 5<br>";
}

// if-elseif-else Statement
if ($x > 15) {
    echo "if-elseif-else: x is greater than 15<br>";
} elseif ($x > 5) {
    echo "if-elseif-else: x is greater than 5 but not greater than 15<br>";
} else {
    echo "if-elseif-else: x is not greater than 5<br>";
}

// switch Statement
$day = "Wednesday";
switch ($day) {
    case "Monday":
        echo "switch: It's the start of the week.<br>";
        break;
    case "Wednesday":
        echo "switch: It's the middle of the week.<br>";
        break;
    default:
        echo "switch: It's just another day.<br>";
}

// Loops

// for Loop
for ($i = 0; $i < 5; $i++) {
    echo "for Loop: Iteration: $i<br>";
}

// while Loop
$i = 0;
while ($i < 5) {
    echo "while Loop: Iteration: $i<br>";
    $i++;
}

// do-while Loop
$i = 0;
do {
    echo "do-while Loop: Iteration: $i<br>";
    $i++;
} while ($i < 5);

// foreach Loop
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
    echo "foreach Loop: Fruit: $fruit<br>";
}

// break Statement
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break; // Exits the loop when i is 5
    }
    echo "break: Iteration: $i<br>";
}

// continue Statement
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue; // Skips iteration when i is 2
    }
    echo "continue: Iteration: $i<br>";
}
?>
