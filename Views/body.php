<section class="main">

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


    <form action="./index.php" method="post">
        <label for="postsNr">Wanna see some posts? How many?</label>
        <input type="number" name="postsNr" max="40" min="1" value="20">
        <button type="submit" name="userPostsChoice">Submit</button>
    </form>


    <div class="posts">
        <?php

        if ($loadPosts->getAllPosts() != NULL) {
            $allPosts = array_reverse($allPosts);
        }

        // when the user clicks any of the 2 buttons:
        // check if he chooses how many posts to see 
        // if not set default to 20
        if (isset($_POST['submit']) || isset($_POST['userPostsChoice'])) {
            // check if he chooses how many posts to see
            if (isset($_POST['postsNr'])) {
                $userPostsValue = $_POST['postsNr'];
            } else {
                $userPostsValue = 20;
            }

            if ($userPostsValue <= sizeof($allPosts)) {
                $allPosts = array_slice($allPosts, 0, $userPostsValue);
            }

            // display the posts
            foreach ($allPosts as $post) {
                echo "<div class=\"post-container\";>";
                echo "<h3>" . $loadPosts->getTitle($post) . "</h3>";
                echo "<h4>" . $loadPosts->getAuthorName($post) . "</h4>";
                echo "<p>" . $loadPosts->getDate($post) . "</p>";
                echo "<p>" . $loadPosts->getContent($post) . "</p>";
                echo "</div>";
            }
        }

        ?>
    </div>
</section>