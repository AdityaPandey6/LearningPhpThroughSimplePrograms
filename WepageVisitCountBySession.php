<?php 
session_start();

if(isset($_SESSION['visited'])) {
    $_SESSION['visited'] += 1;
} else {
    $_SESSION['visited'] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Setup</title>
</head>
<body>
    <h2>Page Views: <?php echo $_SESSION['visited']; ?></h2>
</body>
</html>