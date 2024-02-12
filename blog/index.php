<?php
include 'db.php';

// Query articles from the database
$sql = "SELECT * FROM articles";
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
$conn->close();
?>
