<?php 
$name = "";
$course = "";
$subject = "";
$studentId = "";
$bookname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    if (isset($_POST['course'])) {
        $course = $_POST['course'];
    }

    if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }

    if (isset($_POST['studentid'])) {
        $studentId = $_POST['studentid'];
    }

    if (isset($_POST['bookname'])) {
        $bookname = $_POST['bookname'];
    }

    // For debugging/demo purposes
    echo "<h2>Form Data Received:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Course: " . htmlspecialchars($course) . "<br>";
    echo "Subject: " . htmlspecialchars($subject) . "<br>";
    echo "Student ID: " . htmlspecialchars($studentId) . "<br>";
    echo "Book Name: " . htmlspecialchars($bookname) . "<br>";
}
?>
