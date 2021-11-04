<?php
require './Post.php';
require './PostLoader.php';

$title = "";
$date = date("d M Y, H:i");
$content = "";
$authorName = "";
$file = 'guestbook.json';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
}

if (isset($_POST['content'])) {
    $content = $_POST['content'];
}

if (isset($_POST['authorName'])) {
    $authorName = $_POST['authorName'];
}

$loadPosts = new PostLoader();
if ($loadPosts->getAllPosts() != NULL) {
    $allPosts = $loadPosts->getFileContent();
} else {
    $allPosts = [];
}

if (isset($_POST['submit'])) {
    $newPost = $data = new Post($title, $date, $content, $authorName); // this is an object with private properties
    $newPostArray = $newPost->jsonSerialize(); // this is the array with all the content
    if ($allPosts == NULL) {
        $allPosts[0] = $newPostArray;
    } else {
        array_push($allPosts, $newPostArray);
    }
    $newPost->saveToFile($allPosts);
    $allPosts = $loadPosts->getFileContent();
}

require './Views/header.html';
require './Views/body.html';
require './Views/footer.html';
