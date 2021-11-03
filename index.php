<?php
require './Post.php';

$title = "";
$date = date("d M Y, H:i");
$content = "";
$authorName = "";
$file = 'guestbook.json';
$posts = [file_get_contents($file)];
var_dump($posts);
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    // file_put_contents($file, $title);
}

if (isset($_POST['content'])) {
    $content = $_POST['content'];
    // file_put_contents($file, $title);
}

if (isset($_POST['authorName'])) {
    $authorName = $_POST['authorName'];
    // file_put_contents($file, $title);
}


// 1.read all posts 
//2. add new post to post array
//3. save to file
if (isset($_POST['submit'])) {
    $data = new Post($title, $date, $content, $authorName);
    // var_dump($data);
    $newPost = $data->jsonSerialize();
    var_dump($newPost);
    $a = json_encode($newPost);
    var_dump($a);
    array_push($posts, $a);
    var_dump($posts);
    file_put_contents($file, $posts);
}
?>


<?php require 'header.html'; ?>

<h1 class="title">Sign out Guestbook</h1>
<form action="./index.php" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" required>
    <input type="hidden" name="date">
    <label for="content">Your message</label>
    <textarea name="content" rows="4" cols="50" maxlength="100" required>

    </textarea>
    <label for="authorName">Your name</label>
    <input type="text" name="authorName" required>
    <button type="submit" name="submit">Submit</button>
</form>

<?php require 'footer.html'; ?>