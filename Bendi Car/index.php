<?php
// File: index.php

// Memulai session
session_start();

// Memastikan pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENDI CAR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        header h1 {
            margin: 0;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        nav {
            text-align: right;
            padding: 1rem;
            background-color: #444;
            color: white;
        }
        nav a {
            color: white;
            margin: 0 10px;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .car-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .car-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .car-card:hover {
            transform: scale(1.05);
        }
        .car-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .car-card h3 {
            margin: 10px 0;
        }
        .car-card p {
            color: #555;
        }
        .car-card a {
            display: inline-block;
            margin: 5px;
            padding: 5px 10px;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
        }
        .car-card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to BENDI CAR</h1>
    </header>
    <nav>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?>!</span>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="container">
        <h2>Available Cars</h2>
        <div class="car-list">
            <div class="car-card">
                <img src="toyota_corolla.jpg" alt="Toyota Corolla">
                <h3>Toyota Corolla</h3>
                <p>Price: $78,000</p>
                <a href="buy.php?car=Toyota Corolla">Buy</a>
                <a href="rent.php?car=Toyota Corolla">Rent</a>
            </div>
            <div class="car-card">
                <img src="honda civic.jpg" alt="Honda Civic">
                <h3>Honda Civic</h3>
                <p>Price: $89,000</p>
                <a href="buy.php?car=Honda Civic">Buy</a>
                <a href="rent.php?car=Honda Civic">Rent</a>
            </div>
            <div class="car-card">
                <img src="bmw-3-series-sedan-l.jpg" alt="BMW">
                <h3>BMW</h3>
                <p>Price: $102,000</p>
                <a href="buy.php?car=Honda Civic">Buy</a>
                <a href="rent.php?car=Honda Civic">Rent</a>
            </div>
            <div class="car-card">
                <img src="chehennessey chevrolet.jpg" alt="Chevrolet Camaro">
                <h3>Chevrolet Camaro</h3>
                <p>Price: $290,000</p>
                <a href="buy.php?car=Chevrolet Camaro">Buy</a>
                <a href="rent.php?car=Chevrolet Camaro">Rent</a>
            </div>
        </div>
    </div>
</body>
</html>
