<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch book by accnumber
$book = null;
if (isset($_POST['search_accnumber'])) {
    $search_accnumber = $_POST['search_accnumber'];
    $stmt = $conn->prepare("SELECT * FROM bookstorage WHERE accnumber = ?");
    $stmt->bind_param("s", $search_accnumber);
    $stmt->execute();
    $result = $stmt->get_result();
    $book = $result->fetch_assoc();
    $stmt->close();
}
else{
    if(isset($_POST['title']) && isset($_POST['authorName']) && isset($_POST['accnumber']) && isset($_POST['edition']) && isset($_POST['publisher'])) {
        $title = $_POST['title'];
        $authorName = $_POST['authorName'];
        $accnumber = $_POST['accnumber'];
        $edition = $_POST['edition'];
        $publisher = $_POST['publisher'];

        $sql = "INSERT INTO bookstorage (title, author, accnumber, edition, publisher) VALUES ('$title', '$authorName', '$accnumber', '$edition', '$publisher')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System- Simple</title>
</head>
<body>
    <h1>Welcome to Book Management System-</h1>
    <div id="bookManagement" style="display:none;">   
        <h2>Book Management</h2>
        <form id="bookForm" action="" method="POST">
            <label for="title">Book Name:</label>
            <input type="text" id="title" name="title" required>
            <br><br>
            <label for="authorName">Author Name:</label>
            <input type="text" id="authorName" name="authorName" required>
            <br><br>
            <label for="accnumber">Acc Nummber</label>
            <input type="text" id="accnumber" name="accnumber" required>
            <br><br>
            <label for="edition">Edition</label>
            <input type="text" id="edition" name="edition" required>
            <br><br>
            <label for="publisher">Publisher</label>
            <input type="text" id="publisher" name="publisher" required>
            <br><br>
            <input type="submit" value="Add">
            <input type="reset" value="Reset">
        </form>
        <br><br>
    </div>

    <!-- Search Book Form -->
    <div>
        <h2>Search Book by Acc Number</h2>
        <form method="POST" action="">
            <label for="search_accnumber">Acc Number:</label>
            <input type="text" id="search_accnumber" name="search_accnumber" required>
            <input type="submit" value="Search">
        </form>
        <?php if ($book): ?>
            <h3>Book Details:</h3>
            <ul>
                <li><strong>Title:</strong> <?php echo htmlspecialchars($book['title']); ?></li>
                <li><strong>Author:</strong> <?php echo htmlspecialchars($book['author']); ?></li>
                <li><strong>Acc Number:</strong> <?php echo htmlspecialchars($book['accnumber']); ?></li>
                <li><strong>Edition:</strong> <?php echo htmlspecialchars($book['edition']); ?></li>
                <li><strong>Publisher:</strong> <?php echo htmlspecialchars($book['publisher']); ?></li>
            </ul>
        <?php  elseif (isset($_POST['search_accnumber'])): ?>
            <p>No book found with that Acc Number.</p>
        <?php endif; ?>
    </div>

    <button id="addbook">Add Book</button>
    <button id="searchbook">Search Book</button>
<script>
    let addBookButton = document.getElementById('addbook');
    let searchBookButton = document.getElementById('searchbook');
    let bookManagement = document.getElementById('bookManagement');
    addBookButton.addEventListener('click', function() {
        bookManagement.style.display = 'block';
    });
</script>
</body>
</html>