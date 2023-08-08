<?php
// File Handling in PHP

// 1. Opening and Reading Files:
$file = fopen("example.txt", "r"); // Open file in read mode

// Read and output the file line by line
while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file); // Close the file

// 2. Writing to Files:
$file = fopen("example.txt", "w"); // Open file in write mode

$data = "Hello, world!";
fwrite($file, $data);

fclose($file); // Close the file

// 3. Appending to Files:
$file = fopen("example.txt", "a"); // Open file in append mode

$data = "New content added!";
fwrite($file, $data);

fclose($file); // Close the file

// 4. Reading and Writing CSV Files:
// Read and output CSV data
$file = fopen("data.csv", "r");
while ($data = fgetcsv($file)) {
    print_r($data);
}
fclose($file);

// Write data to CSV
$data = ["John", "Doe", "john@example.com"];
$file = fopen("data.csv", "a");
fputcsv($file, $data);
fclose($file);

// 5. File Handling with file_get_contents() and file_put_contents():
// Read file into a string
$content = file_get_contents("example.txt");
echo $content;

// Write data to a file
$data = "New content using file_put_contents()";
file_put_contents("example.txt", $data);

// 6. Deleting Files:
if (file_exists("file_to_delete.txt")) {
    unlink("file_to_delete.txt");
}
?>
