<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .welcome-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .welcome-header {
            color: #333;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .welcome-message {
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .username {
            color: #667eea;
            font-weight: bold;
        }
        .logout-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.2s;
        }
        .logout-btn:hover {
            transform: translateY(-2px);
        }
        .success-icon {
            font-size: 64px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="success-icon">✓</div>
        <h1 class="welcome-header">Welcome!</h1>
        <p class="welcome-message">
            Hello <span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!<br>
            You have successfully logged in to the system.
        </p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
