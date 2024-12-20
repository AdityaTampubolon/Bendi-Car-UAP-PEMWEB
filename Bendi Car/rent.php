<?php
// File: rent.php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}

$car = $_GET['car'] ?? 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent <?php echo htmlspecialchars($car); ?></title>
</head>
<body>
    <h1>Rent <?php echo htmlspecialchars($car); ?></h1>
    <p>Thank you for choosing to rent <?php echo htmlspecialchars($car); ?>!</p>
    <a href="index.php">Back to Home</a>
</body>
</html>
