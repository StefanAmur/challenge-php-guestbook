<h1 class="title">Sign our Guestbook</h1>
<form action="./index.php" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" required>
    <input type="hidden" name="date">
    <label for="content">Your message</label>
    <textarea name="content" rows="4" cols="50" maxlength="100" required></textarea>
    <label for="authorName">Your name</label>
    <input type="text" name="authorName" required>
    <button type="submit" name="submit">Submit</button>
</form>

<div class="posts">
    <?php

    if ($loadPosts->getAllPosts() != NULL) {
        $allPosts = array_reverse($allPosts);
        if (count($allPosts) > 20) {
            $allPosts = array_slice($allPosts, 0, 20);
        }
    }
    foreach ($allPosts as $post) {
        echo "<div class=\"post-container\";>";
        echo "<h2>" . $loadPosts->getTitle($post) . "</h2>";
        echo "<h4>" . $loadPosts->getAuthorName($post) . "</h4>";
        echo "<p>" . $loadPosts->getDate($post) . "</p>";
        echo "<p>" . $loadPosts->getContent($post) . "</p>";
        echo "</div>";
    }
    ?>
</div>