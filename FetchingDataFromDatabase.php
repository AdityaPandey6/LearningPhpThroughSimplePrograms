<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching Data from tables</title>
</head>
<body>
    <form action="" method="POST">
        <label for="dno">Department Number:</label>
        <input type="number" name="dno" placeholder="Enter the department number" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    $db_name = 'pers';
    $pass = '';
    $user = 'root';
    $host = 'localhost';

    $conn = new mysqli($host , $user , $pass , $db_name);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connected successfully to the database<br>";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $dno = $_POST['dno'] ?? '';
            $sql = "SELECT * FROM student WHERE dno = '$dno'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "Name: " . $row['name'] . "<br>";
                    echo "email: " . $row['email'] . "<br>";
                    echo "Department No: " . $row['dno'] . "<br>";
                    echo "<hr>";
                }
            }
            else{
                echo "No records found for department number: $dno";
            }
        }
    }
?>