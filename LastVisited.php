<?php 
$datetime = date('y-m-d h:i:s');
setcookie('lastVisit', $datetime, time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE['lastVisit'])) {
    echo "Last visit: " . $_COOKIE['lastVisit'];
} else {
    echo "This is your first visit!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Demonstration</title>
</head>
<body>
    <h2><?php echo time() ?></h2>
</body>
</html>