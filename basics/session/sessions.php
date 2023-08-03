<?php
session_start();

if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 1;
} else {
    $_SESSION['visit_count']++;
}

$visitCount = $_SESSION['visit_count'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <p>This is your visit number <?php echo $visitCount; ?></p>
</body>
</html>
