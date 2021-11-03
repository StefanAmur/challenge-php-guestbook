<?php

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

    public function getTitle() {
        return $this->title;
    }

    public function getDate() {
        return $this->date;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthorName() {
        return $this->authorName;
    }

    public function jsonSerialize() {
        return ['title' => $this->getTitle(), 'date' => $this->getDate(), 'content' => $this->getContent(), 'authorName' => $this->getAuthorName()];
    }

    public function getAllInfo() {
        return $this->title;
        return $this->date;
        return $this->content;
        return $this->authorName;
    }
}
