<?php
require './Post.php';

$title = "";
$date = date("d M Y, H:i");
$content = "";
$authorName = "";
$file = 'guestbook.json';
$posts = file_get_contents($file);
var_dump($posts);
$sd = json_decode($posts);
var_dump($sd);
$aw = json_encode($posts);
var_dump($aw);
if (isset($_POST['title'])) {
    $title = $_POST['title'];
}

if (isset($_POST['content'])) {
    $content = $_POST['content'];
}

if (isset($_POST['authorName'])) {
    $authorName = $_POST['authorName'];
}


// 1.read all posts 
//2. add new post to post array
//3. save to file
if (isset($_POST['submit'])) {
    $data = new Post($title, $date, $content, $authorName); // this is an object with private properties
    var_dump($data);
    $newPost = $data->jsonSerialize(); // this is the array with all the content
    var_dump($newPost);
    $newPostEncoded = json_encode($newPost); // this is the encoded content, it's a string between {}
    var_dump($newPostEncoded);
    // $posts .= $newPostEncoded;
    $df = json_encode($newPostEncoded);
    var_dump($df);
    var_dump($posts);
    $d = json_encode($posts);
    var_dump($d);
    file_put_contents($file, $posts);
}
?>


<?php require 'header.html'; ?>

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

<?php require 'footer.html'; ?>