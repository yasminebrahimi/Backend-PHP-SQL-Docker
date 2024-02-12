<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Add any necessary CSS or external stylesheets -->
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>

    <main>
        <section class="articles">
            <h2>Articles</h2>
            <!-- Display list of articles with options to delete -->
            <ul>
                <li>Article 1 <button>Delete</button></li>
                <li>Article 2 <button>Delete</button></li>
                <!-- Add more articles dynamically -->
            </ul>
        </section>

        <section class="add-article">
            <h2>Add New Article</h2>
            <!-- Form to add a new article with title, content, and image -->
            <form action="add_article.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Article Title" required>
                <textarea name="content" placeholder="Article Content" required></textarea>
                <input type="file" name="image" accept="image/*" required>
                <button type="submit">Add Article</button>
            </form>
        </section>

        <section class="comments">
            <h2>Comments to Review</h2>
            <!-- Display list of comments to review with options to approve or delete -->
            <ul>
                <li>Comment 1 <button>Approve</button> <button>Delete</button></li>
                <li>Comment 2 <button>Approve</button> <button>Delete</button></li>
                <!-- Add more comments dynamically -->
            </ul>
        </section>
    </main>
</body>
</html>
