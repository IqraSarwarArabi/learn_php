<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $response = 'Hello, ' . $name . '! Your request was successfully processed.';
        echo $response;
    } else {
        echo 'Name parameter is missing.';
    }
} else {
    echo 'Invalid request method.';
}
?>
