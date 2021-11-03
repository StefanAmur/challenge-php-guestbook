<?php

$title = "";
$file = 'guestbook.json';
$data = [];
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    file_put_contents($file, $title);
}
?>


<?php require 'header.html'; ?>

<h1 class="title">Sign out Guestbook</h1>
<form action="./index.php" method="post">
    <label for="title">Title</label>
    <input type="text" name="title">
    <label for="date">Date</label>
    <input type="text" name="date">
    <label for="content">Your message</label>
    <textarea name="content" rows="4" cols="50" maxlength="100">

    </textarea>
    <label for="authorName">Your name</label>
    <input type="text" name="authorName">
    <button type="submit">Submit</button>
</form>

<?php require 'footer.html'; ?>