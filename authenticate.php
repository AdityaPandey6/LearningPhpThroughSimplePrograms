<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Validate input
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Please fill in all fields.";
        header("Location: login.php");
        exit();
    }
    
    try {
        // Prepare and execute query to check user credentials
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Check if user exists and password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: welcome.php");
            exit();
        } else {
            // Login failed
            $_SESSION['error'] = "Invalid username or password. <a href='login.php' class='back-link'>Try again</a>";
            header("Location: error.php");
            exit();
        }
        
    } catch(PDOException $e) {
        $_SESSION['error'] = "Database error occurred. <a href='login.php' class='back-link'>Try again</a>";
        header("Location: error.php");
        exit();
    }
} else {
    // If accessed directly without POST data
    header("Location: login.php");
    exit();
}
?>
