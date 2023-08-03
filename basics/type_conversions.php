<?php
    //Implicit
    $num1 = 10;
    $num2 = "20";
    $result = $num1 + $num2; // Implicit conversion of string to int
    echo $result."<br>"; // Output: 30
    
    // Explicit
    $floatNum = 3.14;
    $intNum = (int) $floatNum; // Explicitly cast float to int
    echo $intNum."<br>"; // Output: 3  
    $stringNum = "42";
    $intFromString = intval($stringNum); // Convert string to int
    echo $intFromString."<br>"; // Output: 42    

    // Type Juggling
    $total = "10" + 5; // String "10" is implicitly converted to int
    echo $total."<br>";; // Output: 15
    $concatenated = "Hello" . 42; // Integer 42 is implicitly converted to string
    echo $concatenated."<br>"; // Output: Hello42
?>

<!-- 
    Implicit conversion is a specific type of type juggling that occurs when PHP automatically 
    converts one data type to another during an operation or assignment. Type juggling, on the other hand, 
    is a broader term that includes all instances where PHP dynamically converts data types to enable 
    operations or comparisons. While implicit conversion is a form of type juggling, not all type juggling 
    scenarios involve implicit conversion.
 -->