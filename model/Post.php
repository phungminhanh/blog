<?php

namespace Model;

class Post
{
    public $id;
    public $title;
    public $teaser;
    public $content;
    public $created;
    public $idAuthor;
    public function __construct($title, $teaser, $content, $created ,$idAuthor)
    {
        $this->title = $title;
        $this->teaser = $teaser;
        $this->content = $content;
        $this->created = $created;
        $this ->idAuthor = $idAuthor;
    }
}