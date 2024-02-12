<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Title</title>
    <!-- Add any necessary CSS or external stylesheets -->
</head>
<body>
    <header>
        <h1>Article Title</h1>
    </header>

    <!-- Add Facebook share button -->
    <div class="share-button">
        <a href="https://www.facebook.com/sharer/sharer.php?u=YourArticleURLHere" target="_blank">Share on Facebook</a>
    </div>

    <main>
        <article>
            <!-- Display article content dynamically -->
            <h2>Article Title</h2>
            <p>
                Article content goes here. This is the full article content that users can read.
            </p>
        </article>

        <!-- Comment section -->
        <section class="comments">
            <h3>Comments</h3>
            <!-- Add comment form -->
            <form action="add_comment.php" method="POST">
                <textarea name="comment" id="comment" rows="4" maxlength="500" required></textarea>
                <button type="submit">Post Comment</button>
            </form>
        </section>
    </main>

    <!-- Add JavaScript to handle comment length and banned words -->
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            var comment = document.getElementById('comment').value;
            var bannedWords = ['apple']; // Add more banned words here

            // Check comment length
            if (comment.length > 500) {
                alert('Your comment is too long');
                event.preventDefault();
                return;
            }

            // Check for banned words
            for (var i = 0; i < bannedWords.length; i++) {
                if (comment.toLowerCase().includes(bannedWords[i])) {
                    alert('Your comment should be reviewed');
                    event.preventDefault();
                    return;
                }
            }
        });
    </script>
</body>
</html>
