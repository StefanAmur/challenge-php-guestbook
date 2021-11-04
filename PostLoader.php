<?php

declare(strict_types=1);

class PostLoader {
    private $posts;

    public function __construct() {
        $this->posts = $this->getFileContent();
    }

    public function addPost(Post $post): void {
        array_push($this->posts, $post);
    }

    public function getFileContent() {
        return json_decode(file_get_contents("guestbook.json"), true);
    }

    public function getAllPosts() {
        return $this->posts;
    }

    public function getTitle($post): string {
        return htmlspecialchars($post["data"]["title"], ENT_NOQUOTES);
    }

    public function getDate($post): string {
        return htmlspecialchars($post["data"]["date"], ENT_NOQUOTES);
    }

    public function getContent($post): string {
        return htmlspecialchars($post["data"]["content"], ENT_NOQUOTES);
    }

    public function getAuthorName($post): string {
        return htmlspecialchars($post["data"]["authorName"], ENT_NOQUOTES);
    }
}
