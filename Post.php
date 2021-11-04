<?php

declare(strict_types=1);

class Post implements JsonSerializable {
    private $title;
    private $date;
    private $content;
    private $authorName;

    public function __construct($title, $date, $content, $authorName) {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->authorName = $authorName;
    }

    public function jsonSerialize(): array {
        return ['data' => ['title' => $this->title, 'date' => $this->date, 'content' => $this->content, 'authorName' => $this->authorName]];
    }

    public function saveToFile($array) {
        file_put_contents("guestbook.json", json_encode($array));
    }
}
