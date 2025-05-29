<?php
// Database setup script
// Run this once to create the database and add sample users

$host = 'localhost';
$username = 'root';
$password = '';

try {
    // Connect to MySQL server (without specifying database)
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database
    $pdo->exec("CREATE DATABASE IF NOT EXISTS user_auth");
    echo "Database 'user_auth' created successfully.<br>";
    
    // Connect to the new database
    $pdo->exec("USE user_auth");
    
    // Create users table
    $createTable = "
        CREATE TABLE IF NOT EXISTS users (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ";
    
    $pdo->exec($createTable);
    echo "Table 'users' created successfully.<br>";
    
    // Insert sample users
    $sampleUsers = [
        ['username' => 'admin', 'password' => password_hash('admin123', PASSWORD_DEFAULT)],
        ['username' => 'user1', 'password' => password_hash('password1', PASSWORD_DEFAULT)],
        ['username' => 'testuser', 'password' => password_hash('test123', PASSWORD_DEFAULT)]
    ];
    
    $stmt = $pdo->prepare("INSERT IGNORE INTO users (username, password) VALUES (?, ?)");
    
    foreach ($sampleUsers as $user) {
        $stmt->execute([$user['username'], $user['password']]);
    }
    
    echo "Sample users created successfully.<br><br>";
    echo "<strong>Test Credentials:</strong><br>";
    echo "Username: admin, Password: admin123<br>";
    echo "Username: user1, Password: password1<br>";
    echo "Username: testuser, Password: test123<br><br>";
    echo "<a href='login.php'>Go to Login Page</a>";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
