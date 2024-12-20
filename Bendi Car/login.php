<?php
session_start();

// Simulasi data pengguna
$user_data = [
    'username' => 'Aditya',
    'password' => '04112005' // Sebaiknya menggunakan hash di dunia nyata
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validasi
    if ($username === $user_data['username'] && $password === $user_data['password']) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BENDI CAR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 1rem;
            font-size: 24px;
            color: #333;
        }
        .login-container input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            margin-top: 1rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container .error {
            color: red;
            font-size: 14px;
            margin-top: 1rem;
        }
        .login-container p {
            margin-top: 1rem;
            font-size: 14px;
            color: #666;
        }
        .login-container p a {
            color: #007bff;
            text-decoration: none;
        }
        .login-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login to BENDI CAR</h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <p>Don't have an account? <a href="#">Register</a></p>
    </div>
</body>
</html>
