<!DOCTYPE html>
<html>
<head>
    <title>Processed Data</title>
</head>
<body>
    <h1>Processed Data</h1>

    <?php
    // Check if data was submitted using POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];

        echo "<p>Using POST method:</p>";
        echo "Name: $name<br>";
        echo "Age: $age<br>";
    }
    ?>

    <hr>

    <?php
    // Check if data was submitted using GET
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $age = $_GET['age'];

        echo "<p>Using GET method:</p>";
        echo "Name: $name<br>";
        echo "Age: $age<br>";
    }
    ?>
</body>
</html>
