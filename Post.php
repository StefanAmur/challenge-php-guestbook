<?php

declare(strict_types=1);

class Post implements JsonSerializable {
    private $title;
    private $date;
    private $content;
    private $authorName;

    public function __construct($title, $date, $content, $authorName) {
        $this->title = $this->protect($title);
        $this->date = $this->protect($date);
        $this->content = $this->protect($content);
        $this->authorName = $this->protect($authorName);
    }

    public function jsonSerialize(): array {
        return ['data' => ['title' => $this->title, 'date' => $this->date, 'content' => $this->content, 'authorName' => $this->authorName]];
    }

    public function saveToFile($array) {
        file_put_contents("guestbook.json", json_encode($array));
    }

    public function protect(string $toCheck): string {
        return htmlSpecialchars($toCheck, ENT_NOQUOTES);
    }
}
