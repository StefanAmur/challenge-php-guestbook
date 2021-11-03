<?php

declare(strict_types=1);

class PostLoader {
    private $posts = [];

    public function getPosts(): array {
        return $this->posts;
    }

    public function addPost(Post $post): void {
        array_push($this->posts, $post);
    }
}
