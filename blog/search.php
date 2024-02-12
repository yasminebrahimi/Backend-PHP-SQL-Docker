<?php
include 'db.php';

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    
    // Query articles from the database based on search term
    $sql = "SELECT * FROM articles WHERE title LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='article'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['content'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No articles found";
    }
}
$conn->close();
?>
