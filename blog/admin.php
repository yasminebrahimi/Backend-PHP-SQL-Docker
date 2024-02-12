<?php
include 'db.php';

// Check if the form is submitted for deleting a record
if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Delete record from the database
    $sql = "DELETE FROM articles WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Check if the form is submitted for hiding a record
if(isset($_POST['hide'])) {
    $id = $_POST['id'];

    // Update record to set hidden status
    $sql = "UPDATE articles SET hidden = 1 WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record hidden successfully";
    } else {
        echo "Error hiding record: " . $conn->error;
    }
}

// Check if the form is submitted for editing a record
if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Update record in the database
    $sql = "UPDATE articles SET title = '$title', content = '$content' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
