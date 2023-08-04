<?php
// Heredoc and Nowdoc in PHP

// Heredoc Syntax
$heredocExample = <<<EOT
This is a heredoc example.
You can include variables like \$variable.
EOT;

// Nowdoc Syntax
$nowdocExample = <<<'EOT'
This is a nowdoc example.
Variables like \$variable won't be interpolated.
EOT;

// Number Formatting
$number = 12345.6789;
$formattedNumber = number_format($number, 2, '.', ',');
// Result: 12,345.68

// Date and Time Formatting
$timestamp = time();
$formattedDate = date("Y-m-d H:i:s", $timestamp);
// Result: e.g., 2023-08-04 14:30:00

// Currency Formatting
$amount = 1234.56;
$formattedCurrency = "$" . number_format($amount, 2);
// Result: $1,234.56

// Displaying Results
echo "Heredoc Example:<br>$heredocExample<br><br>";
echo "Nowdoc Example:<br>$nowdocExample<br><br>";
echo "Number Formatting: $formattedNumber<br>";
echo "Date and Time Formatting: $formattedDate<br>";
echo "Currency Formatting: $formattedCurrency<br>";

// Separate section divider
echo "<hr>";

// Concatenation
$string1 = "Hello, ";
$string2 = "PHP!";
$resultConcat = $string1 . $string2; // Result: Hello, PHP!

// String Length
$length = strlen("Hello, PHP!"); // Result: 11

// Substring
$string = "Hello, PHP!";
$substring = substr($string, 7, 3); // Result: PHP

// String Replace
$stringReplace = "Hello, World!";
$newString = str_replace("World", "PHP", $stringReplace); // Result: Hello, PHP!

// Case Conversion
$stringCase = "Hello, PHP!";
$lowercase = strtolower($stringCase); // Result: hello, php!
$uppercase = strtoupper($stringCase); // Result: HELLO, PHP!

// Trimming
$stringTrim = "   Hello, PHP!   ";
$trimmed = trim($stringTrim); // Result: Hello, PHP!

// Padding
$stringPad = "PHP";
$padded = str_pad($stringPad, 10, "*", STR_PAD_BOTH); // Result: ****PHP****

// Searching
$stringSearch = "Hello, PHP!";
$position = strpos($stringSearch, "PHP"); // Result: 7

// Splitting
$stringSplit = "apple,banana,orange";
$fruits = explode(",", $stringSplit); // Result: ["apple", "banana", "orange"]

// Joining
$fruitsJoin = ["apple", "banana", "orange"];
$stringJoin = implode(", ", $fruitsJoin); // Result: apple, banana, orange

// Formatting
$name = "John";
$age = 30;
$formatted = sprintf("My name is %s and I am %d years old.", $name, $age);
// Result: My name is John and I am 30 years old.

// Escaping
$html = "<p>This is a paragraph.</p>";
$escapedHtml = htmlspecialchars($html);

// Displaying Results
echo "Concatenation: $resultConcat<br>";
echo "String Length: $length<br>";
echo "Substring: $substring<br>";
echo "String Replace: $newString<br>";
echo "Case Conversion: $lowercase, $uppercase<br>";
echo "Trimming: $trimmed<br>";
echo "Padding: $padded<br>";
echo "Searching: Position at $position<br>";
echo "Splitting: "; print_r($fruits); echo "<br>";
echo "Joining: $stringJoin<br>";
echo "Formatting: $formatted<br>";
echo "Escaping: $escapedHtml<br>";
?>
