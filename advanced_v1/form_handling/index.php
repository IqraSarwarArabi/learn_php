<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action="process_form.php">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <textarea name="message" placeholder="Message" required></textarea><br>
        <input type="hidden" name="csrf_token" value="<?php include 'process_form.php'; echo generateCSRFToken(); ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
